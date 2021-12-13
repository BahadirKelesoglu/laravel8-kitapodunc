

<html>
<head>
    <link href="{{asset('assets')}}/css/navbar.css" rel="stylesheet">
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{asset('assets')}}/images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    @php
                    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                    @endphp


                    <div class="row">
                        @foreach($parentCategories as $rs)
                        <div class="dropdown">
                            <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-navbar" data-target="#" href="#">
                                {{$rs->title}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

                                @if(count($rs->children))
                                    @include('home.categorytree', ['children' => $rs->children])
                                    @endif

                            </ul>
                        </div>
@endforeach
                    </div>




                        <ul class="navbar-nav ml-auto mt-10">
                            <li class="nav-item">
                                <a class="nav-link login-button" href="{{asset('assets')}}/login.html">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white add-button" href="{{asset('assets')}}/ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
                            </li>
                        </ul>


                </nav>
            </div>
        </div>
    </div>
</section>



</body>
</html>
