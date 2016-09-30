@extends('layouts.master')

@section('content')
    <form action="{{route('folder.create')}}" method="post">
        <input type="hidden" name="_token" value="{{Session::token()}}"/>
        <input type="text" name="folder_name" class="form-control"/>
        <button class="btn btn-primary">Create Folder</button>
    </form>
@stop