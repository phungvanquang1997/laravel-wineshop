@extends('client.layout')
@section('tittle','Đăng ký')
@section('main')

<form class="col-md-4">
	<!-- <img src="imgs/sp/1/main_thumbs.jpg"> -->
</form>

<form class="col-md-5 col" method="post" action='register' >
	<!-- <h1 style="text-align: center;"> </h1> -->
	<div class="form-group">
		<label for="txtHoTen">Họ tên</label>
		<input type="text" class="form-control" id="txtHoTen" name="txtHoTen" value=	"{{ old('txtHoTen') }}" >
	</div>
	@if($errors->has('txtHoTen'))
			<div class="alert alert-danger">
				<p>{{$errors->first('txtHoTen')}}</p>
			</div>
	@endif

	<div class="form-group">
		<label for="exampleInputPassword1">Tên đăng nhập</label>
		<input type="text" class="form-control" id="txtTenDangNhap" name="txtTenDangNhap" placeholder="PhungVanQuang" value=	"{{ old('txtTenDangNhap') }}" >
	</div>
	
	@if($errors->has('txtTenDangNhap'))
			<div class="alert alert-danger">
				<p>{{$errors->first('txtTenDangNhap')}}</p>
			</div>
	@endif

	<div class="form-group">
		<label for="txtPassword">Password</label>
		<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="******">
	</div>
	@if($errors->has('txtPassword'))
			<div class="alert alert-danger">
				<p>{{$errors->first('txtPassword')}}</p>
			</div>
	@endif


	<div class="form-group">
		<label for="txtPassword">Nhập lại Password</label>
		<input type="password" class="form-control" id="txtRePassword" name="txtRePassword" placeholder="******">
	</div>
	
	@if($errors->has('txtRePassword'))
			<div class="alert alert-danger">
				<p>{{$errors->first('txtRePassword')}}</p>
			</div>
	@endif
			

	<div class="form-group">
		<label for="exampleInputPassword1">Địa chỉ</label>
		<input type="text" class="form-control" id="txtDiaChi" name="txtDiaChi" placeholder="Nguyễn Văn Cừ" value=	"{{ old('txtDiaChi') }}" >
	</div>
	@if($errors->has('txtDiaChi'))
			<div class="alert alert-danger">
				<p>{{$errors->first('txtDiaChi')}}</p>
			</div>
	@endif

	<div class="form-group">
		<label for="exampleInputEmail1">Email address</label>
		<input type="email" class="form-control" id="txtEmail" aria-describedby="emailHelp" value=	"{{ old('Email') }}"  name="Email" placeholder="Enter email">						    
	</div>
	@if($errors->has('Email'))
			<div class="alert alert-danger">
				<p>{{$errors->first('Email')}}</p>
			</div>
	@endif

	{!! csrf_field() !!}
		<button type="submit" class="btn btn-success btn-block" name="btnRegister">
			<span class="glyphicon glyphicon-user"></span>
			Đăng kí
		</button>	

</form>
@stop