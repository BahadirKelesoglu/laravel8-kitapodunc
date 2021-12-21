@extends('layouts.admin')

@section('title', 'User Edit')

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
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Edit User</h4>
                                <form class="form-group" role="form" action="{{ route('admin_user_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">

                                        <label>Name</label>
                                        <input type="text" value="{{ $data->name }}" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" value="{{ $data->email }}" class="form-control" name="email">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" value="{{ $data->phone }}" class="form-control" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" value="{{ $data->address }}" class="form-control" name="address">
                                    </div>

                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" name="image">
                                        @if($data->profile_photo_path)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($data->profile_photo_path)}}"
                                                 height="50" style="border-radius: 10px;" alt="">
                                        @endif
                                    </div>


                                    <button type="submit" class="btn btn-theme">Edit User</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
