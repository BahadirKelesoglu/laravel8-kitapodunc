@extends('layouts.admin')

@section('title', 'Reviews List')



@section('maincontent')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <div class="row mt">
                <div class="col-md-12">
                    @include('home.message');
                    <div class="content-panel">
                        <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i>Reviews</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Name</th>
                                <th><i class="fa fa-bookmark"></i>Book</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->user->name }} </td>
                                <td><a href="{{route('book', ['id'=> $rs->book->id,'slug'=>$rs->book->slug])}}" target="_blank">
                                    {{$rs->book->title}}
                                    </a>
                                </td>
                                <td>{{ $rs->subject }} </td>
                                <td>{{ $rs->review }} </td>
                                <td>{{ $rs->rate }} </td>
                                <td><span class="label label-info label-mini" @if($rs->status=="New") style="background-color: forestgreen" @endif>{{ $rs->status }}</span></td>
                                <td>{{ $rs->created_at }} </td>
                                <td>

                                    <a href="{{route('admin_review_show', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1200, height=700')">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="{{route('admin_review_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div><!-- /content-panel -->
                    <br>


                </div><!-- /col-md-12 -->
            </div><!-- /row -->





        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
