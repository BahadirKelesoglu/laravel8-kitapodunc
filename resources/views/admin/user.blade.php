@extends('layouts.admin')

@section('title', 'Users List')



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
                            <h4><i class="fa fa-angle-right"></i> Users</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th><i class="fa fa-image"></i> Image</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Name</th>
                                <th><i class="fa fa-bookmark"></i> Email</th>
                                <th><i class=" fa fa-edit"></i> Phone</th>
                                <th><i class=" fa fa-edit"></i> Address</th>
                                <th><i class=" fa fa-edit"></i> Roles</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>
                                    @if($rs->profile_photo_path)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}"
                                             height="50" style="border-radius: 10px;" alt="">
                                        @endif

                                </td>
                                <td>{{ $rs->name }} </td>
                                <td>{{ $rs->email }} </td>
                                <td>{{ $rs->phone }} </td>
                                <td>{{$rs->address}}</td>
                                <td>
                                    @foreach($rs->roles as $row)
                                        {{$row->name}}
                                    @endforeach
                                    <a href="{{route('admin_user_roles',['id'=>$rs->id])}}"
                                       onclick="return !window.open(this.href, '', 'top=50 left=100 width=800, height=600')">
                                        <i class="fa fa-plus-circle"></i>
                                    </a>
                                </td>
                                <td>

                                    <a href="{{route('admin_user_edit', ['id' => $rs->id])}}">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{route('admin_user_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div><!-- /content-panel -->
                    @include('home.message')
                </div><!-- /col-md-12 -->
            </div><!-- /row -->





        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
