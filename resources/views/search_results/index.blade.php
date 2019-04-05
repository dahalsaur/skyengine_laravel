{{-- // Store variables passed via query strings to auto fill the form.
$from = Request::get['from'];
$to = Request::get['to'];
$departure_date = Request::get['departure_date'];
$return_date = Request::get['return_date'];
$passenger_number = Request::get['passenger_number']; --}}

@extends('layouts.app')

@section('content')




  <div class="row">


      <div class="col-md-4 text-left" style="background-color: purple">
            <div class="form-wrap">
              <div class="tab">
                <div class="tab-content" >
                  <div class="tab-content-inner active position-fixed" data-content="signup" style="background-color: orange; padding: 1% 2% 1% 2%;  margin: 0% 5% 0% 5%">
                    <h3 class="font-weight-bold">Book Your Trip</h3>
                    <form action="/search_results" type="get">
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">From</label>
                          <input type="text" id="fullname" class="form-control" value="" name="from" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">To</label>
                          <input type="text" id="fullname" class="form-control" name="to" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="date-start">Departure Date</label>
                          <input type="date" id="date-start" class="form-control" name="departure_date" required>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="date-start">Return Date</label>
                          <input type="date" id="date-start" class="form-control" name="return_date" required disabled>
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">Number of Passengers</label>
                          <input type="number" value="1" id="fullname" class="form-control" min="1" max="9" name="passenger_number" required>
                        </div>
                      </div>

                      <div class="row form-group">
                        <div class="col-md-12">
                          <input type="submit" class="btn btn-primary btn-block font-weight-bold" value="Search Again">
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </div>
          </div>


      </div>

      <div class="col-md-8" style="padding: 3%; ">
        @if(count($search_results) > 0)
          @foreach($search_results as $search_result)
            <div class="well bg-dark text-white lead">
              <p1> {{$search_result->from}} </p1> ---> <p1> {{$search_result->to}} </p1> <br>
              <p1> {{$search_result->departure_time}} </p1> ---> <p1> {{$search_result->arrival_time}} </p1> <br>
              <p1> {{$search_result->price}} </p1><br>
              <button class="btn btn-primary">Select</button>
            </div>
            <br>
          @endforeach
        @else <!--  if there is no entry in the search_results table   -->
          <h2>We couldn't find any flights on this date.<br> Please try on different dates and/or airports.</h2>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

        @endif
      </div>


      </div>
  </div>

@endsection
