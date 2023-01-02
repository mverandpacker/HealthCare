@extends('layout.main')
@section('main-container')

<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Product Details</h4>
                                     <h4 class="text-right">   
                                                <!-- <a href="{{url('/custproduct')}}">
                                                <button type="button" class="btn btn-success waves-effect waves-light">Add More</button>
                                                </a> -->
                                                </h4>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if(\Session::has('message'))
      <p class="alert text-info text-center p-2" style=" box-shadow: 0 0 10px 5px rgb(0 187 221 / 35%) ">{!! \Session::get('message') !!}</p>
      @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border card-primary">

                                    <div class="card-header border-primary bg-transparent pb-0">
                                        <h3 class="card-title text-primary "> Details</h3>
                                   
                                    </div>
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <div class="row py-4">
                                                    <div class="col-lg-6" >
                                                        <div class="text-center" style="box-shadow:0px 0px 4px 0px green;">
                                                        <img src="{{url('product',$viewProduct[0]->Photo)}}" width="100%" alt="product">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 py-3 ">
                                                        <div>
                                                            <p><b>Tittle :</b> {{$viewProduct[0]->Title}}</p>
                                                            <p><b>Price :</b> {{$viewProduct[0]->Price}}</p>
                                                            <p><b>Amaazon Link :</b> {{$viewProduct[0]->Amaazon_Link}}</p>
                                                            <p><b>Flipkart Link :</b> {{$viewProduct[0]->Flipkart_Link}}</p>
                                                            
                                                            
                                                            <p><b>Description :</b> {{$viewProduct[0]->Description}}</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

           

            </div>

@endsection