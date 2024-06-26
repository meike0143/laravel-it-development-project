<div class="bg-gray-100 border-gray-200 border-4 shadow-sm sm:rounded-lg my-2">
    <div class="p-6 text-gray-900">
        <div class="sm:items-center">
            <a class="font-semibold text-l text-gray-800" href="{{ route('assignments.show', $assignment) }}">
                {{ $assignment->title }}
            </a>
            @if($assignment->status == "completed")
                <span class="bg-green-100 text-green-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Completed</span>
            @elseif($assignment->status == "in progress")
                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">In Progress</span>
            @elseif($assignment->status == "on hold")
                <span class="bg-blue-100 text-blue-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">On hold</span>
            @else
                <span class="bg-red-100 text-red-800 text-xs font-medium mx-2 me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Not started</span>
            @endif
        </div>
    </div>
</div>
