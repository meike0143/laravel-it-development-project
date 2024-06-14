<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex sm:items-center">
                        <h1 class="font-semibold text-2xl text-gray-800">
                            {{ __('Assignments') }}
                        </h1>
                        <a type="button" href="{{ route('assignments.create') }}" class="align-middle bg-gray-200
                            rounded-lg py-2 px-4 sm:ms-auto">Create a New Assignment</a>
                    </div>
                    <br>
                    @foreach($assignments as $assignment)
                        <x-assignment.list-item :assignment="$assignment"></x-assignment.list-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
