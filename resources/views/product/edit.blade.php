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
                                    <h4 class="page-title">Update Product</h4>
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
                                        <h3 class="card-title">Product</h3></div>
                                    <div class="card-body">
                                        <div class="form">
                                            <form class="cmxform form-horizontal tasi-form" id="commentForm" method="post" action="{{url('/updateproduct')}}" enctype="multipart/form-data" novalidate="novalidate">
                                            @csrf    
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <div class="form-group row">
                                                    <label for="cname" class="col-form-label col-lg-2">Tittle</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="cname" name="tittle" type="text" value="{{$product->Title}}" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="cemail" class="col-form-label col-lg-2">Price</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="cemail" type="text" name="price" value="{{$product->Price}}" required="" aria-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Photo</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="file" name="photo" value="{{$product->Photo}}">
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ccomment" class="col-form-label col-lg-2">Description</label>
                                                    <div class="col-lg-10">
                                                    <textarea id="editor" name="description" style="height: 300px;">
                                                    {{$product->Description}}
                                                    </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Amazon Link</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="link" name="amazlink" value="{{$product->Amaazon_Link}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Flipkart Link</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="link" name="fliplink" value="{{$product->Flipkart_Link}}">
                                                    </div>
                                                </div>
                                                <div class="p-3" style="box-shadow:0px 0px 2px 0px grey;margin-top:100px; border-radius:4px;">
                                                <h3 class="text-center text-info">Benefit 1</h3>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Title</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="text" name="benefit" value="{{$product->Benefit_tittle}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Photo</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="file" name="benefitPhoto" value="{{$product->Benefit_photo}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ccomment" class="col-form-label col-lg-2">Benefit Description</label>
                                                    <div class="col-lg-10">
                                                    <textarea row="30" cols="60" name="benefitdescription" style="height: 100px;" value="{{$product->Benefit_Description}}">

                                                    </textarea>
                                                    </div>
                                                </div>
                                                 </div>
                                                 <div class="p-3" style="box-shadow:0px 0px 2px 0px grey;margin-top:100px; border-radius:4px;">
                                                <h3 class="text-center text-primary">Benefit 2</h3>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Title 2</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="text" name="benefit1" value="{{$product->Benefit_tittle_2}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Photo 2</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="file" name="benefitPhoto1" value="{{$product->Benefit_photo_2}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ccomment" class="col-form-label col-lg-2">Benefit Description 2</label>
                                                    <div class="col-lg-10">
                                                    <textarea row="30" cols="60" name="benefitdescription1" value="{{$product->Benefit_Description_2}}" style="height: 100px;">
                                                    
                                                    </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-3 mb-5" style="margin-top:100px; box-shadow:0px 0px 2px 0px grey; border-radius:4px;">
                                                    <h3 class="text-center text-success">Benefit 3</h3>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Title 3</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="text" name="benefit3" value="{{$product->Benefit_tittle_3}}" >
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="curl" class="col-form-label col-lg-2">Benefit Photo 3</label>
                                                    <div class="col-lg-10">
                                                        <input class="form-control" id="curl" type="file" name="benefitPhoto3" value="{{$product->Benefit_photo_3}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="ccomment" class="col-form-label col-lg-2">Benefit Description 3</label>
                                                    <div class="col-lg-10">
                                                    <textarea row="30" cols="60" name="benefitdescription3" value="{{$product->Benefit_Description_3}}" style="height: 100px;">

                                                    </textarea>
                                                    </div>
                                                </div>
                                                </div>
                                            
                                             
                                                <div class="form-group row mb-0">
                                                    <div class="offset-lg-2 col-lg-10">
                                                        <input type="submit" class="btn btn-info waves-effect waves-light mr-1" value="Update" />
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