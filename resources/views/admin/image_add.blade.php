<html>
<head>
    <title>Add Image</title>
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
</head>
<body>



            <div class="row mt">
                <div class="col-lg-12">
                    <h2 class="text-left">Add Image</h2>
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> {{$data->title}}</h4>
                                <form class="form-group" role="form" action="{{ route('admin_image_store',['product_id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">

                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group">
                                         <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-theme">Add Image</button>
                                </form>
                                <br>
                                <br>
                                <table class="table table-striped table-advance table-hover">
                                    <h4><i class="fa fa-angle-right"></i> Images</h4>
                                    <hr>
                                    <thead>
                                    <tr>
                                        <th><i class="fa fa-bullhorn"></i> ID</th>
                                        <th><i class="fa fa-bookmark"></i> Title</th>
                                        <th><i class=" fa fa-edit"></i> Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr>
                                            <td>{{ $rs->id }}</td>
                                            <td>{{ $rs->title }} </td>
                                            <td>
                                                @if ($rs->image)
                                                    <img src="{{ Storage::url($rs->image) }}" height="75" alt="">
                                                @endif

                                            </td>
                                            <td><a href="{{route('admin_image_delete', ['id' => $rs->id, 'product_id' => $data->id])}}" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>
</body>
</html>
