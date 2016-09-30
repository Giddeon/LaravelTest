@extends('layouts.master')

@section('content')
@foreach($folders as $folder)
    <article>
        {{$folder->name}}
    </article>
    @endforeach
@stopth