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
                                                <a href="{{url('/bloges')}}">
                                                <button type="button" class="btn btn-success waves-effect waves-light">Add More</button>
                                                </a>
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
                                                       <th>Doctor</th>
                                                       <th>Description</th>
                                                        <th>Edit</th>
                                                        <!-- <th>View</th> -->
                                                        <!-- <th>Benefit</th> -->
                                                        <th>Delete</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                @foreach($blog as $val)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>
                                                                <img src="{{url('blog',$val->Photo)}}" width="50" alt="product">
                                                            </td>
                                                            <td>{{$val->Title}}</td>
                                                            <td>{{$val->Doctor}}</td>
                                                            <th>
                                                                <textarea name="" id="" cols="30" rows="6">{{$val->Description}}</textarea>
                                                            </th>
                                                            <td>
                                                                <a href="{{route('Editblog',[$val->id])}}">
                                                                    <i class="ion ion-ios-add-circle text-primary" style="font-size:28px;"></i>
                                                                </a>
                                                            </td>    
                                                            <td>
                                                                <a href="{{route('Deleteblog',[$val->id])}}" onclick="return confirm('Are you sure')">
                                                                    <i class="ion ion-md-backspace text-danger" style="font-size:28px;"></i>
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