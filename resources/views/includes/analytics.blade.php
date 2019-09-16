@php
    $show = true;
    if(Auth::check())
        if(Auth::user()->hasRole('admin'))
            $show = false;
@endphp

@if(env('APP_TEST') == 0 and $show)

@endif
