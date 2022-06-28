<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create and send report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                @foreach($tasks as $task)
                You are going to create and send report for task with ID: <strong>{{$task->id}}</strong><br>
                and description: <strong>"{{$task->description}}"</strong><br>                
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form action = "{{ action([App\Http\Controllers\reportController::class,'store'])}}" method="POST">
                        @csrf
                        <label for='id'><strong>Report ID:</strong></label>
                        <input type='text' id='id' name='id' style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br>
                        <label for='employee_ID'><strong>Your ID:</strong></label>
                        <input type='text' id='employee_ID' name='employee_ID' value="{{old('userid', Auth::user()->id) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='task_ID'><strong>Task ID:</strong></label>
                        <input type='text' id='task_ID' name='task_ID' value="{{ old('taskid', $task->id) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='file'><strong>Link to the file:</strong></label>
                        <input type='text' id='file' name='file' size="50" style="margin-bottom:10px; margin-left:5px"><br>

                        <button type='submit' style="border:1px solid black; padding:5px; width:15%;">Send report</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>