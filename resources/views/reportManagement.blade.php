<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Report Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Come and see all the reports that your employees have submitted!<br>
                    If for some reason you want to delete specific report, use "Delete" button under it!<br><br>

                    @if (count($reports) == 0)
                        <p><strong> Looks like there are no reports for you to check (or maybe all of them are deleted)!</strong></p>
                    @else
                    @foreach ($reports as $report)   
                    <tr>
                    <td><strong>ID: </strong>{{$report->id}} </td><br>
                    <td><strong>User ID: </strong>{{$report->employee_ID}} </td><br>
                    <td><strong>Task ID: </strong>{{$report->task_ID}} </td><br>
                    <td><strong>Link to report: </strong>{{$report->file}}</td><br>
                    </tr>       
                    <td><form action="{{action([App\Http\Controllers\reportController::class, 'destroy'], $report->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:1px solid black; padding:5px;  width:15%; ">Delete</button>
                    </form></td><br></tr>           
                    @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>