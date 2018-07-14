<!DOCTYPE html>
<html>
<head>
	
	<title>Online Shop</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ URL::asset('css/mycss.css') }}">
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<!-- <link rel="stylesheet" type="text/javascript" href="assets/js.js"> -->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">			
				</ul>
				<form action="index.php" class="navbar-form navbar-left" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search" name = "txtSearch">
					</div>
					<button type="submit" class="btn btn-default" name = "btnSearch">Tìm kiếm</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
				
						@if(Session::has('login') && Session::get('login') == true)
					
						
						<li class="dropdown">
				
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Xin chào {{ Session::get('name') }}</b> <span class="caret"></span></a>
							<ul class="dropdown-menu">	
								<li><a href="inform.php">Thông tin cá nhân</a></li>
								<li><a href="LichSuMuaHang.php">Lịch sử mua hàng</a></li>
								<li><a href="changepassword.php">Đổi mật khẩu</a></li>
									
								<li role="separator" class="divider"></li>
								<li><a href="/logout">Thoát</a></li>
							</ul>
						</li>
						@else
						<li><a  href="/register">Đăng kí</a></li>
						<li><a href="/login">Đăng Nhập</a></li>
						@endif
							
				
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Nhà sản xuất</h3>
					</div>
					<?php
						$producers = DB::table('nhasanxuat')->get(); 
					?>
					<div class="list-group">

						@foreach($producers as $producer)
							<a href="/producer/{{$producer->IDnsx}}" class="list-group-item"><?= $producer->TenNSX ?></a>
						@endforeach
					</div>
				
				

					<div class="panel-heading">
						<h3 class="panel-title">Hiển thị sản phẩm </h3>
					</div>
		
				</div>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">@yield('tittle')</h3>
					</div>
					<div class="panel-body" style="padding: 0px">						
							@yield('main')
					</div>
				</div>
			</div>
				@yield('pagination')
		</div>
	</div>


<!-- Latest compiled and minified JavaScript -->
		

</body>
</html>