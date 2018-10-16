<?php
print_r($user);
$own = $user[0];
print_r($own);
    $name = $own->name;
    $email = $own->email;
    $role = $own->role_id;
if (!isset($name)) {
    $name = '';
}
if (!isset($email)) {
    $email = '';
}
if (!isset($role)) {
    $role = 0;
}
?>
@extends('layouts.app')

@section('content')
<div style=" margin-top: 99px;border-style: ridge;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading hdv"><h1>PROFILE</h1></div>
                    <div class="panel-body">
                        <form action="update" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" for="name" name="name" required autofocus class="form-control" value="<?php echo $name; ?>">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input type="text" for="email" name="email" required autofocus class="form-control" value="<?php echo $email; ?>">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <br><div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" name="update-profile" class="btn btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection    