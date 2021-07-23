@extends('layout/index')

@section('title', 'Welcome to CodeIgniter 3 like a laravel')

@section('css')
    <style>
        p.custom {
            background-color: thistle;
        }

    </style>
@endsection

@section('content')
    {{ $nama }}
    <p class="custom">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione, voluptatem dicta. Adipisci dolores accusantium,
        doloremque praesentium nemo aspernatur nihil quam distinctio sed saepe quisquam quae ab iure voluptatibus ipsam
        rerum!
    </p>
@endsection

@section('js')
    <script>
        console.log('Hello world')
    </script>
@endsection
