

<!-- Bootstrap core CSS -->
<link href="{{ asset('assets')}}/admin/assets/css/bootstrap.css" rel="stylesheet">
<!--external css-->
<link href="{{ asset('assets')}}/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/css/zabuto_calendar.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/js/gritter/css/jquery.gritter.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/admin/assets/lineicons/style.css">

<!-- Custom styles for this template -->
<link href="{{ asset('assets')}}/admin/assets/css/style.css" rel="stylesheet">
<link href="{{ asset('assets')}}/admin/assets/css/style-responsive.css" rel="stylesheet">

<script src="{{ asset('assets')}}/admin/assets/js/chart-master/Chart.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>






            <div class="row mt">
                <div class="col-lg-12">
                    <!-- INLINE FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i>User Detail</h4>
                                @include('home.message')
                                <table class="table table-striped table-advance table-hover">
                                    <hr>
                                    <thead>
                                    <tr>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                        <tr>
                                            <th>
                                                ID
                                            </th>

                                            <td>{{ $data->id }}</td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Name
                                            </th>

                                            <td>{{ $data->name }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Email
                                            </th>

                                            <td>{{ $data->email }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Roles
                                            </th>

                                            <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}}</td>
                                                        <td>
                                                            <a href="{{route('admin_user_role_delete',['userid'=>$data->id, 'roleid'=>$row->id])}}"
                                                               onclick="return confirm('Are you sure to delete?')" >
                                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Add Role</th>
                                            <td>
                                                <form class="form-group" role="form" action="{{ route('admin_user_role_add',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                    <button type="submit" class="btn btn-theme">Add Role</button>
                                                </form>
                                            </td>
                                        </tr>








                                    </tbody>

                                </table>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>



