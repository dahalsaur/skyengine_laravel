@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
                <div class="card-body">
                      <h3>Upcoming flights</h3>
                      ......
                </div>
                <div class="card-body">
                      <h3>Saved flight</h3>
                      ......<br><br>
                      <a href="/" class="btn btn-primary"> Book your saved flights today</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
