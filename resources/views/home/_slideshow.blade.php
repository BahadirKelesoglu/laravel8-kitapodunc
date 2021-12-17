<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Popüler Kitaplar</h2>
                    <p>En Çok Satan Kitaplarımızı Sizler İçin Düzenledik.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- offer 01 -->
            <div class="col-lg-12">
                <div class="trending-ads-slide">
                    @foreach($slider as $rs)
                    <!-- product card first -->
                    <div class="col-sm-12 col-lg-4">
                        <!-- product card first? -->
                        <div class="product-item bg-light">
                            <div class="card">
                                <div class="thumb-content">
                                    <!-- <div class="price">$200</div> -->
                                    <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                        <img class="card-img-top img-fluid" style="height: 400px" src="{{Storage::url($rs->image)}}" alt="Card image cap">
                                    </a>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="single.html">{{$rs->title}}</a></h4>
                                    <ul class="list-inline product-meta">
                                        <li class="list-inline-item">
                                            <a><i class="fa fa-address-book"></i>{{$rs->author}}</a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a><i class="fa fa-calendar"></i>{{$rs->publishdate}}</a>
                                        </li>
                                    </ul>
                                    <p class="card-text">{{$rs->subject}}</p>
                                    <div class="product-ratings">
                                        <ul class="list-inline">
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- product card first END? -->
                    </div>
                    @endforeach
                    <!-- product card first END -->




                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
