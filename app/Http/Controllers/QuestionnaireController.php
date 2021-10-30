<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\questionnaire;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Add(Request $request){
        questionnaire::insert([
            'email',
            'age',
            'sexe',
            'NbFoyer',
            'profession',
            'casque',
            'magasin',
            'marque',
            'nb_utilise_vr',
            'utilisations',
            'qualite',
            'confort',
            'connection',
            'qualite_graph',
            'qualiteAudio',
            'notifications',
            'invitation_session',
            'enregistrement',
            'jeux_exclusifs',
            'nouvelle_fonctionnalite',
            'visitor'=>request()->ip(),
            'created_at'=>Carbon::now()
        ]);
        return redirect()->back()->with('success','Category inserted successfull !');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function show(questionnaire $questionnaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function edit(questionnaire $questionnaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, questionnaire $questionnaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\questionnaire  $questionnaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(questionnaire $questionnaire)
    {
        //
    }
}
