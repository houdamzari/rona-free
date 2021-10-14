@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom: 50px;" class="card card-chart">
        <div class="card-header card-header-primary">
          <h4 style="margin-left: 450px;"  class="card-title">Nombre des cas confirmés par jour </h4>
        </div>
        <div class="card-body">
          {!! $confirmedCasesByDayChart->container() !!}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div style="margin-bottom: 50px;" class="card card-chart">
        <div class="card-header card-header-primary">
          <h4 style="margin-left: 450px;"  class="card-title">Nombre des cas rétablis par jour </h4>
        </div>
        <div class="card-body">
          {!! $recoveredCasesByDayChart->container() !!}
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div style="margin-bottom: 50px;" class="card card-chart">
        <div class="card-header card-header-primary">
          <h4 style="margin-left: 450px;"  class="card-title">Nombre des cas décédés par jour </h4>
        </div>
        <div class="card-body">
          {!! $deathCasesByDayChart->container() !!}
        </div>
      </div>
    </div>

  </div>
</div>
@endsection

@section('scripts')
      <!-- Library for Charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  {!! $confirmedCasesByDayChart->script() !!}
  {!! $recoveredCasesByDayChart->script() !!}
  {!! $deathCasesByDayChart->script() !!}
@endsection
