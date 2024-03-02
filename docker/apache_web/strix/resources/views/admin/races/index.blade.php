@extends('layouts.admin.master')

@section('titulo', 'Races')

@yield('dashboard')
@section('content')
    @include('admin.races.races')
@stop
