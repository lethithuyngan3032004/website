@extends('layouts.site')
@section('title','Liên hệ')
@section('content')
@foreach($contacts as $contact)
    <p>{{ $contact->phone }}</p>
@endforeach
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection