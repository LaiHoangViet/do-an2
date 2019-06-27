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
						<img width="200px" src="storage/{{$xe->Anh}}" alt="">
					</div>
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
@endsection