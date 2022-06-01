@extends('layouts.dashboard')


@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ ('Dashboard') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            Benvenuto {{Auth::user()->name}} <!--metodo per richiamare il nome corretto dell'utente-->
            {{ ('hai effettuato il login!') }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection