@extends('layer.master')
@section('content')

<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>tim kiem</h4>
						<div class="beta-products-details">
							<p class="pull-left"> tim thay {{count($loai_xe)}} xe</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($loai_xe as new)
							<div class="col-sm-3">
								<div class="single-item">
									@if($new->promotion_price!=0)
									<div class="ribbon-wrapper"><div class="ribbon-sale"></div></div>
									@endif
									<div class="single-item-header">
										<a href="{{ route('chi_tiet_loai	_xe',$new->Ma_loai_xe) }}"></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection