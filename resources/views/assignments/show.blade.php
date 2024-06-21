<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex sm:items-center">
                        <h1 class="font-semibold text-2xl text-gray-800">{!! $assignment->title !!}</h1>
                        <a href="{{ route('assignments.edit', $assignment) }}" class="align-middle bg-gray-200
                            rounded-lg py-2 px-4 sm:ms-auto">Edit this assignment</a>
                    </div>
                    {!! $assignment->description !!}
                    <br>
                    {!! $assignment->status !!}
                    <br>
                    {!! $assignment->topic !!}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
