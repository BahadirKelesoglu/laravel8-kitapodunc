@extends('layouts.admin')

@section('title', 'Product List')



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
                            <h4><i class="fa fa-angle-right"></i> Products</h4>
                            <hr>
                            <thead>
                            <tr>
                                <th><i class="fa fa-bullhorn"></i> ID</th>
                                <th class="hidden-phone"><i class="fa fa-question-circle"></i> Category</th>
                                <th><i class="fa fa-bookmark"></i> Title</th>
                                <th><i class=" fa fa-edit"></i> Quantity</th>
                                <th><i class=" fa fa-edit"></i> Price</th>
                                <th><i class=" fa fa-edit"></i> Image</th>
                                <th><i class=" fa fa-edit"></i> Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td class="hidden-phone">{{ $rs->category_id }}</td>
                                <td>{{ $rs->title }} </td>
                                <td>{{ $rs->quantity }} </td>
                                <td>{{ $rs->price }} </td>
                                <td>{{ $rs->image }} </td>
                                <td>{{ $rs->status }} </td>






                                <td><span class="label label-info label-mini" @if($rs->status=="True") style="background-color: forestgreen" @endif>{{ $rs->status }}</span></td>
                                <td>

                                    <a href="{{route('admin_product_edit', ['id' => $rs->id])}}">  <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                    <a href="{{route('admin_product_delete', ['id' => $rs->id])}}" onclick="return confirm('Are you sure to delete?')"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>

                        </table>

                    </div><!-- /content-panel -->
                    <br>

                    <a href="{{route('admin_product_add')}}"><button type="button" class="btn btn-success">Add New Product</button></a>
                </div><!-- /col-md-12 -->
            </div><!-- /row -->





        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection
