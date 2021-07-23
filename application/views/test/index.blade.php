@php
defined('BASEPATH') or exit('No direct script access allowed');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Judul default')</title>

    {{-- css global --}}
    @include('test/_css')
    {{-- css spesifik --}}
    @yield('css')
</head>

<body>

    <div id="container">
        <div id="body">
            {{-- isi konten --}}
            @yield('content')
        </div>
    </div>

    {{-- js global --}}
    @includeIf('test/_js')
    {{-- js spesifik --}}
    @yield('js')
</body>

</html>
