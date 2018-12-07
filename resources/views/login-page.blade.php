@extends('layout.landing-template')

@section('title')
	Login
@endsection

@section('content')
<section class="login-content">
	<div class="logo">
		<h1>SmartBin</h1>
	</div>
	<div class="login-box">
		<form class="login-form" action="#">
			<h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
			<div class="form-group">
				<label class="control-label">USERNAME</label>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<label class="control-label">PASSWORD</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group btn-container">
				<button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
			</div>
		</form>
	</div>
</section>
@endsection