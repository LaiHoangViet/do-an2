@extends('layer.master')
@section('content')

    <div class="container">
        <ul class="thumbnails">
            @foreach($array_xe as $xe)
            <li class="span3">
                <a class="Ten_xe" href="xe.xe_view_all">{{ $xe->Ten_xe }}</a>
                <div class="thumbnails">
                    <a href="#"></a>
                </div>
                <div class="Hang_xe">
                    Hãng Xe :<a class="Hang_xe" href="xe.xe_view_all">{{ $xe->Hang_xe }}</a>
                </div>

                <div class="Gia">
                    Giá:<a class="Gia" href="xe.xe_view_all">{{ $xe->Gia }}</a>
                </div>

                <div class="Ten_loai_xe">
                    Loại Xe:<a class="Ten_loai_xe" href="xe.xe_view_all">{{ $xe->Ten_loai_xe }}</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

@endsection
