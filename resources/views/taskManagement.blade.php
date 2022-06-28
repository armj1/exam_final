<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Use your privilege and assign something for your employees...of course, you can do more than just assign...<br><br>
                    
                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li><a href="{{ url('userManagement') }}">Visit user management dashboard</a></li>
                        <li><a href="{{ url('taskManagement') }}">Visit task managment dashboard</a></li>
                        <li><a href="{{ url('reportManagement') }}">Visit report managment dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
