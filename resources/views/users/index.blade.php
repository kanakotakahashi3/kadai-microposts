@extends('layouts.app')

@section('content')
    @include('users.users', ['users' => $users])
    @include('user_favorite.favorite_button', ['user' => $user])
@endsection

