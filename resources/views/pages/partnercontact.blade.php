@extends('frontendlayout.main')
@section('main-container')

@if(\Session::has('message'))
      <p class="alert text-info text-center p-2" style=" box-shadow: 0 0 10px 5px rgb(0 187 221 / 35%) ">{!! \Session::get('message') !!}</p>
      @endif
<div class="container-fluid bg-light py-5 mt-0">
  <div class="col-md-6 m-auto text-center">
    <h1 class="h1">Contact Us</h1>
    <p>Proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
  </div>
</div>
<!-- <div id="mapid" style="width:100%;height:300px;"></div> -->
<!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.9736528651256!2d76.99271377473636!3d29.691543535206264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e701a47288a77%3A0x7d955754c0456650!2sMDA%20IT%20Hub%20%7C%20TECHNOLOGIES%20(Website%20Designing%2FMobile%20Apps%2FSoftware%20Company)!5e0!3m2!1sen!2sin!4v1668141383736!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<script src="{{url('assets/js/leaflet.js')}}"></script> -->
<div class="container py-5 mt-0">
  <div class="row py-5" style=" box-shadow:0px 0px 2px 0px grey; border-radius:4px;">
    <form action="{{url('/Addpartner')}}" method="post" class="col-md-9 m-auto" role="form">
        @csrf
      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <label for="inputname">Name</label>
          <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name" required >
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputemail">Email</label>
          <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required >
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputCity">City</label>
          <input type="text" class="form-control mt-1" id="City" name="City" placeholder="City" required >
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputState">State</label>
          <select name="state" id="state" class="form-control" required >
                <option value="">Choose state.....</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
        </div>
      </div>
      <div class="mb-3">
        <label for="inputsubject">Pincode</label>
        <input type="text" class="form-control mt-1" id="subject" name="pincode" placeholder="Pincode" required >
      </div>
      
      <div class="row">
        <div class="col text-end mt-2">
          <button type="submit" class="btn btn-success btn-lg px-3">Let's Talk</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection