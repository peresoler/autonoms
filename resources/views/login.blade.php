@extends('layouts.layout')

@section('titlePage', 'Nom')

@section('header')
   
@endsection

@section('content')
<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="container">
				<div class="d-flex justify-content-center">
					<div>
						<img src="https://images.vexels.com/media/users/3/193089/isolated/lists/7dd20d2c560ad8ecd8842ab848747281-covid-19-icono-de-trazo-de-mascara-medica.png" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<form>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="" class="form-control" value="" placeholder="Username">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fa fa-key"></i></span>
							</div>
							<input type="password" name="" class="form-control" value="" placeholder="Password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3">
				 	<button type="button" name="button" class="btn btn-primary">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')

@endsection