@extends('layouts.admin')

@section('title', 'Frequently Asked Questions List')



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
                            <h4><i class="fa fa-angle-right"></i> Frequently Asked Questions</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Position</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Question</th>
                                <th><i class="fa fa-bookmark"></i> Answer</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>

                                <td>{{ $rs->position }} </td>
                                <td>{{ $rs->question }} </td>
                                <td>{!! $rs->answer !!} </td>
                                <td><span class="label label-info label-mini" @if($rs->status=="True") style="background-color: forestgreen" @endif>{{ $rs->status }}</span></td>
                                <td>

                                    <a href="{{route('admin_faq_edit', ['id' => $rs->id])}}">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{route('admin_faq_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div><!-- /content-panel -->
                    <br>

                    <a href="{{route('admin_faq_add')}}"><button type="button" class="btn btn-success">Add New FAQ</button></a>
                    @include('home.message')
                </div><!-- /col-md-12 -->
            </div><!-- /row -->





        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
