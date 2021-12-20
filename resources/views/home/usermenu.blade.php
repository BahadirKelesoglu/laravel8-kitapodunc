

            <div class="sidebar">
                <!-- User Widget -->
                <div class="widget user">
                    <!-- User Image -->
                    <div class="image d-flex justify-content-center">
                        <img src="{{asset('assets')}}/images/user/user-thumb.jpg" alt="" class="">
                    </div>
                    <!-- User Name -->
                    <h5 class="text-center">{{Auth::user()->name}}</h5>
                </div>

                <!-- Dashboard Links -->
                <div class="widget dashboard-links">
                    <ul>
                        <li><a class="my-1 d-inline-block" href="{{route('myprofile')}}">My Profile</a></li>
                        <li><a class="my-1 d-inline-block" href="{{route('user_reservations')}}">Reservations <span>(5)</span></a></li>
                        <li><a class="my-1 d-inline-block" href="{{route('myreviews')}}">Reviews <span>(3)</span></a></li>
                        <li><a class="my-1 d-inline-block" href="{{route('logout')}}">Logout</a></li>
                    </ul>
                </div>
            </div>


