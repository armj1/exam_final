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
                    <table  style="border:1px solid black; width:100%; border-collapse:separate; padding:8px">
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>User ID</strong></td>
                        <td><strong>Description</strong></td>
                        <td><strong>Term</strong></td>
                    </tr>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>                        
                        <td>{{$task->employee_ID}}</td>
                        <td>{{$task->description}}</td>
                        <td>{{$task->term}}</td>
                    </tr>
                    @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>