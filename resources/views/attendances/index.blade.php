<x-app-layout>
    <x-slot name="header">
        {{ __('Attendance Record') }}
    </x-slot>
    <div class="max-w-full">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Entry Time</th>
                        <th scope="col" class="px-6 py-3">Exit Time</th>
                        <th scope="col" class="px-6 py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendances as $attendance)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4">{{ $attendance->student->lastname }}</td>
                            <td class="px-6 py-4">{{ $attendance->entry_time }}</td>
                            <td class="px-6 py-4">{{ $attendance->exit_time ?? '--' }}</td>
                            <td class="px-6 py-4">{{ $attendance->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
