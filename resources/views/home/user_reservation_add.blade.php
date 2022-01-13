<!DOCTYPE html>
<html lang="en">
<head>



    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation</title>
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
<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Section title -->

            <div class="row">
                <!-- Category list -->
                <div class="col-lg-6 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">

                            <h4>Book</h4>
                            <hr>
                            <div style="height: 500px;">
                                <img class="img-fluid w-100 h-100" src="{{Storage::url($data->image)}}" alt="product-img">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
                    <div class="category-block">
                        <div class="header">
                            <h4>Reservation Application</h4>
                            <hr>
                            <form action="{{route('user_reservation_store', [$data->id])}}" method="post">
                                @csrf
                                <fieldset class="p-4">
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-lg-6 py-4">
                                                <label>Taking Date</label>
                                                <input name="bookdate" type="date" placeholder="Taking Date" class="form-control"
                                                       min="{{date('Y-m-d')}}" required>
                                            </div>
                                            <div class="col-lg-6 pt-4">
                                                <label>Return Date</label>
                                                <input name="returndate" type="date" placeholder="Return Date" class="form-control"
                                                       min="{{date('Y-m-d')}}" required>
                                            </div>


                                    </div>

                                        <button type="submit" class="btn btn-primary mt-2 float-right">SUBMIT</button>
                                    </div>
                                    @include('home.message')
                                    </div>
                                </fieldset>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('home._footer')

</body>
</html>
