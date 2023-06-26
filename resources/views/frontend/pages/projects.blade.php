@extends('frontend.layout.app')

@section('content')
    <!-- project list section-->
    @include('frontend.components.project-list')
    <!-- Call to action section-->
    @include('frontend.components.project-action')

@endsection
