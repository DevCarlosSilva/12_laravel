@extends('master')

@section('content')
<a href="{{ route('adminPanel') }}">Go back</a>
<h2>Category - {{ $category->name }}</h2>
<ul>
    <li>Quan. de items com essa cat.</li>
    <li>Quan. de relatos com essa cat.</li>
</ul>
@endsection