@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div style="margin-bottom:50px;" class="card">
        <div class="card-header card-header-primary">
          <h4 style="margin-left: 300px;" class="card-title ">
            Répartition des cas par Région (Dernière mise à jour : {{ date('d/m/Y', $stats['features'][count($stats['features'])-1]['attributes']['Date']/1000) }})
             <br> {{ date('d/m/Y', $stats['features'][count($stats['features'])-1]['attributes']['Date']/1000) }})
          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" data-order='[[ 2, "desc" ]]'>
              <thead class=" text-primary">
                <th>
                  Code Région
                </th>
                <th>
                  Nom Région
                </th>
                <th>
                  Cas confirmé​s
                </th>
                {{-- <th>
                  Rétablis
                </th>
                <th>
                  Décédés
                </th> --}}
              </thead>
              <tbody>
                @foreach ($regions['features'] as $region)
                  <tr>
                    <td>
                      {{$region['attributes']['OBJECTID'] ?? ''}}
                    </td>
                    <td>
                      {{$region['attributes']['Nom_Région_FR']}} <br>
                    </td>
                    <td class="text-primary">
                      {{$region['attributes']['Cases'] == null ? '0' : $region['attributes']['Cases'] }}
                    </td>
                   {{--  <td class="text-success">
                      {{$region['attributes']['Recoveries'] == null ? '0' : $region['attributes']['Recoveries'] }}
                    </td>
                    <td class="text-danger">
                      {{$region['attributes']['Deaths'] == null ? '0' : $region['attributes']['Deaths'] }}
                    </td> --}}
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div style="margin-bottom: 50px;" class="col-md-12">
      <div class="card card-chart">
        <div class="card-header card-header-primary">
          <h4 style="margin-left:400px;" class="card-title">Pourcentage de la répartition des cas par Région </h4>
        </div>
        <div class="card-body">
          {!! $casesByRegionChart->container() !!}
        </div>
      </div>
    </div>
    <div style="margin-bottom: 50px;" class="col-md-12">
      <div class="card card-chart">
        <div class="card-header card-header-primary">
          <h4 style="margin-left: 550px;" class="card-title">Nombre des cas par région </h4>
        </div>
        <div class="card-body">
          {!! $allCasesByRegionChart->container() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
      <!-- Library for Charts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
  {!! $casesByRegionChart->script() !!}
  {!! $allCasesByRegionChart->script() !!}
@endsection
