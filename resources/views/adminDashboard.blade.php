<x-app-layout>
    <x-slot name="header">
        <meta charset="UTF-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello!<br><br>
                    Since you are an administrator, you have all these options available to you:<br>
                    <ul style="list-style-type: square; list-style-position: inside;">
                        <li><a href="{{ url('userManagement') }}">Visit user management</a></li>
                        <li><a href="{{ url('taskManagement') }}">Visit task managment</a></li>
                        <li><a href="{{ url('reportManagement') }}">Visit report managment</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
