

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
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Reservation Detail</h4>
                                @include('home.message')
                                <form class="form-group" role="form" action="{{ route('admin_reservation_items_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
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
                                                User
                                            </th>

                                            <td>{{ $data->user->name }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Book
                                            </th>

                                            <td>{{ $data->book->title }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Taking Date
                                            </th>

                                            <td>{{ $data->bookdate }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Return Date
                                            </th>

                                            <td>{{ $data->returndate }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Creating Date
                                            </th>

                                            <td>{{ $data->created_at }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                Updated at
                                            </th>

                                            <td>{{ $data->updated_at }} </td>
                                        </tr>

                                        <tr>
                                            <th>
                                                IP
                                            </th>

                                            <td>{{ $data->ip }} </td>
                                        </tr>
                                        <tr>
                                            <th>Admin Edit</th>
                                            <td><textarea class="border w-100 p-3 mt-3 mt-lg-12" id="note" name="note" >{{ $data->note }}</textarea></td>

                                        </tr>

                                        <tr>
                                            <th>
                                                Status
                                            </th>

                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>Accepted</option>
                                                    <option>Cancelled</option>
                                                    <option>Completed</option>
                                                </select>
                                            </td>
                                        </tr>




                                        </tr>



                                    </tbody>

                                </table>
                                    <button type="submit" class="btn btn-theme">Update Reservation</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>



