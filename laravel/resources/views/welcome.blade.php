@extends('layout')
@section('content')
    @if(empty($people))
    <p>No people in array</p>
    @endif
    
    @unless(empty($people))
    <p>There are people</p>
    @endunless

    <ul>
    @foreach ($people as $person)
        <li>{{ $person }}.</li>    
    @endforeach
    </ul>
@stop