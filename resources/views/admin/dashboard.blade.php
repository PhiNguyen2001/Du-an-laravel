@extends('layouts.admin')
@section('title', 'Dashboard')


@section('contents')
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Dashboard
        </h2>
     
        <h2 class="my-6 text-2xl  text-gray-700 dark:text-gray-200">
            Chào Mừng {{$user->name}} đến với trang quản trị 
        </h2>
    </div>
@endsection
