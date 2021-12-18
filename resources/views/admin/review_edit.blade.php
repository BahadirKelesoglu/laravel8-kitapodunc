

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
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Review Detail</h4>
                                @include('home.message')
                                <form class="form-group" role="form" action="{{ route('admin_review_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                <table class="table table-striped table-advance table-hover">
                                    <hr>
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> ID</th>
                                        <th class="hidden-phone"><i class="fa fa-question-circle"></i>Name</th>
                                        <th><i class="fa fa-bookmark"></i>Book</th>
                                        <th>Subject</th>
                                        <th>Rate</th>




                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->user->name }} </td>
                                            <td>{{ $data->book->title }} </td>
                                            <td>{{ $data->subject }} </td>
                                            <td>{{ $data->rate }} </td>

                                        <tr>
                                            <th>
                                                IP
                                            </th>

                                            <td>{{ $data->ip }} </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Review
                                            </th>

                                            <td>{{ $data->review }} </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Created at
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
                                                Status
                                            </th>

                                            <td>
                                                <select name="status">
                                                    <option selected>{{$data->status}}</option>
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </td>
                                        </tr>




                                        </tr>



                                    </tbody>

                                </table>
                                    <button type="submit" class="btn btn-theme">Update Review</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>



