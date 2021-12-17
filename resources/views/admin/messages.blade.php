@extends('layouts.admin')

@section('title', 'Contact Messages List')



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
                            <h4><i class="fa fa-angle-right"></i>Messages</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i>Name</th>
                                <th><i class="fa fa-bookmark"></i>Email</th>
                                <th>Phone</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Admin Note</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->name }} </td>
                                <td>{{ $rs->email }} </td>
                                <td>{{ $rs->phone }} </td>
                                <td>{{ $rs->subject }} </td>
                                <td>{{ $rs->message }} </td>
                                <td><span class="label label-info label-mini" @if($rs->status=="New") style="background-color: forestgreen" @endif>{{ $rs->status }}</span></td>
                                <td>{{ $rs->note }} </td>
                                <td>

                                    <a href="{{route('admin_message_edit', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1200, height=700')">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{route('admin_message_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')">
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
