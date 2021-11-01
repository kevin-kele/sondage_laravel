<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionnaire;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data = questionnaire::select('id', 'marque')->get()->groupBy(function ($data) {
            return $data->marque;
        });
        $marques = '';
        $Nbmarque = 0;

        $chartData = "";

        foreach ($data as $marque => $values) {
            $marques = $marque;
            $Nbmarque = count($values);
            $chartData .= "['" . $marques . " '," . $Nbmarque . "]" . ',';
        }
        $arr = ($chartData);

        $data2 = questionnaire::select('id', 'magasin')->get()->groupBy(function ($data2) {
            return $data2->magasin;
        });
        $magasins = '';
        $Nbmagasin = 0;

        $chartData2 = "";

        foreach ($data2 as $magasin => $values) {
            $magasins = $magasin;
            $Nbmagasin = count($values);
            $chartData2 .= "['" . $magasins . " '," . $Nbmagasin . "]" . ',';
        }
        $arr2 = ($chartData2);

        $data3 = questionnaire::select('id', 'utilisations')->get()->groupBy(function ($data3) {
            return $data3->utilisations;
        });
        $utilisations = '';
        $Nbutilisation = 0;

        $chartData3 = "";

        foreach ($data3 as $utilisation => $values) {
            $utilisations = $utilisation;
            $Nbutilisation = count($values);
            $chartData3 .= "['" . $utilisations . " '," . $Nbutilisation . "]" . ',';
        }
        $arr3 = ($chartData3);


        $data4 = questionnaire::select('id', 'qualite')->get()->groupBy(function($data4){
            return $data4->qualite;
        });
        $qualites = '';
        $nbQualite = 0;
        foreach ($data4 as $qualite => $values) {
            $qualites = $qualite;
            $nbQualite = count($values);

        };

        // dd($data5);
        // dd($data4);

        $conforts = '';

        $nbConfort = 0;

     $data5 = questionnaire::select('id', 'confort')->get()->groupBy(function($data5){
            return $data5->confort;
        });
        foreach ($data5 as $confort => $values) {
            $conforts = $confort;
            $nbConfort = count($values);
        };

        dd($nbConfort);





        return view('dashboard', [
            'chartData' => $arr,
            'chartData2' => $arr2,
            'chartDataU' => $arr3
        ]);
    }
}
