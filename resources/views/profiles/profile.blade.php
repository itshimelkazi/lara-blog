@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile | <a href="{{url('profile/update')}}">Update Profile</a></div>
                <?php 
                    dd($users);
                 ?>
                <div class="panel-body">
                    Name : <br>
                    Email : 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
