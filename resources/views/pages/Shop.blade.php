@extends('frontendlayout.main')
@section('main-container')

<div class="container py-5">
  <div class="row">
    <!-- <div class="col-lg-3">
      <h1 class="h2 pb-4">Categories</h1>
      <ul class="list-unstyled templatemo-accordion">
        <li class="pb-3"><a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="https://www.free-css.com/free-css-templates">Gender <i class="fa fa-fw fa-chevron-circle-down mt-1"></i></a>
          <ul class="collapse show list-unstyled pl-3">
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Men</a></li>
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Women</a></li>
          </ul>
        </li>
        <li class="pb-3"><a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="https://www.free-css.com/free-css-templates">Sale <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i></a>
          <ul id="collapseTwo" class="collapse list-unstyled pl-3">
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Sport</a></li>
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Luxury</a></li>
          </ul>
        </li>
        <li class="pb-3"><a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="https://www.free-css.com/free-css-templates">Product <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i></a>
          <ul id="collapseThree" class="collapse list-unstyled pl-3">
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Bag</a></li>
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Sweather</a></li>
            <li><a class="text-decoration-none" href="https://www.free-css.com/free-css-templates">Sunglass</a></li>
          </ul>
        </li>
      </ul>
    </div> -->
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-6">
          <ul class="list-inline shop-top-menu pb-3 pt-1">
            <li class="list-inline-item"><a class="h3 text-dark text-decoration-none mr-3" href="https://www.free-css.com/free-css-templates">All</a></li>
            <li class="list-inline-item"><a class="h3 text-dark text-decoration-none mr-3" href="https://www.free-css.com/free-css-templates">Product</a></li>
            <!-- <li class="list-inline-item"><a class="h3 text-dark text-decoration-none" href="https://www.free-css.com/free-css-templates">Women's</a></li> -->
          </ul>
        </div>
        <!-- <div class="col-md-6 pb-4">
          <div class="d-flex">
            <select class="form-control">
              <option>Featured</option>
              <option>A to Z</option>
              <option>Item</option>
            </select>
          </div>
        </div> -->
      </div>
      <div class="row ">
          @foreach($related as $value)
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><a href="{{route('shopsingle',[$value->id])}}"><img src="{{url('product',$value->Photo)}}" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <!-- <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul> -->
              </div>
              </a>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">{{$value->Title}}</a>
              <!-- <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul> -->
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <!-- <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li> -->
              </ul>
              <p class="text-center mb-0"> ₹ {{$value->Price}}</p>
            </div>
          </div>
        </div>
        @endforeach
        <!-- <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_02.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_03.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_04.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_05.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_06.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_07.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_08.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 product-wap rounded-0">
            <div class="card rounded-0"><img src="../assets/img/shop_09.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
              <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                  <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
              <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li>M/L/X/XL</li>
                <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
              </ul>
              <ul class="list-unstyled d-flex justify-content-center mb-1">
                <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
              </ul>
              <p class="text-center mb-0">$250.00</p>
            </div>
          </div>
        </div> -->
      </div>
      <!-- <div div="row">
        <ul class="pagination pagination-lg justify-content-end">
          <li class="page-item disabled"><a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="https://www.free-css.com/free-css-templates" tabindex="-1">1</a></li>
          <li class="page-item"><a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="https://www.free-css.com/free-css-templates">2</a></li>
          <li class="page-item"><a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="https://www.free-css.com/free-css-templates">3</a></li>
        </ul>
      </div> -->
    </div>
  </div>
</div>
<section class="bg-light py-5">
  <div class="container my-4">
    <div class="row text-center py-3">
      <div class="col-lg-6 m-auto">
        <h1 class="h1">Our Brands</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet.</p>
      </div>
      <div class="col-lg-9 m-auto tempaltemo-carousel">
        <div class="row d-flex flex-row">
          <div class="col-1 align-self-center"><a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev"><i class="text-light fas fa-chevron-left"></i></a></div>
          <div class="col">
            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
              <div class="carousel-inner product-links-wap" role="listbox">
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_01.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_02.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_03.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_04.png" alt="website template image"></a></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_01.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_02.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_03.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_04.png" alt="website template image"></a></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row">
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_01.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_02.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_03.png" alt="website template image"></a></div>
                    <div class="col-3 p-md-5"><a href="https://www.free-css.com/free-css-templates"><img class="img-fluid brand-img" src="../assets/img/brand_04.png" alt="website template image"></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1 align-self-center"><a class="h1" href="#multi-item-example" role="button" data-bs-slide="next"><i class="text-light fas fa-chevron-right"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection