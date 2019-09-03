@extends('layer.master')
@section('content')

<div class="inner-header">
	<div class="contaiter">
		<div class="pull-left">
			<h1 class="inner-title"><b>{{$xe->Ten_xe}}</b></h1>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb font-large">
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div contaiter>
	<div id="content">
		<div class="row">
			<div class="col-sm-9">
				
				<div class="row">
					<div class="col-sm-4">
						<img class="img-responsive" width="500px" src="../storage/{{$xe->Anh}}" >
						

					</div></div>
					<div class="col-sm-8">
						<div class="single-item-body">
							<p class="single-item-title"><b>Biển Số:</b> {{$xe->Bien_so}}</p>
							<p class="single-item-title"><b>Hãng Xe:</b> {{$xe->Hang_xe}}</p>
							<p class="single-item-desc"> {{$xe->Mo_ta}}</p>
							<p class="single-item-pirce">
								<span><b>Giá:</b> {{$xe->Gia}}</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<table>
	<tr>
		<td>
			@if(Session::has('Ma_khach_hang'))
			<a href="{{ route('dat_hang', ['ma_xe' => $xe->Ma_xe]) }}">
		<button>
			Đặt Xe
		</button></a>
      @else
        
        @endif
		</td>
	</tr>
</table>
@endsection