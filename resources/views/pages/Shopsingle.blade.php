@extends('frontendlayout.main')
@section('main-container')
}
<section class="bg-light">
  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-5 mt-5">
        <div class="card mb-3"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image" id="product-detail"></div>
        <div class="row">
          <div class="col-1 align-self-center"><a href="#multi-item-example" role="button" data-bs-slide="prev"><i class="text-dark fas fa-chevron-left"></i> <span class="sr-only">Previous</span></a></div>
          <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
            <div class="carousel-inner product-links-wap" role="listbox">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                  <div class="col-4"><a href="https://www.free-css.com/free-css-templates"><img class="card-img img-fluid" src="{{url('product',$product->Photo)}}" alt="website template image"></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1 align-self-center"><a href="#multi-item-example" role="button" data-bs-slide="next"><i class="text-dark fas fa-chevron-right"></i> <span class="sr-only">Next</span></a></div>
        </div>
      </div>
      <div class="col-lg-7 mt-5">
        <div class="card">
          <div class="card-body">
            <h1 class="h2">{{$product->Title}}</h1>
            <p class="h3 py-2"> ₹ {{$product->Price}}</p>
            <!-- <p class="py-2"><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-secondary"></i> <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span></p> -->
            <!-- <ul class="list-inline">
              <li class="list-inline-item">
                <h6>Brand:</h6>
              </li>
              <li class="list-inline-item">
                <p class="text-muted"><strong>Easy Wear</strong></p>
              </li>
            </ul> -->
            <h6>Description:</h6>
            <p >{{$product->Description}}</p>
            <!-- <ul class="list-inline">
              <li class="list-inline-item">
                <h6>Avaliable Color :</h6>
              </li>
              <li class="list-inline-item">
                <p class="text-muted"><strong>White / Black</strong></p>
              </li>
            </ul> -->
            <!-- <h6>Specification:</h6>
            <ul class="list-unstyled pb-3">
              <li>Lorem ipsum dolor sit</li>
              <li>Amet, consectetur</li>
              <li>Adipiscing elit,set</li>
              <li>Duis aute irure</li>
              <li>Ut enim ad minim</li>
              <li>Dolore magna aliqua</li>
              <li>Excepteur sint</li>
            </ul> -->
            <!-- <form action="#" method="post">
              <input type="hidden" name="product-title" value="Activewear">
              <div class="row">
                <div class="col-auto">
                  <ul class="list-inline pb-3">
                    <li class="list-inline-item">Size :
                      <input type="hidden" name="product-size" id="product-size" value="S">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                    <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <ul class="list-inline pb-3">
                    <li class="list-inline-item text-right">Quantity
                      <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                    </li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                    <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                    <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                  </ul>
                </div>
              </div>
              <div class="row pb-3">
                <div class="col d-grid">
                  <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                </div>
                <div class="col d-grid">
                  <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                </div>
              </div>
            </form> -->
      
          <div>
            <a href="{{$product->Amaazon_Link}}" class="btn">
            <img src="{{url('product/amazon.png')}}" width="200" alt="amazon"></a>
            <a href="{{$product->Flipkart_Link}}" class="btn"><img src="{{url('product/flipkart.png')}}" width="200" alt="flipkart"></a>
          </div>
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row text-left p-2 pb-3">
      <h4>Related Products</h4>
    </div>
    <div id="carousel-related-product">
        @foreach($related as $value)
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="{{url('product',$value->Photo)}}" alt="website template image" class="card-img rounded-0 img-fluid">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
              <!-- <ul class="list-unstyled">
                <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
              </ul> -->
            </div>
          </div>
         
          <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">{{$value->Title}}</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
              <!-- <li>M/L/X/XL</li> -->
              <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
            </ul>
            <ul class="list-unstyled d-flex justify-content-center mb-1">
              <!-- <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i></li> -->
            </ul>
            <p class="text-center mb-0">₹ {{$value->Price}}</p>
          </div>
        </div>
        
    </div>
    @endforeach
      <!-- <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_09.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
              <ul class="list-unstyled">
                <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">White Shirt</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
              <li>M/L/X/XL</li>
              <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
            </ul>
            <ul class="list-unstyled d-flex justify-content-center mb-1">
              <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
            </ul>
            <p class="text-center mb-0">$25.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_10.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
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
              <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i></li>
            </ul>
            <p class="text-center mb-0">$45.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_11.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
              <ul class="list-unstyled">
                <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="far fa-eye"></i></a></li>
                <li><a class="btn btn-success text-white mt-2" href="shop-single.html"><i class="fas fa-cart-plus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-body"><a href="shop-single.html" class="h3 text-decoration-none">Black Fashion</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
              <li>M/L/X/XL</li>
              <li class="pt-2"><span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span> <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span></li>
            </ul>
            <ul class="list-unstyled d-flex justify-content-center mb-1">
              <li><i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-warning fa fa-star"></i> <i class="text-muted fa fa-star"></i> <i class="text-muted fa fa-star"></i></li>
            </ul>
            <p class="text-center mb-0">$60.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
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
            <p class="text-center mb-0">$80.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
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
            <p class="text-center mb-0">$110.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_10.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
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
            <p class="text-center mb-0">$125.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_11.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
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
            <p class="text-center mb-0">$160.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
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
            <p class="text-center mb-0">$180.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
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
            <p class="text-center mb-0">$220.00</p>
          </div>
        </div>
      </div>
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_10.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
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
      <div class="p-2 pb-3">
        <div class="product-wap card rounded-0">
          <div class="card rounded-0"><img src="../assets/img/shop_11.jpg" alt="website template image" class="card-img rounded-0 img-fluid">
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
            <p class="text-center mb-0">$300.00</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

@endsection