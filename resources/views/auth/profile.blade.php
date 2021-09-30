@extends('layouts.app')
@section('css')
  <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
@section('content')

<div class="row">
	<div id="content" class="profile-v1">
		<div class="col-md-12 col-sm-12 profile-v1-wrapper">
			<div class="profile-v1-pp">
			<b><h3 style="color:#000"> {{ Auth::user()->name }} <img src="{{ asset('images/user.png') }}" style="width: 180px;height: 180px;border-radius: 50%;"/></h3></b>
			</div>
			<div class="col-md-12 profile-v1-cover">
				<img src="{{ asset('images/profile.jpg') }}" class="img-responsive img-thumbnail">
			</div>
		</div>
	</div>
</div>


<div class="row">
  <div class="col-lg-6">
    <div class="panel panel-default" style="min-height:400px">
      <div class="panel-heading" style="text-align:left">
      </div>
      <div class="panel-body">
        <center>
          <h1>Edit Profile</h1>
          <form role="form">
            <div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->name}}" type="text" name="name">
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Name</label>
            </div>
            <div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->email}}" type="email" name="name">
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Email</label>
            </div>
						<div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->role->namaRule}}" type="text" name="name" readonly>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Role</label>
            </div>
						<div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="" type="password" name="name">
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Password</label>
            </div>
						<div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="" type="password" name="name">
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Password-confirm</label>
						</div>
            <button type="submit" class="btn btn-primary">Save</button>
					</form>
				</center>
			</div>
		</div>
	</div>
  <div class="col-lg-6">
    <div class="panel panel-default" style="min-height:400px">
      <div class="panel-heading" style="text-align:left">
      </div>
      <div class="panel-body">
        <div class="col-lg-12">
					<center><h1>Information</h1></center>
            <div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->name}}" type="text" name="name" readonly>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Name</label>
            </div>
            <div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->email}}" type="text" name="name" readonly>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Email</label>
            </div>
						<div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->role->namaRule}}" type="text" name="name" readonly>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Role</label>
            </div>
						<div class="form-group row text-right">
							<div class="col-md-9 col-sm-8 col-xs-12">
								<input id="name" class="form-control col-md-12 col-xs-12" value="{{$user->status}}" type="text" name="name" readonly>
							</div>
							<label class="control-label col-md-3 col-sm-3 col-xs-12" style="color:#258039">Status</label>
						</div>
					<hr><br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection