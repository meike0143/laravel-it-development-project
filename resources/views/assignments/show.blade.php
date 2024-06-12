<x-app-layout>
    <div class="navbar mb-3">
        <div class="navbar-start">
            <h1 class="title is-4">{!! $assignment->title !!}</h1>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="{{ route('assignments.edit', $assignment) }}" class="button is-primary">Edit this assignment</a>

                </div>
            </div>
        </div>
    </div>
    <div class="block">
        {!! $assignment->description !!}
    </div>
    <div class="tags">
        <span class="tag has-text-weight-bold">
            {{ $assignment['status'] }}
        </span>
        <x-assignment.priority-tag :$assignment></x-assignment.priority-tag>
    </div>
</x-app-layout>
