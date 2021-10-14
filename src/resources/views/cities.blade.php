@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">
            Répartition des cas par ville
          </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" data-order='[[ 2, "desc" ]]'>
              <thead class=" text-primary">
                <th>
                  Code ville
                </th>
                <th>
                  Nom ville
                </th>
                <th>
                  Cas confirmé​s
                </th>
              </thead>
              <tbody>
                @foreach ($cities['features'] as $city)
                  <tr>
                    <td>
                      {{$city['attributes']['VILLES_ID']}}
                    </td>
                    <td>
                      {{$city['attributes']['NOM']}}
                    </td>
                    <td class="text-primary">
                      {{$city['attributes']['cas_confir'] == null ? '0' : $city['attributes']['cas_confir'] }}
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
