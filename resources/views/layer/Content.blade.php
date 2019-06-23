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

    <section class="home-2"
             style="margin-top: 30px; padding: 40px 0 80px; background: url('https://calstate.aaa.com/sgl-assets/files/article_hero/make-weekend-travel-count-istock937326846-2880x1440.jpg') fixed; background-size: cover;">
        <div class="container">
            
            <div class="home2-slide">
                <div id="owl-demo2" class="owl-carousel owl-theme">
                                               
                                                    <div class="item">
                                <div class="home2-in">
                                    <div class="home2-in-img">
                                        <img src="/admin/uploads/files/xe-29-cho/1466761539_ele29-1.jpg" alt="#">
                                    </div>
                                    
                            </div>
                                        </div>
            </div>
        </div>
    </section>




