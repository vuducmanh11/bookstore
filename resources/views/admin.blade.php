@extends('layouts.app')

@section('content')
    <p>Admin page</p> <br>
    <p>Name: {{Auth::user()->name}}</p>
    <p>Email: {{Auth::user()->email}}</p>
    <a href="{{url('admin/profile/edit')}}"><button>Chỉnh sửa profile</button></a>
@endsection