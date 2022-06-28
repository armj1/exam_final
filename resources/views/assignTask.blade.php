<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign new task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Fill out the fields and then press "Assign" button.<br><br>
                    <x-auth-validation-errors class="mb-4" :errors="$errors"/>
                    <form action = "{{ action([App\Http\Controllers\taskController::class,'store'])}}" method="POST">
                        @csrf
                        <label for='id'><strong>Task ID</strong></label>
                        <input type='text' id='id' name='id' style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br>
                        <label for='employee_ID'><strong>User ID</strong></label>
                        <input type='text' id='employee_ID' name='employee_ID' style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br>
                        <label for='description'><strong>Description</strong></label>
                        <input type='text' id='description' name='description' size="50" style="margin-bottom:10px; margin-left:5px; margin-top:8px; "><br>
                        <label for='term'><strong>Term</strong></label>
                        <input type='text' id='term' name='term' style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br><br>

                        <button type='submit' style="border:1px solid black; padding:5px; width:15%;">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>