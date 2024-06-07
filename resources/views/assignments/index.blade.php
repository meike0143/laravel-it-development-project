<x-layout.main>
    <div class="navbar">
        <div class="navbar-start">
            <h1 class="title is-4">Assignments</h1>
        </div>
        <div class="navbar-end">
            <a href="{{ route('assignments.create') }}" class="button is-primary">Create a New Assignment</a>
        </div>
    </div>
    @foreach($assignments as $assignment)
        <article class="media">
            <div class="media-content">
                <div class="content">
                    <a href="{{ route('assignments.show', $assignment) }}">
                        {{ $assignment->title }}
                    </a>
                </div>
            </div>
            <div class="media-right">
            </div>
        </article>
    @endforeach
</x-layout.main>
