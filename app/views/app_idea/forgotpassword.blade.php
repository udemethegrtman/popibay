@extends('template.master_appidea')
@section('content')
<style type="text/css">
	.content-one {
		width: 100%;
		min-height: 700px;
		background: rgb(238, 238, 238);
		border-bottom: #cccc33 thin solid;
		background-size: cover;
		margin-top: 100px;
		/* position: absolute; */
		padding: 20px;
		z-index: -1;
	}

	.go-down-a-bit-10{
		margin-top: 10px !important;
	}

	.go-down-a-bit-20{
		margin-top: 20px !important;
	}

	.go-down-a-bit-30{
		margin-top: 30px !important;
	}

	.go-down-a-bit-40{
		margin-top: 40px !important;
	}

	.go-down-a-bit-50{
		margin-top: 50px !important;
	}

	.go-down-a-bit-60{
		margin-top: 60px !important;
	}

	.go-down-a-bit-100{
		margin-top: 100px !important;
	}

	.go-down-a-bit-200{
		margin-top: 200px !important;
	}


	.go-up-a-bit-10{
		margin-bottom: 10px !important;
	}

	.go-up-a-bit-20{
		margin-bottom: 20px !important;
	}

	.go-up-a-bit-30{
		margin-bottom: 30px !important;
	}

	.go-up-a-bit-40{
		margin-bottom: 40px !important;
	}

	.go-up-a-bit-50{
		margin-bottom: 50px !important;
	}

	.go-up-a-bit-100{
		margin-bottom: 100px !important;
	}
</style>
<div class="content-one">
	<div class="row">
		<div class="small-12 medium-12 large-12 columns">
			<div class="login-or-reg-box go-down-a-bit-100">
				<?php
				$welcome_back = Session::get('welcome_back');
				$message = Session::get('message');
				if ( isset($welcome_back) ) {
					echo '
					<div data-alert class="alert-box success radius">
						<h6 class="text-center white-text">'.$welcome_back.'</h6>
						<a href="#" class="close">&times;</a>
					</div>
					';
				}

				if ( isset($message) ) {
					echo '
					<div data-alert class="alert-box alert radius">
						<h6 class="text-center white-text">'.$message.'</h6>
						<a href="#" class="close">&times;</a>
					</div>       
					';
				}
				?>
				<h1 class="text-center go-up-a-bit-20 main-color-no-hover">
					Forgot Password
				</h1>
				<h5 class="text-justify">
					Give us your email, let us help you check our records.
				</h5>
				{{ Form::open(array('route' => 'Popibay.forgotpassword','method' => 'POST','data-abide' => '')) }}
					<div class="email-field">
					<input name="email" style="margin-bottom: 20px !important;" class="go-down-a-bit-20 pb-text-box" type="email" required placeholder="Email (Someone@example.com)">
					<small class="error">An email address is required.</small>
					</div>
					<button style="margin-bottom: 50px !important;" class="wider-button pb-button-two-sides-all" type="submit">Remember password</button>
					<h5 class="text-center grey-color-no-hover"> Do not have an account ?<a href="/register" class="orange-text-link"> Register.</a></h5>
				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	document.title="Forgot password";
</script>
@stop