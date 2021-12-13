@extends('layouts.admin')

@section('title', 'Product Add')

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
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Inline Form</h4>
                                <form class="form-group" role="form" action="{{ route('admin_product_store') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label >Category</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{ $rs->id }}">{{ \App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title) }}</option>
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
                                        <label>Quantity</label>
                                        <input type="number" value="1" class="form-control" name="quantity">
                                    </div>

                                    <div class="form-group">
                                        <label>Minimum Quantity</label>
                                        <input type="number" value="5" class="form-control" name="minquantity">
                                    </div>

                                    <div class="form-group">
                                        <label>Tax</label>
                                        <input type="number" value="18" class="form-control" name="tax">
                                    </div>

                                        <div class="form-group">
                                            <label>Detail</label>
                                            <textarea id="detail" name="detail"></textarea>
                                            <script>
                                                CKEDITOR.replace( 'detail' );
                                            </script>
                                        </div>



                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" value="0" class="form-control" name="price">
                                    </div>

                                    <div class="form-group">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" name="slug">
                                    </div>

                                    <div class="form-group">
                                         <label>Image</label>
                                        <input type="file" name="image" class="form-control">


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
