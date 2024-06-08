@if($assignment['priority'] > 1)
    <span class="tag has-text-weight-bold
        @switch($assignment['priority'])
            @case(2) is-primary @break
            @case(3) is-warning @break
            @case(4) is-danger @break
        @endswitch
    ">
        @switch($assignment['priority'])
            @case(2) Low @break
            @case(3) Medium @break
            @case(4) High @break
        @endswitch
    </span>
@endif
