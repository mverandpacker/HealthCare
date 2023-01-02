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
                                    <h4 class="page-title">All Sliders</h4>
                                     <h4 class="text-right">   
                                                <a href="{{url('/sliders')}}">
                                                <button type="button" class="btn btn-success waves-effect waves-light">Add More</button>
                                                </a>
                                                </h4>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-border card-primary">

                                    <div class="card-header border-primary bg-transparent pb-0">
                                        <h3 class="card-title text-primary "> Sliders</h3>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-small-font table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Photo</th>
                                                        <th>Tittle</th>
                                                        <th>SubTittle</th>
                                                        <th>Link</th>
                                                        <th>Description</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($slider as $value)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>
                                                                <img src="{{url('slider',$value->Photo)}}" width="50" alt="slides">
                                                            </td>
                                                            <td>{{$value->Tittle}}</td>
                                                            <td>{{$value->SubTittle}}</td>
                                                            <td>{{$value->Link}}</td>
                                                            <td> 
                                                                <textarea class="form-control" id="ccomment" name="disc" required>{{$value->Description}}</textarea>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('deleteslide',[$value->id])}}" onclick="return confirm('Are you sure')" >
                                                                <button type="button" class="btn btn-icon waves-effect waves-light btn-danger" > <i class="fas fa-times"></i> 
                                                            </button>
                                                                </a>
                                                            </td>
                                                        </tr>   
                                                        @endforeach
                                                                                            </tbody>
                                                </table>
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