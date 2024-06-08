<x-layout.main>
    <div class="navbar mb-3">
        <div class="navbar-start">
            <h1 class="title is-4">{!! $assignment->title !!}</h1>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="{{ route('assignments.edit', $assignment) }}" class="button is-primary">Edit this assignment</a>
                    <x-ui.modal name="delete" title="Confirm delete"
                                type="danger">
                        <x-slot:trigger class="is-danger">Delete</x-slot:trigger>

                        <form id="delete-post" method="POST" action="{{ route('assignments.destroy', $assignment) }}">
                            @csrf
                            @method('DELETE')
                            Click "Confirm" to delete this assignment.
                            <br>
                            <strong>CAUTION!</strong> This action cannot be undone.
                        </form>

                        <x-slot:footer>
                            <div class="control">
                                <button type="submit" form="delete-post" class="button is-danger">Confirm</button>
                            </div>
                            <div class="control">
                                <button type="button" class="button is-light cancel">Cancel</button>
                            </div>
                        </x-slot:footer>
                    </x-ui.modal>
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
</x-layout.main>
