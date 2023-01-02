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
                                    <h4 class="page-title">Blogs</h4>
                                    <div class="page-title-right">
                                        <!-- <ol class="breadcrumb p-0 m-0">
                                            <li class="breadcrumb-item"><a href="#">Moltran</a></li>
                                            <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Validation</li>
                                        </ol> -->
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Update Blog</h3></div>
                                    <div class="card-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="{{url('/Updateblog')}}" enctype="multipart/form-data" novalidate="novalidate">
                                            @csrf    
                                         <input type="hidden" name="id" value="{{$blog->id}}">
                                            <div class="form-group row">
                                                    <label for="cname" class="col-form-label col-lg-2">Tittle</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="cname" name="tittle" value="{{$blog->Title}}" type="text" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cemail" class="col-form-label col-lg-2">Doctor</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="cemail" type="text" value="{{$blog->Doctor}}" name="doctor" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Photo</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="file" value="{{$blog->Photo}}" name="photo">
                                                        
                                                    </div>
                                                </div>
                                               
                                                <div class="form-group row">
                                                    <label for="ccomment" class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                        <textarea  id="editor"  name="description" required>{{$blog->Description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-0">
                                                    <div class="offset-lg-2 col-lg-10">
                                                        <input type="submit" class="btn btn-success waves-effect waves-light mr-1" value="Add" />
                                                        <!-- <button class="btn btn-success waves-effect waves-light mr-1" type="submit">Save</button>
                                                        <button class="btn btn-secondary waves-effect" type="button">Cancel</button> -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- .form -->
                                    </div>
                                    <!-- card-body -->
                                </div>
                                <!-- card -->
                            </div>
                            <!-- col -->

                        </div>
                        <!-- End row -->

                        <!-- Form-validation -->
                    
                        <!-- End row -->

                    </div>
                    <!-- end container-fluid -->

                </div>
                <!-- end content -->

                

          
                        @endsection