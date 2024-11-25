@extends('master')

@section('content')
<a href="{{ route('home') }}">Go back</a>
<h2>Dashboard</h2>
<hr>
<a href=" {{ route('users.index') }} ">Categories</a>
<hr>
<a href=" {{ route('items.index') }} ">Locations</a>
@endsection