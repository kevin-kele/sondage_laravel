<?php

namespace App\Http\Controllers;

use LengthException;
use Illuminate\Http\Request;
use App\Models\questionnaire;
use App\Models\questions;
use Illuminate\Support\Facades\DB;
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



        $data4  = DB::table('questionnaires')->select('qualite')->get();

        $data5  = DB::table('questionnaires')->select('confort')->get();
        $data6  = DB::table('questionnaires')->select('connection')->get();
        $data7  = DB::table('questionnaires')->select('qualite_graph')->get();
        $data8  = DB::table('questionnaires')->select('qualiteAudio')->get();





        return view('dashboard', [
            'chartData' => $arr,
            'chartData2' => $arr2,
            'chartDataU' => $arr3,
            'confort'=>$data5,
            'qualite'=>$data4,
            'connection'=>$data6,
            'qualite_graph'=>$data7,
            'qualiteAudio'=>$data8
        ]);
    }

    public function getAll(){
        $questions = questions::all();
        return view('admin.dashboard',compact('questions'));
    }

    public function allResponse(){
        $response = 'kevin';
        $numero  = DB::table('questions')->select('numero')->get();
        $questions = questions::all();
        $questionnaire=questionnaire::paginate(3);
        return view('admin.response',[
            'questions'=>$questions,
            'questionnaire'=>$questionnaire,
            'numero'=>$numero,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addQuestion(Request $request){
        $questions = new questions;
        $questions->numero=$request->numero;
        $questions->corps=$request->corps;
        $questions->type=$request->type;

        $questions->save();

        return redirect()->back()->with('success','question ajouter avec succes');
    }
}
