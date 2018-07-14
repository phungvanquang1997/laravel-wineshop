@extends('client.layout')
@section('tittle','Chi tiết sản phẩm')
@section('main')
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0px" >
	<div class="panel-body" >

		<div class="col-md-12">

			<div class="thumbnail">
				

				<div class="bxslider">
				
				</div>
				<div class="caption">
					<h5>Mã Sản phẩm : <b>{{$data->ProID}}</b></h5>
					<h5>Tên sản phẩm : <b> <?= $data->ProName ?> </b></h5>
					<h5>Giá : <b><?= number_format($data->Price) ?></b></h5>
					<h5>Tên nhà sản xuất : <b><?= $data->TenNSX ?> </b></h5>
					<h5>Xuất sứ : <b><?= $data->OriginName ?> </b></h5>

					<h5>Loại : <b>Rượu</b></h5>
					<h5>Mô tả chi tiết sản phẩm : </h5>
					<p><?= $data->FullDes ?></p>
					<h3> Số lượng </h3>
					<form method="post" action="">
						<div class="form-group col-md-3">								
							<input type="text" class="form-control" id="txtSoLuong" name="txtSoLuong" placeholder="Nhập số lượng cần mua">
						</div>
						<button type="submit" class="btn btn-danger" name ="btnDatMua">
							<span class="glyphicon glyphicon-shopping-cart"></span>
							Đặt mua
						</button>

		


						<a class="btn btn-default" role = "button">
							<span class="glyphicon glyphicon-eye-open" ></span>
							Lượt xem : <?= $data->View ?> 
						</a>
						<a class="btn btn-default" role = "button">
							<span class="glyphicon glyphicon-ok-circle"></span>
							Đã Bán : <?= $data->SoLuongBan ?> 
						</a>


					</form>



				</div>
			</div>
		</div>				

	</div>
@stop