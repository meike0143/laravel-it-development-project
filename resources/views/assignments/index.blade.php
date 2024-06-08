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
        <x-assignment.list-item :assignment="$assignment"></x-assignment.list-item>
    @endforeach
</x-layout.main>
