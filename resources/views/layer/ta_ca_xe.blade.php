<section id="featured" class="row mt40">
            <div class="container">
                <ul class="thumbnails">
                    @foreach($xe as $item)
                    <li class="span3">
                        <a class="Ten_xe" href="xe.xe_view_all">{!! $item->Ten_xe!!}</a>
                        <div class="thumbnails">
                            <a href="#"></a>
                        </div>
                        <div class="Hang_xe">
                            <a class="Hang_xe" href="xe.xe_view_all">{!! $item->Hang_xe!!}</a>
                        </div>

                        <div class="Gia">
                            <a class="Gia" href="xe.xe_view_all">{!! $item->Gia!!}</a>
                        </div>

                        <div class="Ma_loai_xe">
                            <a class="Ma_loai_xe" href="xe.xe_view_all">{!! $item->Ma_loai_xe!!}</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            
        </div>
</section>