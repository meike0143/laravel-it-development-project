

<article class="media">
    <div class="media-content">
        <div class="content">
            <a class="is-size-5" href="{{ route('assignments.show', $assignment) }}">
                {{ $assignment->title }}
            </a>
            <br>
            <div class="tags">
                <span class="tag has-text-weight-bold">
                    {!! $assignment->status !!}
                </span>
                <x-assignment.priority-tag :assignment="$assignment"></x-assignment.priority-tag>
            </div>
        </div>
    </div>
    <div class="media-right">
    </div>
</article>
