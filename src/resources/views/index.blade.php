@extends('layouts.app')

@section('content')
<div class="container-fluid">

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
          <div class="card-icon">
            <i class="material-icons">local_hotel</i>
          </div>
          <p class="card-category">Cas Confirmés </p>
          <h3 class="card-title"> {{ $stats['features'][count($stats['features'])-1]['attributes']['Cas_confirmés'] }} </h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <span class="text-warning font-weight-bold">
              <i class="material-icons">add_alert</i>
              {{ $stats['features'][count($stats['features'])-1]['attributes']['Cas_confirmés_par_jour'] }}
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-success card-header-icon">
          <div class="card-icon">
            <i class="material-icons">accessibility</i>
          </div>
          <p class="card-category">Guéris </p>
          <h3 class="card-title">{{ $stats['features'][count($stats['features'])-1]['attributes']['Retablis'] }}</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <span class="text-success font-weight-bold">
              <i class="material-icons">add_alert</i> Nouveau cas
              {{ $stats['features'][count($stats['features'])-1]['attributes']['Rétablis_par_jour'] }}
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-danger card-header-icon">
          <div class="card-icon">
            <i class="material-icons">airline_seat_flat</i>
          </div>
          <p class="card-category">Décès </p>
          <h3 class="card-title">{{ $stats['features'][count($stats['features'])-1]['attributes']['Décédés'] }}</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <span class="text-danger font-weight-bold">
              <i class="material-icons">add_alert</i> Nouveau cas
              {{ $stats['features'][count($stats['features'])-1]['attributes']['Cas_décédés_par_jour'] }}
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-header card-header-info card-header-icon">
          <div class="card-icon">
            <i class="material-icons">directions_run</i>
          </div>
          <p class="card-category">Cas Exclus  </p>
          <h3 class="card-title">{{ $stats['features'][count($stats['features'])-1]['attributes']['Negative_tests']  }}</h3>
        </div>
        <div class="card-footer">
          <div class="stats">
            <span class="text-info font-weight-bold">
              <i class="material-icons">add_alert</i> Nouveau cas
              {{ $stats['features'][count($stats['features'])-1]['attributes']['Negative_tests']  - $stats['features'][count($stats['features'])-2]['attributes']['Negative_tests']  }}
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
    <br>
    <br>
  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom: 30px;" class="card card-chart">
        <div class="card-header card-header-warning">
          <h4 class="card-title">Cumul des cas confirmé​s par jour </h4>
        </div>
        <div class="card-body">
          {!! $confirmedCasesChart->container() !!}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div style="margin-bottom: 30px;" class="card card-chart">
        <div class="card-header card-header-success">
          <h4 class="card-title">Cumul des cas guéris par jour </h4>
        </div>
        <div class="card-body">
          {!! $recoveredCasesChart->container() !!}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div style="margin-bottom: 30px;" class="card card-chart">
        <div class="card-header card-header-danger">
          <h4 class="card-title">Cumul des cas décédés  par jour </h4>
        </div>
        <div class="card-body">
          {!! $deathCasesChart->container() !!}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div style="margin-bottom: 50px;" class="card card-chart">
        <div class="card-header card-header-info">
          <h4 class="card-title">Comparaions des courbes : confirmé​s - guéris - décédés </h4>
        </div>
        <div class="card-body">
          {!! $compareCasesChart->container() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
      <!-- Library for Charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  {!! $confirmedCasesChart->script() !!}
  {!! $recoveredCasesChart->script() !!}
  {!! $deathCasesChart->script() !!}
  {!! $compareCasesChart->script() !!}
@endsection
