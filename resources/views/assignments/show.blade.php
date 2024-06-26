<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="sm:flex flex-basis">
                        <h1 class="font-semibold text-2xl text-gray-800 basis-5/6">{!! $assignment->title !!}</h1>
                        @Auth
                        <div class="flex flex-row basis-1/6">
                            <a href="{{ route('assignments.edit', $assignment) }}" class="align-middle bg-yellow-200 rounded-lg
                            px-5 py-2 mx-1">Edit</a>
                            <a href="{{ route('assignments.delete', $assignment) }}" class="align-middle bg-red-400 rounded-lg
                            px-5 py-2 mx-1" >Delete</a>
                        </div>
                        @endauth
                    </div>
                    <br>
                    <hr class="py-3">
                    <p>
                        {!! $assignment->description !!}
                    </p>
                    <br>
                    <p>
                        Status: @if($assignment->status == "completed")
                                    <span class="bg-green-100 text-green-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">Completed</span>
                                @elseif($assignment->status == "in progress")
                                    <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">In Progress</span>
                                @elseif($assignment->status == "on hold")
                                    <span class="bg-blue-100 text-blue-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">On hold</span>
                                @else
                                    <span class="bg-red-100 text-red-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full">Not started</span>
                                @endif
                        <br>
                        Topic: <span class="bg-gray-200 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">{!! $assignment->topic !!}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
