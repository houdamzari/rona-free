<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http as Http;

use App\Charts\ConfirmedCasesChart;
use App\Charts\RecoveredCasesChart;
use App\Charts\DeathCasesChart;
use App\Charts\CompareCasesChart;
use App\Charts\CasesByRegionChart;
use App\Charts\ConfirmedCasesByDayChart;
use App\Charts\RecoveredCasesByDayChart;
use App\Charts\DeathCasesByDayChart;
use App\Charts\AllCasesByRegionChart;

class HomeController extends Controller
{

    public function index()
    {

        $url_stats = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/5/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_stats = Http::get($url_stats);
        $stats = $response_stats->json();
        //dd($stats['features']);
        //array_pop($stats['features']);

        $url_regions = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_regions = Http::get($url_regions);
        $regions = $response_regions->json();

        //charts

        $collection = collect($stats['features']);
        $regions_collection = collect($regions['features']);

        //confirmed cases chart

        $confirmedCasesKeys =  $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $confirmedCasesValues =  $collection->pluck('attributes')
            ->pluck('Cas_confirmés');

        $confirmedCasesChart = new ConfirmedCasesChart;
        $confirmedCasesChart->labels($confirmedCasesKeys);
        $confirmedCasesChart->dataset('cas confirmés ', 'line', $confirmedCasesValues)
            ->color('#ff9800');

        //recovered cases chart

        $recoveredCasesKeys =   $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $recoveredCasesValues   =   $collection->pluck('attributes')
            ->pluck('Retablis');

        $recoveredCasesChart = new RecoveredCasesChart;
        $recoveredCasesChart->labels($recoveredCasesKeys);
        $recoveredCasesChart->dataset('guéris ', 'line', $recoveredCasesValues)
            ->color('#4caf50 ');

        //death cases chart

        $deathCasesKeys =   $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $deathCasesValues   =   $collection->pluck('attributes')
            ->pluck('Décédés');

        $deathCasesChart = new DeathCasesChart;
        $deathCasesChart->labels($deathCasesKeys);
        $deathCasesChart->dataset('décès ', 'line', $deathCasesValues)
            ->color('#f44336');

        //compare cases chart

        $compareCasesKeys =   $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $compareCasesChart = new CompareCasesChart;
        $compareCasesChart->labels($compareCasesKeys);
        $compareCasesChart->dataset('cas confirmés ', 'line', $confirmedCasesValues)
            ->color('#ff9800')
            ->backgroundColor('rgba(255, 255, 255, 0.1)');
        $compareCasesChart->dataset('guéris ', 'line', $recoveredCasesValues)
            ->color('#4caf50 ')
            ->backgroundColor('rgba(255, 255, 255, 0.1)');
        $compareCasesChart->dataset('décès ', 'line', $deathCasesValues)
            ->color('#f44336')
            ->backgroundColor('rgba(255, 255, 255, 0.1)');

        return view('index', compact(
            'stats',
            'regions',
            'confirmedCasesChart',
            'recoveredCasesChart',
            'deathCasesChart',
            'compareCasesChart'
        ));
    }

    public function days()
    {

        $url_stats = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/5/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_stats = Http::get($url_stats);
        $stats = $response_stats->json();

        $url_regions = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_regions = Http::get($url_regions);
        $regions = $response_regions->json();

        //charts

        $collection = collect($stats['features']);
        $regions_collection = collect($regions['features']);

        // confirmed cases by day chart

        $confirmedByDayCasesKeys =  $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $confirmedByDayCasesValues =  $collection->pluck('attributes')
            ->pluck('Cas_confirmés_par_jour');

        $confirmedCasesByDayChart = new ConfirmedCasesByDayChart;
        $confirmedCasesByDayChart->labels($confirmedByDayCasesKeys);
        $confirmedCasesByDayChart->dataset('nombre des cas confirmés par jour ', 'bar', $confirmedByDayCasesValues)
            ->color('#ff9800')
            ->backgroundColor('#ff9800');

        // recovered cases by day chart

        $recoveredByDayCasesKeys =  $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $recoveredByDayCasesValues =  $collection->pluck('attributes')
            ->pluck('Rétablis_par_jour');

        $recoveredCasesByDayChart = new RecoveredCasesByDayChart;
        $recoveredCasesByDayChart->labels($recoveredByDayCasesKeys);
        $recoveredCasesByDayChart->dataset('nombre des cas rétablis par jour ', 'bar', $recoveredByDayCasesValues)
            ->color('#4caf50')
            ->backgroundColor('#4caf50');

        // death cases by day chart

        $deathByDayCasesKeys =  $collection->pluck('attributes')
            ->pluck('Date')
            ->map(function ($item) {
                return date('d/m/Y', $item / 1000);
            });

        $deathByDayCasesValues =  $collection->pluck('attributes')
            ->pluck('Cas_confirmés_par_jour');

        $deathCasesByDayChart = new DeathCasesByDayChart;
        $deathCasesByDayChart->labels($deathByDayCasesKeys);
        $deathCasesByDayChart->dataset('nombre des cas décédés par jour ', 'bar', $deathByDayCasesValues)
            ->color('#f44336')
            ->backgroundColor('#f44336');


        return view('days', compact(
            'stats',
            'regions',
            'confirmedCasesByDayChart',
            'recoveredCasesByDayChart',
            'deathCasesByDayChart'
        ));
    }

    public function regions()
    {

        $url_stats = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/5/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_stats = Http::get($url_stats);
        $stats = $response_stats->json();


        $url_regions = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_regions = Http::get($url_regions);
        $regions = $response_regions->json();

        //charts

        $collection = collect($stats['features']);
        $regions_collection = collect($regions['features']);

        //cases by region chart

        $sumCases =   $regions_collection->pluck('attributes')->sum('Cases');
        $casesByRegionKeys =   $regions_collection->pluck('attributes')
            ->map(function ($item) use ($sumCases) {
                return $item['Nom_Région_FR'] . ' / ' . round(($item['Cases'] * 100) / $sumCases, 2) . '%';
            });

        $casesByRegionValues   =   $regions_collection->pluck('attributes')
            ->pluck('Cases');

        $casesByRegionChart = new CasesByRegionChart;
        $casesByRegionChart->labels($casesByRegionKeys);
        $casesByRegionChart->dataset('cas par région ', 'pie', $casesByRegionValues)
            ->backgroundColor(
                [
                    'rgb(26,19,52)', 'rgb(38,41,74)', 'rgb(1,84,90)', 'rgb(1,115,81)',
                    'rgb(3,195,131)', 'rgb(170,217,98)', 'rgb(251,191,69)', 'rgb(239,106,50)',
                    'rgb(237,3,69)', 'rgb(161,42,94)', 'rgb(113,1,98)', 'rgb(17,1,65)'
                ]
            );

        //all cases by region chart

        $allCasesByRegionKeys =  $regions_collection->pluck('attributes')
            ->map(function ($item) use ($sumCases) {
                return $item['Nom_Région_FR'];
            });

        $ConfirmedCasesByRegionValues   =   $regions_collection->pluck('attributes')
            ->pluck('Cases');
        $recoveredCasesByRegionValues   =   $regions_collection->pluck('attributes')
            ->pluck('Recoveries');
        $deathCasesByRegionValues       =   $regions_collection->pluck('attributes')
            ->pluck('Deaths');

        $allCasesByRegionChart = new AllCasesByRegionChart;
        $allCasesByRegionChart->labels($allCasesByRegionKeys);
        $allCasesByRegionChart->height(500);

        $allCasesByRegionChart->dataset('Cas confirmés ', 'horizontalBar', $ConfirmedCasesByRegionValues)
            ->color('#ff9800')
            ->backgroundColor('#ff9800');
        $allCasesByRegionChart->dataset('Rétablis ', 'horizontalBar', $recoveredCasesByRegionValues)
            ->color('#4caf50')
            ->backgroundColor('#4caf50');
        $allCasesByRegionChart->dataset('Décédés ', 'horizontalBar', $deathCasesByRegionValues)
            ->color('#f44336')
            ->backgroundColor('#f44336');


        return view('regions', compact(
            'stats',
            'regions',
            'casesByRegionChart',
            'allCasesByRegionChart'
        ));
    }

    public function cities()
    {

        $url_stats = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/5/query?where=1%3D1&outFields=*&outSR=4326&f=json';
        $response_stats = Http::get($url_stats);
        $stats = $response_stats->json();

        $url_cities = 'https://services3.arcgis.com/hjUMsSJ87zgoicvl/arcgis/rest/services/Covid_19/FeatureServer/6/query?where=1%3D1&outFields=VILLES_ID,NOM,cas_confir&outSR=4326&f=json';
        $response_cities = Http::get($url_cities);
        $cities = $response_cities->json();

        return view('cities', compact('stats', 'cities'));
    }

    public function Home(){
        return view('Home');
    }
}
