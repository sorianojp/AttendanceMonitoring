<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ $user->name }}
        </h2>
    </x-slot>
    <div class="max-w-full">
        <x-auth-session-status :status="session('status')" />
        <x-auth-validation-errors />
        <div class="flex space-x-4">
            <div class="w-1/3">
                <form action="{{ route('users.students.store', $user) }}" method="POST">
                    @csrf
                    <div>
                        <x-input-label for="lastname" :value="__('Last Name')" />
                        <x-text-input type="text" name="lastname" />
                    </div>
                    <div>
                        <x-input-label for="firstname" :value="__('First Name')" />
                        <x-text-input type="text" name="firstname" />
                    </div>
                    <div>
                        <x-input-label for="middlename" :value="__('Middle Name')" />
                        <x-text-input type="text" name="middlename" />
                    </div>
                    <div>
                        <x-input-label for="student_no" :value="__('RFID No')" />
                        <x-text-input type="text" name="student_no" />
                    </div>
                    {{-- <div class="flex justify-end mt-2">
                        <x-primary-button type="submit">Save</x-primary-button>
                    </div> --}}
                </form>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-2/3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Student No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user->students as $student)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">{{ ++$i }}</td>
                                <td class="px-6 py-4">{{ $student->student_no }}</td>
                                <td class="px-6 py-4">{{ $student->full_name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
