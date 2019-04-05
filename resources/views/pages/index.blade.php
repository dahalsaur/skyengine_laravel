@extends('layouts.app')

  <!--extend template layout and add respective content-->

@section('content')
  <div class="gtco-container" style="background: url('/img/airplane.png'); background-size: cover; padding: 1%">
  <div class="row">






    {{-- {!! Form::open(['route'=>'flight.search']) !!}

    <div class="form-group {{ $errors->has('from') ? 'has-error' : '' }}">
    {!! Form::label('From') !!}
    {!! Form::text('from', old('from'), ['class'=>'form-control', 'placeholder'=>'Enter departure place']) !!}
    <span class="text-danger">{{ $errors->first('from') }}</span>
    </div>

    <div class="form-group {{ $errors->has('to') ? 'has-error' : '' }}">
    {!! Form::label('To') !!}
    {!! Form::text('to', old('to'), ['class'=>'form-control', 'placeholder'=>'Enter destination place']) !!}
    <span class="text-danger">{{ $errors->first('to') }}</span>
    </div>

    <div class="form-group {{ $errors->has('departure_date') ? 'has-error' : '' }}">
    {!! Form::label('Departure date:') !!}
    {!! Form::date('departure_date', old('departure_date'), ['class'=>'form-control', 'placeholder'=>'Enter departure date']) !!}
    <span class="text-danger">{{ $errors->first('departure_date') }}</span>
    </div>

    <div class="form-group {{ $errors->has('return_date') ? 'has-error' : '' }}">
    {!! Form::label('Return date:') !!}
    {!! Form::date('return_date', old('return_date'), ['class'=>'form-control', 'placeholder'=>'Enter return date']) !!}
    <span class="text-danger">{{ $errors->first('return_date') }}</span>
    </div>

    <div class="form-group {{ $errors->has('passenger_number') ? 'has-error' : '' }}">
    {!! Form::label('Number of passengers:') !!}
    {!! Form::number('passenger_number', old('passenger_number'), ['class'=>'form-control', 'placeholder'=>'Enter passenger_number']) !!}
    <span class="text-danger">{{ $errors->first('passenger_number') }}</span>
    </div>

    <div class="form-group">
    <button class="btn btn-success btn-block font-weight-bold">Search Flights</button>
    </div>

    {!! Form::close() !!} --}}







      <div class="col-md-4 text-left">
            <div class="form-wrap">
              <div class="tab">
                <div class="tab-content">
                  <div class="tab-content-inner active" data-content="signup" style="background-color: orange; padding: 2% 5% 2% 5%; margin:0% 1% 0% 5%">
                    <h3 class="font-weight-bold">Book Your Trip</h3>
                    <form action="/search_results" type="GET">
                    {{-- {{ Form::open(['route' => 'search_results', 'method' => 'GET'])}} --}}
                      <div class="row form-group">
                        <div class="col-md-12">
                          <label for="fullname">From</label>
                          <input type="text" id="fullname" class="form-control" name="from" required>
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
                          <input type="submit" class="btn btn-primary btn-block font-weight-bold" value="Search Flights">
                          {{-- {{ Form::submit('Search Flights') }} --}}
                        </div>
                      </div>
                    </form>
                    {{-- {{ Form::close() }} --}}
                  </div>


                </div>
              </div>
          </div>


      </div>
      <div class="col-md-8 text-center lead font-weight-bold" style="padding-top: 7%">
        <h1 class="text-white">SkyEngine,</h1>
        <h2 class="text-dark">a powerful flight search engine</h2>
      </div>

      </div>
  </div>
  </div>



@endsection
