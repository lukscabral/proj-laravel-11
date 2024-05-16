@extends('admin.layouts.app')

@section('title', 'Editar o usuario')

@section('content')
<h1>Editar o Usuario {{ $user->name }}</h1>
<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('put')
    @include('admin.users.partials.form')
</form>
@endsection