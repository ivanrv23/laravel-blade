@extends('layouts.plantilla')
@section('tituloPagina', 'Inicio')
@section('header')
    @include('components.header')
@endsection
@section('content')
    @include('components.carousel')
@endsection
@section('footer')
    @include('components.footer')
@endsection
