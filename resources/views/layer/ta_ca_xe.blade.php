@extends('layer.master')
@section('content')


    <div class="container">
        
        <ul>
            <tr>
            @foreach($array_xe as $xe)
            <li>
                <h1><b><a class="Ten_xe" href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">{{ $xe->Ten_xe }}</a></b></h1>
                
                <div class="thumbnails">
                    <a href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}"><img width="700px" src="storage/{{$xe->Anh}}" alt=""></a>
                </div>
                <b><div class="Hang_xe">
                    Hãng Xe :<a class="Hang_xe" href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">{{ $xe->Hang_xe }}</a>
                </div>

                <div class="Gia">
                    Giá:<a class="Gia" href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">{{ $xe->Gia }}</a>
                </div>

                <div class="Ten_loai_xe">
                    Loại Xe:<a class="Ten_loai_xe" href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">{{ $xe->Ten_loai_xe }}</a>
                </div></b>
            </li>
            @endforeach
            
        </ul>
        
    </div>

@endsection
