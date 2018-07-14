@extends('client.layout')
@section('tittle','Đăng nhập')
@section('main')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<form method="post" action="login">
			<div class="form-group">
				<label for="txtUserName">Tên đăng nhập</label>
				<input type="text" class="form-control" id="txtUserName" name="txtUserName" placeholder="John" value=
				"{{ old('txtUserName') }}" >
			</div>
			@if($errors->has('txtUserName'))
				<div>
					<p style="color:red">{{$errors->first('txtUserName')}}</p> 
				</div>
			@endif
		
			<div class="form-group">
				<label for="txtPassword">Mật khẩu</label>
				<input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="******">
			</div>
			@if($errors->has('txtPassword'))
				<div>
					<p style="color:red">{{$errors->first('txtPassword')}}</p> 
				</div>
			@endif
			{!! csrf_field() !!}
			<div class="checkbox">
				<label>
					<input name="cbRemember" type="checkbox"> Ghi nhớ
				</label>
			</div>
			@if(isset($error))
			<div class="alert alert-danger">
			  <strong>{{$error}}!</strong> 
			</div>
			@endif
			<button type="submit" class="btn btn-success btn-block" name="btnLogin">
				<span class="glyphicon glyphicon-user"></span>
				Đăng nhập
			</button>
					


		</form>
	</div>
</div>
@stop