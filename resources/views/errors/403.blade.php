@extends('errors.layout')

@section('title', 'Access Restricted')
@section('code', '403')

@section('message')
    It looks like you don't have permission to view this section. <br>
    Please contact your administrator if you believe this is an error or if you require additional access.
@endsection
