<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of assigned tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Here are all the tasks that administrator has assigned to users.<br><br>
                    @if (count($tasks) == 0)
                        <p><strong> Looks like there are no assigned tasks (or maybe all of them are deleted)!</strong></p>
                    @else
                    @foreach($tasks as $task)
                    <div style="margin-bottom:20px;   border-bottom: 2px solid grey;">
                    <tr>
                        <td><strong>ID: </strong>{{$task->id}}</td><br>                    
                        <td><strong>User ID: </strong>{{$task->employee_ID}}</td><br>
                        <td><strong>Description: </strong>{{$task->description}}</td><br>
                        <td><strong>Term: </strong>{{$task->term}}</td><br>
                    </tr>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>