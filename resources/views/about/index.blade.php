@extends('master.layout')


@section('content')
    {{-- Mission and vision --}}
    @include('about.partials.mission-vision')
    {{-- Logo Description --}}
    @include('about.partials.logo')
@endsection
