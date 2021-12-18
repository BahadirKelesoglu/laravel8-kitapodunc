@extends('layouts.admin')

@section('title', 'Frequently Asked Questions Edit')

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
                                <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Frequently Asked Questions</h4>
                                <form class="form-group" role="form" action="{{ route('admin_faq_update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">

                                        <label>Position</label>
                                        <input type="number" class="form-control" name="position" value="{{$data->position}}">
                                    </div>
                                    <div class="form-group">

                                        <label>Question</label>
                                        <input type="text" class="form-control" name="question" value="{{$data->question}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Answer</label>
                                        <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'answer' );
                                        </script>
                                    </div>

                                    <div class="form-group">
                                        <label >Status</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-theme">Edit FAQ</button>
                                </form>
                            </div><!-- /form-panel -->
                        </div><!-- /col-lg-12 -->
                    </div><!-- /row -->
                </div>
            </div>

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
