@extends('frontendlayout.main')
@section('main-container')
@if(\Session::has('message'))
      <p class="alert text-info text-center p-2 mt-3" style=" box-shadow: 0 0 10px 5px rgb(0 187 221 / 35%) ">{!! \Session::get('message') !!}</p>
      @endif
<div class="container-fluid bg-light py-5">
  <div class="col-md-6 m-auto text-center">
    <h1 class="h1">Contact Us</h1>
    <p>Proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.</p>
  </div>
</div>
<!-- <div id="mapid" style="width:100%;height:300px;"></div> -->
<iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3465.9736528651256!2d76.99271377473636!3d29.691543535206264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e701a47288a77%3A0x7d955754c0456650!2sMDA%20IT%20Hub%20%7C%20TECHNOLOGIES%20(Website%20Designing%2FMobile%20Apps%2FSoftware%20Company)!5e0!3m2!1sen!2sin!4v1668141383736!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<script src="{{url('assets/js/leaflet.js')}}"></script>
<div class="container py-5">
  <div class="row py-5">
    <form action="{{url('/Addcontact')}}" method="post" class="col-md-9 m-auto" role="form">
        @csrf
      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <label for="inputname">Name</label>
          <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="inputemail">Email</label>
          <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="inputsubject">Phone</label>
        <input type="tel" class="form-control mt-1" id="subject" name="phone" placeholder="phone" required>
      </div>
      <div class="mb-3">
        <label for="inputmessage">Message</label>
        <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8" required></textarea>
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