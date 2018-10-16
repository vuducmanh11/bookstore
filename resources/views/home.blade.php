@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
                    @if (Auth::user()->role_id == 0)
                        <a href="{{ url('customer/profile') }}">View profile</a>
                    @else
                        <a href="{{ url('admin/profile') }}">View profile</a>
                        <p>Is admin</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
