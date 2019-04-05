@extends('layouts.app')

    <!--extend template layout and add respective content--> 

@section('content')
  <div class="container py-4">
    <h1>About</h1>
    <div class="card-head py-2 bg-secondary">
      <img src="/img/engine_logo.png" alt="Brand logo" style="max-width: 10%; padding-left:1%">
    </div>
    <div class="card-body bg-secondary">
        <a class="text-white lead">SkyEngine is a flight search website that searches for deals across multiple websites
        and shows you the results in one place. For example, if you wanted to find a cheap
        flight from New York City to London, you could sit down and check American Airlines
        and then British Airways and then Iceland Air and then... or you could just head to
        our website, which will check hundreds of airlines at once and show you
        which one is the cheapest.
        <br><br>
        It really is that simple! By heading to SkyEngine, you're practically guaranteed
        to find a cheaper flight than if you'd searched manually, and you'll save so much time
        through doing so, too.</a>
    </div>
  </div>

@endsection
