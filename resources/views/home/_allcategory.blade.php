<!--==========================================
=            All Category Section            =
===========================================-->

<!-- Bootstrap core CSS -->

<section class=" section">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Deals Of The Day</h2>
                    <p>Best Deals Of The Day Don't Miss!!</p>
                </div>
            </div>
            @foreach($daily as $rs)
                @if($rs->status == 'True')
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                    <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}">
                        <img class="card-img-top" style="height:200px; height:300px" src="{{Storage::url($rs->image)}}" class="img-fluid w-100" alt="Card image cap">
                    </a>
                    <div class="card-body bg-gray text-center">
                        <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}"> <h5 class="card-title">{{$rs->title}}</h5></a>
                        <p class="card-text">{{$rs->author}}</p>
                        <p class="card-text">{{$rs->subject}}</p>

                    </div>
                </div>
            </div>
                @endif
            @endforeach
            </div>
        <br>
        <br>
        <br>
        <!-- LAST -->
        <div class="row">
            <div class="col-12">
                <!-- Section title -->
                <div class="section-title">
                    <h2>Newest Books</h2>
                    <p>Daily New Books Look Out!!</p>
                </div>
            </div>
            @foreach($last as $rs)
                @if($rs->status == 'True')
            <div class="col-lg-3 col-sm-6">
                <div class="card my-3 my-lg-0">
                   <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}"> <img class="card-img-top" style="height: 200px; height: 300px" src="{{Storage::url($rs->image)}}" class="img-fluid w-100" alt="Card image cap">
                   </a>
                    <div class="card-body bg-gray text-center">
                        <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}"><h5 class="card-title">{{$rs->title}}</h5></a>
                        <p class="card-text">{{$rs->author}}</p>
                        <p class="card-text">{{$rs->subject}}</p>

                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>
        <!-- LAST END -->
        </div>

     <!-- Container End -->
</section>
