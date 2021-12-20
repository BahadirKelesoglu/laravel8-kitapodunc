<!DOCTYPE html>
<html lang="en">
<head>



    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$data->title}}</title>
    <meta name="description" content="{{$data->description}}">
    <meta name="keywords" content="{{$data->keywords}}">
    <meta name="author" content="Bahadir Kelesoglu">

    <!-- FAVICON -->
    <link href="{{asset('assets')}}/img/favicon.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap-slider.css">
    <!-- Font Awesome -->
    <link href="{{asset('assets')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="{{asset('assets')}}/plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="{{asset('assets')}}/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="{{asset('assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/navbar.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{asset('assets')}}/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>navbar example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    @yield('css')
    @yield('headerjs')


</head>
<body>

@include('home._header')


<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
    <!-- Container Start -->
    <div class="container">
        <div class="row">
            <!-- Left sidebar -->
            <div class="col-md-8">
                <div class="product-details">
                    <h1 class="product-title">{{$data->title}}</h1>
                    <div class="product-meta">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-user-o"></i> By <a>{{$data->author}}</a></li>
                            <li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category <a>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</a></li>

                        </ul>
                    </div>

                    <!-- product slider -->
                    <div class="post-slider">
                        <div style="height: 500px;">
                            <img class="img-fluid w-100 h-100" src="{{Storage::url($data->image)}}" alt="product-img">
                        </div>
                        @foreach($datalist as $rs)
                        <div style="height: 500px;">
                            <img class="img-fluid w-100 h-100" src="{{Storage::url($rs->image)}}" alt="product-img">
                        </div>
                        @endforeach
                    </div>
                    <!-- product slider -->

                    <div class="content mt-5 pt-5">
                        <ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                   aria-selected="true">Product Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                   aria-selected="false">Specifications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                                   aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <h3 class="tab-title">Book Description</h3>
                                <p>{!! $data->detail !!}</p>


                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <h3 class="tab-title">Product Specifications</h3>
                                <table class="table table-bordered product-table">
                                    <tbody>
                                    <tr>
                                        <td>Author</td>
                                        <td>{{$data->author}}</td>
                                    </tr>
                                    <tr>
                                        <td>Subject</td>
                                        <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                        <td>Page Number</td>
                                        <td>{{$data->pageno}}</td>
                                    </tr>
                                    <tr>
                                        <td>Publisher Name</td>
                                        <td>{{$data->publishername}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <td>Publish Date</td>
                                        <td>{{$data->publishdate}}</td>
                                    </tr>
                                    <tr>
                                        <td>Added Date</td>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            @php
                            $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                            @endphp
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="product-review">
                                    <h3 class="tab-title">Book Review({{$countreview}})</h3>


                                    @foreach($reviews as $rs)
                                        <div class="media">
                                            <!-- Avater -->

                                            <img src="images/user/user-thumb.jpg" alt="avater">
                                            <div class="media-body">
                                                <!-- Ratings -->
                                                <div class="ratings">

                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="name">
                                                    <h5>{{$rs->user->name}}</h5>
                                                </div>
                                                <div class="date">
                                                    <p>{{$rs->created_at}}</p>
                                                </div>
                                                <div class="review-comment">
                                                    <strong>{{$rs->subject}}</strong>
                                                    <p>

                                                        {{$rs->review}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                            @livewire('review',['id'=>$data->id])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="sidebar">





                @auth()




                    <a href="{{route('user_reservation_add',[$data->id])}}">
                        <div class="widget price text-center">


                            <h4>Add For Rent Apply</h4>
                            <i style="font-size: 30px" class="fa fa-shopping-basket"></i>
                        </div>
                    </a>

                    @else
                        <a href="{{route('login')}}">
                            <div class="widget price text-center">


                                <h4>Login For Rent Apply</h4>
                                <i style="font-size: 30px" class="fa fa-shopping-basket"></i>
                            </div>
                        </a>
                    @endauth


                </div>
            </div>

        </div>
    </div>
    <!-- Container End -->

</section>

@include('home._footer')

</body>
</html>
