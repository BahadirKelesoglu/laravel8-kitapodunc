



<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light navigation">
                    <a class="navbar-brand" href="{{route('HomeController')}}">
                        <img src="{{asset('assets')}}/images/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    @php
                    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                    @endphp


                    <div class="row col-auto">
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





                        <ul class="navbar-nav ml-auto mt-10 col-auto ">
                            @auth

                                <div class="dropdown">

                                    <li class="nav-item">

                                        <a id="dLabel" role="button" data-toggle="dropdown" class="nav-link login-button">
                                            <strong>{{Auth::user()->name}}</strong>
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu multi-level" role="menu">


                                            <li class="dropdown">
                                                <a tabindex="-1" href="{{route('myprofile')}}">My Account</a>
                                            </li>
                                            <li class="dropdown">
                                                <a tabindex="-1" href="{{route('myreviews')}}">Reviews</a>
                                            </li>
                                        </ul>

                                </div>
                            <li class="nav-item">

                                    <a class="nav-link login-button" href="{{route('logout')}}"><strong>Logout</strong></a>
                            </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white add-button" href="{{asset('assets')}}/ad-listing.html"><i class="fa fa-plus-circle"></i> Add Listing</a>
                                </li>
                            @endauth
                            @guest
                                <a class="nav-link login-button" href="{{route('login')}}">Login</a>
                                    <a class="nav-link text-white add-button" href="{{route('register')}}">Join</a>
                                @endguest

                        </ul>


                </nav>
            </div>
        </div>
    </div>
    <div class="advance-search" style="background-color: #2E2E2E">
    <div class="container ">
        <div class="row ">
            <div class="col-lg-9 col-md-2 col-md-offset-4  ">
                <form action="{{route('getbook')}}" method="post">
                    @csrf

                    <div class="form-row">


                            @livewire('search')

                        <div class="form-group col-md-1 col-lg-3 ">
                            <button type="submit" class="nav-link text-white add-button">Search Now</button>
                        </div>
                    </div>

                </form>
                @section('footerjs')
                    @livewireScripts
                @endsection

            </div>
        </div>
    </div>
    </div>
</section>




