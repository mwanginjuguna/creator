<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-200">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Message
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Action</span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Kanothe
            </th>
            <td class="px-6 py-4">
                Great website. I need a landing page.
            </td>
            <td class="px-6 py-4">
                mk@gmail.com
            </td>
            <td class="px-6 py-4 text-right">
                <a href="#" class="font-medium text-blue-600 hover:underline">View</a>
            </td>
        </tr>
        @foreach($messages as $message)
            <tr class="bg-white border-b hover:bg-gray-50">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    {{ $message->name }}
                </th>
                <td class="px-6 py-4">
                    {{ $message->message }}
                </td>
                <td class="px-6 py-4">
                    {{ $message->email }}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="/dashboard/message/{{ $message->id }}" class="font-medium text-blue-600 hover:underline">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
