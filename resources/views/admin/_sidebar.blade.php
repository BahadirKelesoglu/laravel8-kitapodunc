<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="{{ route('admin_home') }}"><img src="{{asset('storage/'. Auth::user()->profile_photo_path)}}" class="img-circle" width="60"></a></p>
            @auth
            <h5 class="centered">{{Auth::user()->name}}</h5>
            @endauth

            <li class="mt">
                <a class="active" href="{{ route('admin_home') }}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>



            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Tools</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ route('admin_category') }}">Category</a></li>
                    <li><a  href="{{ route('admin_books') }}">Books</a></li>
                    <li><a  href="{{ route('admin_review') }}">Reviews</a></li>

                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>Reservations</span>
                </a>
                <ul class="sub">
                    <li><a  href="{{ route('admin_reservations') }}">All</a></li>
                    <li><a  href="{{ route('admin_reservation_list',['status'=>'New']) }}">New</a></li>
                    <li><a  href="{{ route('admin_reservation_list',['status'=>'Accepted']) }}">Accepted</a></li>
                    <li><a  href="{{ route('admin_reservation_list',['status'=>'Cancelled']) }}">Cancelled</a></li>
                    <li><a  href="{{ route('admin_reservation_list',['status'=>'Completed']) }}">Completed</a></li>


                </ul>
            </li>

            <li class="sub-menu">
                <a href="{{ route('admin_setting') }}" >
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{ route('admin_users') }}" >
                    <i class="fa fa-cogs"></i>
                    <span>User Transactions</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="{{ route('admin_message') }}" >
                    <i class="fa fa-cogs"></i>
                    <span>Contact Messages</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="{{ route('admin_faq') }}" >
                    <i class="fa fa-cogs"></i>
                    <span>FAQ</span>
                </a>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
