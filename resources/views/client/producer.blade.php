@extends('client.layout')
@section('tittle','Nhà sản xuất')
@section('main')

@foreach($producers as $item)
<div class="col-md-6">
										<div class="thumbnail">
											 
											<div class="caption">
												<h5><?= $item->ProName ?></h5>
												<h4><?= number_format($item->Price) ?></h4>
												<p style="height: 40px"><?= $item->TinyDes ?></p>
												<br>
												<p>
													<a href="/product/{{$item->ProID}}" class="btn btn-primary" role="button">Chi tiết</a>
	
													<a href="/product/{{$item->ProID}}" class="btn btn-danger" role="button" name ="btnDatMua">
														<span class="glyphicon glyphicon-shopping-cart"></span>
														Đặt mua
													</a>

													<a class="btn btn-default" role = "button" style="width: 100px">
														<span class="glyphicon glyphicon-eye-open" ></span>
														Xem : <?= $item->View ?> 
													</a>
													<a class="btn btn-default" role = "button">
														<span class="glyphicon glyphicon-ok-circle"></span>
														Bán : <?= $item->SoLuongBan ?> 
													</a>
												</p>
											</div>
											
										</div>
</div>
@endforeach
@stop
@section('pagination')
<div class="text-center">
			{!! $producers->render() !!}
</div>
@stop