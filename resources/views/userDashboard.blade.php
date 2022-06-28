<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello {{Auth::user()->name}}!<br>
                    We're happy to see you back!<br>
                    @if (count($tasks) == 0)
                        <br>
                        <p><strong> Nothing is assigned to you at this moment!</strong></p>
                    @else
                    To send report, click "Send a report" button under the task. When you are finished, you can hide task that<br>
                    you've done and carry on to the next one without distraction and clutter!<br><br>
                    @foreach($tasks as $task)
                        <tr>
                            <td><strong>ID: </strong>{{$task->id}}</td><br>
                            <td><strong>Description of task: </strong>{{$task->description}}</td><br>
                            <td><strong>Term: </strong>{{$task->term}}</td><br>
                            <td><form>
                                <a button type="button" style="border:1px solid black; padding:5px; width:15%; float:left; text-align:center; margin-bottom:10px" href="sendReport/{{$task->id}}">Send a report</a>
                            </form></td></tr>          
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
