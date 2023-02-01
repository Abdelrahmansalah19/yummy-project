@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@extends('front.layouts.app')
@section('content')


<!-- ======= Book A Table Section ======= -->
<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <br>
        <h2>Book A Table</h2>
        <p>Book <span>Your Stay</span> With Us</p>
      </div>

      <div class="row g-0">

        <div class="col-lg-4 reservation-img" style="background-image: url({{asset('front')}}/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
            <form action="{{url('/books')}}" method="POST"  class="php-email-form"  >
                @csrf
                @method("POST")
                <div class="row gy-4">
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="name" class="form-control"  placeholder="Your Name" required data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="email"  placeholder="Your Email" required data-msg="Please enter a valid email">
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input type="number" class="form-control" name="phone"  placeholder="Your Phone" required data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" name="date" class="form-control"  placeholder="Date"  required data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input type="text" class="form-control" name="time"  placeholder="Time" required data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <input type="number" class="form-control" name="people"  placeholder="Number of people" required  data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit">Book a Table</button>
                </div>
              </form>

      </div>

    </div>
  </section>
  <!-- End Book A Table Section -->
  @endsection
