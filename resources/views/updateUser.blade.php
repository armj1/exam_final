<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Updating user') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                Fill out fields that you'd like to update and then press "Update" button.<br>
                As you noticed, user ID is not available for editing.<br><br>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    @foreach ($users as $user)   
                    <td>You are going to edit user with ID: <strong>{{$user->id}}</strong></td><br>
                    <form action = "{{ action([App\Http\Controllers\userController::class,'update'], $user->id) }}" method='POST'>
                        @csrf
                        @method('PUT')
                        <label for='email'><strong>E-mail</strong></label>
                        <input type='email' id='email' name='email' value="{{ old('email', $user->email) }}" style="margin-bottom:10px; margin-left:5px; margin-top:8px"><br>
                        <label for='name'><strong>Name</strong></label>
                        <input type='text' id='name' name='name' value="{{ old('name', $user->name) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='surname'><strong>Surname</strong></label>
                        <input type='text' id='surname' name='surname' value="{{ old('surname', $user->surname) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='department'><strong>Department</strong></label>
                        <input type='text' id='department' name='department' value="{{ old('department', $user->department) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='role'><strong>Role</strong></label>
                        <input type='text' id='role' name='role' value="{{ old('role', $user->role) }}" style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='password'><strong>Password</strong></label>
                        <input type='password' id='password' name='password' style="margin-bottom:10px; margin-left:5px"><br>
                        <label for='password_confirmation'><strong>Password confirmation</strong></label>
                        <input type='password' id='password_confirmation' name='password_confirmation' style="margin-bottom:10px; margin-left:5px"><br><br>

                        <button type='submit' style="border:1px solid black; padding:5px; width:15%;">Update</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>