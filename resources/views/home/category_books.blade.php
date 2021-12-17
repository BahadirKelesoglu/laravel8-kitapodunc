<!DOCTYPE html>
<html lang="en">
<head>



    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$data->title}} Listesi</title>
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('key')">
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

<section class="page-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Advance Search -->
                <div class="advance-search">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Category">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
                            </div>
                            <div class="form-group col-md-2">

                                <button type="submit" class="btn btn-primary">Search Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-result bg-gray">
                    <h2>Results For "Electronics"</h2>
                    <p>123 Results on 12 December, 2017</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="category-sidebar">
                    <div class="widget category-list">
                        <h4 class="widget-header">All Category</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Laptops <span>93</span></a></li>
                            <li><a href="category.html">Iphone <span>233</span></a></li>
                            <li><a href="category.html">Microsoft  <span>183</span></a></li>
                            <li><a href="category.html">Monitors <span>343</span></a></li>
                        </ul>
                    </div>

                    <div class="widget category-list">
                        <h4 class="widget-header">Nearby</h4>
                        <ul class="category-list">
                            <li><a href="category.html">New York <span>93</span></a></li>
                            <li><a href="category.html">New Jersy <span>233</span></a></li>
                            <li><a href="category.html">Florida  <span>183</span></a></li>
                            <li><a href="category.html">California <span>120</span></a></li>
                            <li><a href="category.html">Texas <span>40</span></a></li>
                            <li><a href="category.html">Alaska <span>81</span></a></li>
                        </ul>
                    </div>

                    <div class="widget filter">
                        <h4 class="widget-header">Show Produts</h4>
                        <select>
                            <option>Popularity</option>
                            <option value="1">Top rated</option>
                            <option value="2">Lowest Price</option>
                            <option value="4">Highest Price</option>
                        </select>
                    </div>

                    <div class="widget price-range w-100">
                        <h4 class="widget-header">Price Range</h4>
                        <div class="block">
                            <input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
                                   data-slider-value="[0,5000]">
                            <div class="d-flex justify-content-between mt-2">
                                <span class="value">$10 - $5000</span>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-md-9">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Short</strong>
                            <select>
                                <option>Most Recent</option>
                                <option value="1">Most Popular</option>
                                <option value="2">Lowest Price</option>
                                <option value="4">Highest Price</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="view">
                                <strong>Views</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-grid-list">
                    <div class="row mt-30">










                        @foreach($datalist as $rs)
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->

                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        <!-- <div class="price">$200</div> -->
                                        <a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}">
                                            <img class="card-img-top img-fluid" src="{{Storage::url($rs->image)}}" style="height: 400px" alt="Card image cap">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="{{route('book', ['id'=>$rs->id,'slug'=>$rs->slug])}}">{{$rs->title}}</a></h4>
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

                        </div>
                        @endforeach



                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@include('home._footer')

</body>
</html>
