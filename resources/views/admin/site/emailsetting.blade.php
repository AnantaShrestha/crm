@extends('admin.layouts.admin_design')

@section('title') Email Setting @endsection

@section('content')
<div class="page-content">
	<div class="page-bar">
		<div class="page-title-breadcrumb">
			<div class=" pull-left">
				<div class="page-title">Email Settings </div>
			</div>
			<ol class="breadcrumb page-breadcrumb pull-right">
				<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
					href="{{ route('admin.dashboard') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">Email Setting</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-sm-12">
			<div class="card card-box">
				<div class="card-head">
					<header>Update Your Email Information</header>


				</div>
				<div class="card-body " id="bar-parent">
					<form method="post" action="">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label>Mail Driver</label>
									<select class="form-control" name="mail_driver">
										<option value="">Select One...</option>
										<option value="mail">mail</option>
										<option value="smpt">smtp</option>
									</select>
								</div>
								<div class="form-group">
									<label>Mail Port</label>
									<input type="number" name="mail_port" class="form-control" placeholder="Enter Mail Port">
								</div>
								<div class="form-group">
									<label>Mail Password</label>
									<input type="password" name="mail_password" class="form-control" placeholder="Enter Mail Password">
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-group">
									<label>Mail Host</label>
									<input type="text" name="mail_host" class="form-control" placeholder="Enter Mail Host">
								</div>
								<div class="form-group">
									<label>Mail Username</label>
									<input type="text" name="mail_username" class="form-control" placeholder="Enter Mail Username">
								</div>
								<div class="form-group">
									<label>Mail Encryption</label>
									<select class="form-control" name="mail_encryption">
										<option value="">Select One...</option>
										<option value="tls">tls</option>
										<option value="ssl">ssl</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<button class="btn btn-primary">Save</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

</div>
@endsection