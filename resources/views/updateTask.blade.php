<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating task') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Fill out fields that you'd like to update and then press "Update" button.<br>
                As you noticed, task ID and user ID is not available for editing.<br><br>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @foreach ($tasks as $task)   
                    <td>You are going to edit task with ID: <strong>{{$task->id}}</strong> assigned to user with ID: <strong>{{$task->employee_ID}}</strong></td><br>
                    <form action = "{{ action([App\Http\Controllers\taskController::class,'update'], $task->id) }}" method='POST'>
                        @csrf
                        @method('PUT')
                        <label for='description'><strong>Description</strong></label>
                        <input type='text' id='description' name='description' size="50" value="{{ old('description', $task->description) }}" style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br>
                        <label for='term'><strong>Term</strong></label>
                        <input type='text' id='term' name='term' value="{{ old('term', $task->term) }}" style="margin-bottom:10px; margin-left:5px"><br>

                        <button type='submit' style="border:1px solid black; padding:5px; width:15%;">Update</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>