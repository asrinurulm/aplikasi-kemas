<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/login.js') }}" />
  </head>
	@if (session('status'))
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
      </div>
    </div>
    @elseif(session('error'))
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('error') }}
      </div>
    </div>
    @endif
  <body class="main-bg">
  <div class="limiter">
		<div class="container-login100">
			<div class="wrap-register100">
				<div class="login100-pic js-tilt" data-tilt>
					<span class="login100-form-title">Register &nbsp <li class="fa fa-users"></li></span>
					<img src="https://colorlib.com/etc/lf/Login_v1/images/img-01.png" alt="IMG">
				</div>

				<form class="form-horizontal" method="POST" action="{{ route('add') }}">
          {{ csrf_field() }}

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="name" type="text" placeholder="Name" class="input100" name="name" value="{{ old('name') }}" required autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
						@if ($errors->has('name'))
              <span class="help-block">
              <span class="help-block">{{ $errors->first('name') }}</span>
              </span>
            @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="email" type="email" placeholder="Email" class="input100" name="email" value="{{ old('email') }}" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
						@if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<select name="role" id="role" class="input100">
							@foreach($role as $role)
							<option value="{{$role->id}}">{{$role->namaRule}}</option>
							@endforeach
						</select>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-address-book" aria-hidden="true"></i>
						</span>
						@if ($errors->has('email'))
              <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password" placeholder="Password" type="password" class="input100" name="password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						@if ($errors->has('password'))
              <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input id="password-confirm" placeholder="Password-confirm" type="password" class="input100" name="password_confirmation" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Register</button>
					</div><br>

					<div class="text-center p-t-12">
					<a href="{{ route('login') }}">	Already have an account? Login</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>