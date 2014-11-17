@extends('layout')

@section('content')
    @foreach($users as $v)
        <p>{{$v->name}}</p>
    @endforeach
@stop