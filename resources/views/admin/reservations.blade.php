@extends('layouts.admin')

@section('title', 'Reservation List')



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
                            <h4><i class="fa fa-angle-right"></i> Reservations</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th><i class="fa fa-bullhorn"></i> User</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Book</th>
                                <th><i class="fa fa-bookmark"></i> Taking Date</th>
                                <th><i class=" fa fa-edit"></i> Return Date</th>
                                <th><i class=" fa fa-edit"></i>Created Date</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td >{{$rs->user->name}}</td>
                                <td>{{ $rs->book->title }} </td>
                                <td>{{ $rs->bookdate }} </td>
                                <td>{{ $rs->returndate }} </td>
                                <td>{{ $rs->created_at }} </td>




                                <td><span class="label label-info label-mini" @if($rs->status=="New") style="background-color: forestgreen"
                                        @elseif($rs->status=="Accepted") style="background-color: yellow"
                                          @elseif($rs->status=="Cancelled") style="background-color: Red"
                                          @elseif($rs->status=="Completed") style="background-color: deepskyblue"
                                        @endif>{{ $rs->status }}</span></td>
                                <td>

                                    <a href="{{route('admin_reservation_show', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100 width=1200, height=700')">
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button>
                                    </a>
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
