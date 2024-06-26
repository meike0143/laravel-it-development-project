<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="font-semibold text-2xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h1>
                    <br>
                    {{ __("Welcome, ") }}{{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
