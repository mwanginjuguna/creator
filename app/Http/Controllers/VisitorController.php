<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VisitorController extends Controller
{
    public function index(): View
    {
        return view('admin.visitors', [
            "visitors" => Visitor::query()->oldest()->simplePaginate(15)
        ]);
    }

    public function show(Request $request, Visitor $visitor): View
    {
        $visitorData = Visitor::query()->where('ip_address', '=', $visitor->ip_address)->get();

        return view('admin.visitor-show', [
            'visitor' => $visitor,
            'visitorData' => $visitorData
        ]);
    }

    public function destroy(Request $request, Visitor $visitor): RedirectResponse
    {
        $visitor->delete();
        return redirect()->route('admin-visitors')->with('Success', 'Visitor removed successfully.');
    }
}
