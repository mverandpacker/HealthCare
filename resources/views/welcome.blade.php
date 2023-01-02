@extends('frontendlayout.main')
@section('main-container')


<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
    <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @foreach($slider as $slides)
    <div class="carousel-item @if ($loop->first) active @endif">
      <div class="container">
        <div class="row p-5">
          <div class="mx-auto col-md-8 col-lg-6 order-lg-last"><img class="img-fluid" src="{{url('slider',$slides->Photo)}}" alt="website template image"></div>
          <div class="col-lg-6 mb-0 d-flex align-items-center">
            <div class="text-align-left align-self-center">
              <h1 class="h1 text-success">{{$slides->Tittle}}</h1>
              <h3 class="h2">{{$slides->SubTittle}}</h3>
              <p>{{$slides->Description}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
   @endforeach
  
  </div>
  <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev"><i class="fas fa-chevron-left"></i></a> <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next"><i class="fas fa-chevron-right"></i></a></div>
<section class="container py-5" >
  <div class="row text-center pt-3">
    <div class="col-lg-6 m-auto">
      <h1 class="h1">Categories of The Month</h1>
      <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="row">
    @foreach($product as $products)
    <div class="col-12 col-md-4 p-5 mt-3"><a href="{{route('shopsingle',[$products->id])}}"><img src="{{url('product',$products->Photo)}}" alt="website template image" class="rounded-circle img-fluid border"></a>
      <h5 class="text-center mt-3 mb-3">{{$products->Title}}</h5>
      <p class="text-center"><a class="btn btn-success" href="{{route('shopsingle',[$products->id])}}">Go Shop</a></p>
    </div>
    @endforeach
 
  </div>
</section>

<section class="">
  <div class="container py-5">
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Featured Product</h1>
        <p></p>
      </div>
    </div>
    <div class="row">
    @foreach($product as $products)
    <div class=" col-lg-12 mb-4">
      <div class="row">
        <div class=" col-lg-6 mb-4 mx-auto">
        <div class=" h-100 " style="box-shadow:none;">
          <a href="?">
            <img src="{{url('product',$products->Photo)}}" class="card-img-top" alt="website template image">
          </a>
        </div>
        </div>

        <div class=" col-lg-12 mb-4">
          <div class="card-body text-center" >
          
            <a href="?" class="h2 text-decoration-none text-dark ">{{$products->Title}}</a>
            <!-- <p class="card-text">Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.</p> -->
            <p class="text-success fw-bold mt-3">₹ {{$products->Price}}<span class="mx-2">
              <a href="{{route('shopsingle',[$products->id])}}" class=" btn mt-2  btn-outline-success btn-sm text-dark ">View Details</a>
            </span></p>
          </div>
          </div>

          </div>
     
      </div>
    </div>
    <h3 class="text-center">How Its Benefits</h3>
    <div class="row " style="margin-top: 100px; margin-bottom:150px;">
        <div class="col-md-4 mb-5">
          <div class="mx-auto" style="width:250px; height:250px;">
          <img src="{{url('benefit',$products->Benefit_photo)}}" width="100%" height="100%" alt="benefit">
        </div>
        <h5 class="text-center mt-4">{{$products->Benefit_tittle}}</h5>
        <p class="text-center mt-3">{{$products->Benefit_Description}}</p>
        </div>
        <div class="col-md-4 mb-5">
          <div class=" mx-auto" style="width:250px; height:250px;">
          <img src="{{url('benefit',$products->Benefit_photo_2)}}" width="100%" height="100%" alt="benefit">
          </div>
          <h5 class="text-center mt-4">{{$products->Benefit_tittle_2}}</h5>
          <p class="text-center mt-3">{{$products->Benefit_Description_2}}</p>
  
        </div>
        <div class="col-md-4 mb-5">
          <div class=" mx-auto " style="width:250px; height:250px;">
          <img src="{{url('benefit',$products->Benefit_photo_3)}}" width="100%" height="100%" alt="benefit">
        </div>
        <h5 class="text-center mt-4">{{$products->Benefit_tittle_3	}}</h5>
        <p class="text-center mt-3">{{$products->Benefit_Description_3}}</p>

        </div>
    </div>
    @endforeach
  </div>
</section>


<!-- ======================blog section start==================== -->

<section class="">
  <div class="container py-5" >
    <div class="row text-center py-5">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Blogs </h1>
        <p>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
      </div>
    </div>


    <div class="row " >
  @foreach($blog as $bloges)
        <div class="col-md-4  col-12">
          <div class=" text-center" style="height:250px; box-shadow:0px 0px 10px 0px grey; border-radius:4px;">
          <img src="{{url('blog',$bloges->Photo)}}" width="100%" height="100%" alt="blog" style="border-radius:4px;">
        </div>
        <h5 class="text-center mt-3">{{$bloges->Title}}</h5>
        <h4 class="mt-3 text-success" style="font-size:20px;">{{$bloges->Doctor}}</h4>
        <p class="text-center mt-3">{{$bloges->Description}}</p>
        </div>
        
        @endforeach
    </div>
  </div>
</section>


@endsection