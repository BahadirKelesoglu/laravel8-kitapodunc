<!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">

        <div class="row">
            <div class="col-lg-9 main-chart">




                </div><!-- /row -->

            </div><!-- /col-lg-9 END SECTION MIDDLE -->


            <!-- **********************************************************************************************************************************************************
            RIGHT SIDEBAR CONTENT
            *********************************************************************************************************************************************************** -->

            <div class="col-lg-3 ds col-lg-offset-9">
                <!--COMPLETED ACTIONS DONUTS CHART-->
                <h3>New Reservations</h3>

                <!-- First Action -->
                @foreach($datalist as $rs)
                    @if($rs->status == 'New')
                <div class="desc">
                    <div class="thumb">
                        <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                    </div>
                    <div class="details">
                        <p><muted>{{date('Y-m-d')}}</muted><br/>
                            <strong>Book Id: {{$rs->id}}</strong> <br/> {{$rs->bookdate}} - {{$rs->returndate}}<br/>
                        </p>
                    </div>
                </div>
                    @endif
            @endforeach




