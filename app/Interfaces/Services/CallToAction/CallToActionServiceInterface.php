<?php

namespace App\Interfaces\Services\CallToAction;

use App\Models\CallToAction;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;

interface CallToActionServiceInterface
{
    public function create(array $data): CallToAction;
    public function update(CallToAction $callToAction, array $data): CallToAction;
    public function delete(CallToAction $callToAction): bool;
    public function all(): Collection;
    public function first(): object|null;
    public function getById(int $id): CallToAction|null;
    public function find(int $id): CallToAction|null;
    public function paginate(int $perPage): LengthAwarePaginator;
    public function get(int $perPage): Paginator;
    public function search(string $searchTerm, int $perPage): LengthAwarePaginator;
}
