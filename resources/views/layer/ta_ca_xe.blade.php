@extends('layer.master')
@section('content')

<div class="container">
    <div class="row tat-ca-xe">
    @foreach($array_xe as $xe)
        <div class="col-md-4">
            <a href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">
                <h1>
                    <b>
                        <span class="Ten_xe">
                            {{ $xe->Ten_xe }}
                        </span>
                    </b>
                </h1>   
                <div class="thumbnails">
                    <span>
                        <img width="100%" src="storage/{{$xe->Anh}}" alt="">
                    </span>
                </div>
                <b>
                    <div class="Hang_xe">
                        Hãng Xe :<span class="Hang_xe">{{ $xe->Hang_xe }}</span>
                    </div>
                    <div class="Gia">
                        Giá:<span class="Gia">{{ $xe->Gia }}</span>
                    </div>
                    <div class="Ten_loai_xe">
                        Loại Xe:<span class="Ten_loai_xe">{{ $xe->Ten_loai_xe }}</span>
                    </div>
                </b>
            </a>
        </div>
    @endforeach
    </div>
</div>

@endsection
