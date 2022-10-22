@extends('layouts.app')

@section('title') create @endsection
@section('content')
<table class="table mb-5">
    <thead>
        <th class="table-active" b4span colspan="2">Post Info</th>
    </thead>
    <tbody>

        <tr>
            <th scope="row">Title:-</th>
        </tr>
        <tr>
            <th scope="row">Description:-</th>
        </tr>
    </tbody>
</table>
<table class="table">
    <thead>
        <th class="table-active" b4span colspan="2">Post Info</th>
    </thead>
    <tbody>

        <tr>
            <th scope="row">Name:- </th>
        </tr>
        <tr>
            <th scope="row">Email:-</th>
        </tr>
        <tr>
            <th scope="row">Created At:- </th>
        </tr>

    </tbody>
</table>


@endsection