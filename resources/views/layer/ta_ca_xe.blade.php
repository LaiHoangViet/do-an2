@extends('layer.master')
@section('content')


    <div class="container">
        <table border="0px " width="100%" height="150px" cellspacing="100px" style="margin-bottom:100px">
            <tr>
            @foreach($array_xe as $xe)
            <td>
                <a class="Ten_xe" href="{{ route('chi_tiet_xe', ['id' => $xe->Ma_xe]) }}">{{ $xe->Ten_xe }}</a>
                
                <div class="thumbnails">
                    <a href="#"><img width="200px" src="storage/{{$xe->Anh}}" alt=""></a>
                </div>
                <div class="Hang_xe">
                    Hãng Xe :<a class="Hang_xe" href="#">{{ $xe->Hang_xe }}</a>
                </div>

                <div class="Gia">
                    Giá:<a class="Gia" href="#">{{ $xe->Gia }}</a>
                </div>

                <div class="Ten_loai_xe">
                    Loại Xe:<a class="Ten_loai_xe" href="#">{{ $xe->Ten_loai_xe }}</a>
                </div>
            </li>
            @endforeach
            </td>
        </table>
        
    </div>

@endsection
