<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete or update tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    If for some reason you need to delete or update a task, this page is where you can do it.<br>
                    To update press "Update" button under the selected task and to delete - "Delete" button.<br><br> 

                    @if (count($tasks) == 0)
                        <p><strong> Looks like there are no assigned tasks (or maybe all of them are deleted)!</strong></p>
                    @else
                    @foreach ($tasks as $task)   
                    <tr>
                    <td><strong>ID: </strong>{{$task->id}} </td><br>
                    <td><strong>User ID: </strong>{{$task->employee_ID}} </td><br>
                    <td><strong>Description: </strong>{{$task->description}} </td><br>
                    <td><strong>Term: </strong>{{$task->term}}</td><br>
                    <td><form>
                        <a button type="button" style="border:1px solid black; padding:5px; width:15%; float:left; text-align:center" href="updateTask/{{$task->id}}">Update</a>
                    </form></td></tr>       
                    <td><form action="{{action([App\Http\Controllers\taskController::class, 'destroy'], $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:1px solid black; padding:5px; margin-left:10px; width:15%; ">Delete</button>
                    </form></td><br></tr>           
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>