@extends('master.layout')


@section('content')
    {{-- What We do --}}
    @include('services.partials.what-we-do')
    {{-- Programs --}}
    @include('services.partials.programmes')
@endsection
