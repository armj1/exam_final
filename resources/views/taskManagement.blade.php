<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Look at all the tasks you've assigned, delete or update them or just simply assign one to a specific user!<br><br>
                    
                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li><a href="{{ url('listTasks') }}">Look at all asigned tasks</a></li>
                        <li><a href="{{ url('DeleteUpdateTask') }}">Delete or update a task</a></li>
                        <li><a href="{{ url('assignTask') }}">Assign a task to the user</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
