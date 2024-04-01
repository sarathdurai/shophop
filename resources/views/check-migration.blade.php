@extends('layout.default')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h1>{{ Auth::user()->name }}</h1>

@stop