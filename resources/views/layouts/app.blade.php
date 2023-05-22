@include('elements.head')
@include('elements.header')
@include('elements.sidebar')
@yield('content')
@isset($slot)
        {{ $slot }}
@endisset
@include('elements.footer')
