@extends('layouts.app', ['breadcrumbs' => [
    ['href'=> route('dashboard'), 'text'=> 'Dashboard', 'active'],
]])

@section('title', __('Dashboard'))

@section('page_heading', 'Dashboard')

@section('content')

@endsection