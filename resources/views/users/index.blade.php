<x-app-layout>
    <x-slot name="header">
        {{ __('Create User') }}
    </x-slot>
    <div class="max-w-full">
        <x-auth-session-status :status="session('status')" />
        <x-auth-validation-errors />
        <div class="flex space-x-4">
            <div class="w-1/3">
                <form method="POST" action="{{ route('users.store') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" name="name" type="text" placeholder="Full Name" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('E-mail')" />
                        <x-text-input id="email" name="email" type="email" placeholder="E-Mail" />
                    </div>
                    <div>
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" name="password" type="password" placeholder="Password" />
                    </div>
                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="Confirm Password" />
                    </div>
                    <div class="flex justify-end mt-2">
                        <x-primary-button type="submit">Save</x-primary-button>
                    </div>
                </form>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-2/3">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">No</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Students</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4">{{ ++$i }}</td>
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4"><a href="{{ route('users.students.index', $user) }}">
                                        <x-primary-button type="button">Students</x-primary-button>

                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
