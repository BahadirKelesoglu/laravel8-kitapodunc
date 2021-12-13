@extends('layouts.admin')

@section('title', 'Category Add')



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
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Inline Form</h4>
                                <form class="form-group" role="form" action="{{ route('admin_category_create') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label >Parent</label>
                                        <select class="form-control" name="parent_id">
                                            <option value="0" selected="selected">Main Category</option>
                                            @foreach($datalist as $rs)
                                            <option value="{{ $rs->id }}"> {{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }} </option>
                                            @endforeach

                                        </select>
                                    </div>


                                    <div class="form-group">

                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" class="form-control" name="keywords">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" class="form-control" name="description">
                                    </div>

                                    <div class="form-group">
                                        <label  >Slug</label>
                                        <input type="text" class="form-control" name="slug">
                                    </div>

                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status">
                                            <option>False</option>
                                            <option>True</option>

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-theme">Add Category</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
