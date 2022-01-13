

            <div class="sidebar">
                <!-- User Widget -->
                <div class="widget user">
                    <!-- User Image -->
                    <div class="image d-flex justify-content-center">
                        <img src="{{asset('storage/'. Auth::user()->profile_photo_path)}}" class="img-circle" width="60">
                    </div>
                    <!-- User Name -->
                    <h5 class="text-center">{{Auth::user()->name}}</h5>
                </div>

                <!-- Dashboard Links -->
                <div class="widget dashboard-links">
                    <ul>
                        <li><a class="my-1 d-inline-block" href="{{route('myprofile')}}">My Profile</a></li>
                        <li><a class="my-1 d-inline-block" href="{{route('user_reservations')}}">Reservations </a></li>
                        <li><a class="my-1 d-inline-block" href="{{route('myreviews')}}">Reviews</a></li>
                        @if(Auth::user()->roles->pluck('name')->contains('admin'))
                            <li><a class="my-1 d-inline-block" href="{{route('admin_home')}}">Admin Panel</a></li>
                        @endif

                    </ul>
                </div>
            </div>


