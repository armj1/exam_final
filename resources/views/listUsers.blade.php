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
                @foreach($users as $user)
                <div style="margin-bottom:20px;   border-bottom: 2px solid grey;">
                <tr>
                    <td><strong>ID: </strong>{{$user->id}}</td><br>
                    <td><strong>E-mail: </strong>{{$user->email}}</td><br>
                    <td><strong>Name: </strong>{{$user->name}}</td><br>
                    <td><strong>Surname: </strong>{{$user->surname}}</td><br>
                    <td><strong>Department: </strong>{{$user->department}}</td><br>
                    <td><strong>Role: </strong>{{$user->role}}</td><br>
                </tr>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>