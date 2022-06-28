<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update of information and deletion of registered users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                You can delete user by pressing "Delete" button under selected user or you can update information about them by clicking neighbouring "Update" button.<br>
                Please be aware that you can't delete or update user that is currently logged in!<br><br>
                    @foreach ($users as $user)   
                    <tr>
                    <td><strong>ID: </strong>{{$user->id}} |</td>
                    <td><strong>E-mail: </strong>{{$user->email}} |</td>
                    <td><strong>Name: </strong>{{$user->name}} |</td>
                    <td><strong>Surname: </strong>{{$user->surname}}</td>
                    <td><form>
                        <a button type="button" style="border:1px solid black; padding:5px; margin-left:10px; width:15%; float:left; text-align:center" href="updateUser/{{$user->id}}">Update</a>
                    </form></td></tr>       
                    <td><form action="{{action([App\Http\Controllers\userController::class, 'destroy'], $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:1px solid black; padding:5px; margin-left:10px; width:15%; ">Delete</button>
                    </form></td><br></tr>           
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>