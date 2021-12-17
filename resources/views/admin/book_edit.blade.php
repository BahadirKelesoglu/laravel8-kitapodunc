@extends('layouts.admin')

@section('title', 'Book Edit')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection



@section('maincontent')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <div class="row mt">
                <div class="col-lg-12">
                    <!-- INLINE FORM ELELEMNTS -->
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Book</h4>
                                <form class="form-group" role="form" action="{{ route('admin_book_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label >Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}" @if ($rs->id == $data->category_id) selected="selected" @endif>{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="form-group">

                                        <label>Title</label>
                                        <input type="text" value="{{ $data->title }}" class="form-control" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" value="{{ $data->keywords }}" class="form-control" name="keywords">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" value="{{ $data->description }}" class="form-control" name="description">
                                    </div>

                                    <div class="form-group">
                                        <label>Author</label>
                                        <input type="text" value="{{ $data->author }}" class="form-control" name="author">
                                    </div>

                                    <div class="form-group">
                                        <label>Page Number</label>
                                        <input type="number" value="{{ $data->pageno }}" class="form-control" name="pageno">
                                    </div>

                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" value="{{ $data->subject }}" class="form-control" name="subject">
                                    </div>

                                    <div class="form-group">
                                        <label>Publisher Name</label>
                                        <input type="text" value="{{ $data->publishername }}" class="form-control" name="publishername">
                                    </div>

                                    <div class="form-group">
                                        <label>Publish Date</label>
                                        <input type="date" value="{{ $data->publishdate }}" class="form-control" name="publishdate">
                                    </div>

                                    <div class="form-group">
                                        <label>Detail</label>
                                        <textarea id="detail" name="detail">{{ $data->detail }}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div>


                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" src="{{ $data->image }}" class="form-control">
                                        @if ($data->image)
                                            <img src="{{ Storage::url($data->image) }}" height="100">
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" value="{{ $data->slug }}" class="form-control" name="slug">
                                    </div>


                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status">
                                            <option>False</option>
                                            <option>True</option>

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-theme">Edit Book</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
