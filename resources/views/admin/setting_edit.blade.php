@extends('layouts.admin')

@section('title', 'Product Edit')

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection



@section('maincontent')






    <section id="main-content">
        <section class="wrapper site-min-height">


                            <div class="form-panel">
                                <h4 class="mb"><i class="fa fa-angle-right"></i> Edit Setting</h4>
                                <form class="form-group" role="form" action="{{ route('admin_setting_update') }}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">

                                        <input type="hidden" value="{{ $data->id }}" class="form-control" name="id" id="id">
                                    </div>


                                    <div class="form-group">

                                        <label>Title</label>
                                        <input type="text" value="{{ $data->title }}" id="title" class="form-control" name="title">
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
                                        <label>Company</label>
                                        <input type="text" value="{{ $data->company }}" class="form-control" name="company">
                                    </div>

                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" value="{{ $data->address }}" class="form-control" name="address">
                                    </div>

                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" value="{{ $data->phone }}" class="form-control" name="phone">
                                    </div>

                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" value="{{ $data->fax }}" class="form-control" name="fax">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" value="{{ $data->email }}" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtpserver</label>
                                        <input type="text" value="{{ $data->smtpserver }}" class="form-control" name="smtpserver">
                                    </div>
                                    <div class="form-group">
                                        <label>SmtpEmail</label>
                                        <input type="smtpemail" value="{{ $data->fax }}" class="form-control" name="smtpemail">
                                    </div>
                                    <div class="form-group">
                                        <label>SmtpPassword</label>
                                        <input type="password" value="{{ $data->smtppassword }}" class="form-control" name="smtppassword">
                                    </div>
                                    <div class="form-group">
                                        <label>Smtpport</label>
                                        <input type="number" value="{{ $data->smtpport }}" class="form-control" name="smtpport">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" value="{{ $data->facebook }}" class="form-control" name="facebook">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" value="{{ $data->instagram }}" class="form-control" name="instagram">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" value="{{ $data->twitter }}" class="form-control" name="twitter">
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" value="{{ $data->youtube }}" class="form-control" name="youtube">
                                    </div>

                                    <div class="form-group">
                                        <label>Aboutus</label>
                                        <textarea id="aboutus" name="aboutus">{{ $data->aboutus }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea id="references" name="references">{{ $data->references }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea id="contact" name="contact">{{ $data->contact }}</textarea>
                                    </div>

                                    <script>
                                        CKEDITOR.replace( 'aboutus' );
                                        CKEDITOR.replace( 'references' );
                                        CKEDITOR.replace( 'contact' );
                                    </script>

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
