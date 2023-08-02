@extends('master.layout')


@section('content')
    {{-- Hero --}}
    @include('home.partials.hero')
    {{-- Why --}}
    @include('home.partials.why')
    {{-- About --}}
    @include('home.partials.about')
@endsection
