@php
    $path = 'source/assets/images/svg/'.$svg.'.svg';
@endphp
@if(file_exists($path))
    @php
        include $path;
    @endphp
@endif

