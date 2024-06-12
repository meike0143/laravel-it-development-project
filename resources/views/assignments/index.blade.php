<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            {{ __('Assignments') }}
        </h2>
        <a href="{{ route('assignments.create') }}" class="content-end">
            <button type="button" class="align-middle bg-teal-300 border border-gray-200 rounded-lg py-3 px-6">
                Create a New Assignment
            </button>
        </a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach($assignments as $assignment)
                        <x-assignment.list-item :assignment="$assignment"></x-assignment.list-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
