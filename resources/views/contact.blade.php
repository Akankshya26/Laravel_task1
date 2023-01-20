{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>slot</title>
</head>

<body>
    <x-alert>
        <x-slot name='title'> Alert Title</x-slot>
        <span>hello i m Alert</span>
    </x-alert>

</body>

</html> --}}



{{-- <x-layout>
    <x-slot name='title'>Welcome</x-slot>

</x-layout> --}}

{{-- template inheritance --}}
@extends('layout.adminlayout')
@section('title', 'contact')
@section('page-name')
    <h1>Contact page</h1>
    <hr>
@endsection
@section('banner')
    <h2>This is banner of contact page</h2>
@endsection
@section('defult-content')
    @parent
    <h3>hello this is defult content from content page</h3>
@endsection
