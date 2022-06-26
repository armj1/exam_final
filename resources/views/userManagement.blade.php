<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    There are couple of things you could do to users.<br><br>
                    Here are your options:<br>
                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li><a href="{{ url('listUser') }}">List all registered users</a></li>
                        <li><a href="{{ url('registerUser') }}">Register a new user</a></li>
                        <li><a href="{{ url('deleteUser') }}">Delete a registered user</a></li>
                        <li><a href="{{ url('updateUser') }}">Update information about a registered user</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
