@extends('test/index')

@section('title', 'Title spesifik view')

@section('css')
    {{-- css spesifik --}}
    <style>
        span {
            display: block;
            background: rgb(246, 173, 173);
        }
    </style>
@endsection

@section('content')
    {{-- penggunaan variabel --}}
    {{ $name }}
    <span>Isi kontent</span>
@endsection

@section('js')
    {{-- js spesifik --}}
    <script>
        alert('test')
    </script>
@endsection
