@extends('layouts.app')

@section('content')
    <p>Customer page</p> <br>
    <p>Name: {{Auth::user()->name}}</p>
    <p>Email: {{Auth::user()->email}}</p>
    <a href="{{url('customer/profile/edit')}}"><button>Chỉnh sửa profile</button></a>
@endsection