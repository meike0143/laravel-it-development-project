

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
            </div>
        </div>
    </div>
    <div class="media-right">
    </div>
</article>
