<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of all registered users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <table  style="border:1px solid black; width:100%; border-collapse:separate; padding:8px">
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>E-mail</strong></td>
                    <td><strong>Name</strong></td>
                    <td><strong>Surname</strong></td>
                    <td><strong>Department</strong></td>
                    <td><strong>Role</strong></td>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->department}}</td>
                    <td>{{$user->role}}</td>
                </tr>
                @endforeach
            </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>