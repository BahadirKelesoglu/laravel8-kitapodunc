@extends('layouts.admin')

@section('title', 'Book List')



@section('maincontent')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <div class="row mt">
                <div class="col-md-12">
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Books</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Category</th>
                                <th><i class="fa fa-bookmark"></i> Title</th>
                                <th><i class=" fa fa-edit"></i> Author</th>
                                <th><i class=" fa fa-edit"></i> Publisher Name</th>
                                <th><i class=" fa fa-edit"></i> Image</th>
                                <th><i class=" fa fa-edit"></i> Image Gallery</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td >{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                                <td>{{ $rs->title }} </td>
                                <td>{{ $rs->author }} </td>
                                <td>{{ $rs->publishername }} </td>
                                <td>
                                @if ($rs->image)
                                    <img src="{{ Storage::url($rs->image) }}" height="30" alt="">
                                    @endif

                                </td>
                                <td><a href="{{ route('admin_image_add',['book_id'=>$rs->id]) }}"
                                       onclick="return !window.open(this.href, '','top=50 left=100 width=1200, height=700')">
                                        <img src="{{asset('assets/admin/images')}}/gallery.png" height="20">  </a></td>
                                <td><span class="label label-info label-mini" @if($rs->status=="True") style="background-color: forestgreen" @endif>{{ $rs->status }}</span></td>
                                <td>

                                    <a href="{{route('admin_book_edit', ['id' => $rs->id])}}">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{route('admin_book_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div><!-- /content-panel -->
                    <br>

                    <a href="{{route('admin_book_add')}}"><button type="button" class="btn btn-success">Add New Book</button></a>
                </div><!-- /col-md-12 -->
            </div><!-- /row -->





        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
