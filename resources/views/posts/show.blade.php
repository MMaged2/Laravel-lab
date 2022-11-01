@extends('layouts.app')
@section('title') Show @endsection
@section('content')
<table class="table mt-5">
    <thead>
        <th class="table-active" b4span colspan="2">Post Info</th>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Title:- {{$post['title']}}</th>
        </tr>
        <tr>
            <th scope="row">Description:- {{$post['description']}}</th>
        </tr>
    </tbody>
</table>
<table class="table mt-5">
    <thead>
        <th class="table-active" b4span colspan="2">Post Creator Info</th>
    </thead>
    <tbody>

        <tr>
            <th scope="row">Name:- {{$post->user->name}}</th>
        </tr>
        <tr>
            <th scope="row">Email:- {{$post->user->email}}</th>
        </tr>
        <tr>
            <th scope="row">Created At:- {{$post->user->created_at}}</th>
        </tr>

    </tbody>
</table>


@endsection