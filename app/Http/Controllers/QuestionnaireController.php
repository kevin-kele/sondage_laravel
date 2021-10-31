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

        $questionnaire = new questionnaire;
        $questionnaire->email=$request->email;
        $questionnaire->age=$request->age;
        $questionnaire->sexe=$request->sexe;
        $questionnaire->nb_Foyer=$request->nb_Foyer;
        $questionnaire->profession=$request->profession;
        $questionnaire->casque=$request->casque;
        $questionnaire->magasin=$request->magasin;
        $questionnaire->marque=$request->marque;
        $questionnaire->utilisations=$request->utilisations;
        $questionnaire->nb_utilise_vr=$request->nb_utilise_vr;
        $questionnaire->qualite=$request->qualite;
        $questionnaire->confort=$request->confort;
        $questionnaire->connection=$request->connection;
        $questionnaire->qualite_graph=$request->qualite_graph;
        $questionnaire->qualiteAudio=$request->qualiteAudio;
        $questionnaire->notifications=$request->notifications;
        $questionnaire->invitation_session=$request->invitation_session;
        $questionnaire->enregistrement=$request->enregistrement;
        $questionnaire->jeux_exclusifs=$request->jeux_exclusifs;
        $questionnaire->visitor=$request->ip();
        $questionnaire->nouvelle_fonctionnalite=$request->nouvelle_fonctionnalite;

        $questionnaire->save();


        return redirect()->back()->with('success','toute l’équipe de ​Bigscreen v​ ous remercie pour votre engagement. Grâce à votre investissement, nous vous préparons une application toujours plus facile à utiliser, seul ou en famille.
        Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez cette adresse:' . route('show.questionaire', ['questionnaire' => $questionnaire]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AllQ()
    {
        $questionnaire = questionnaire::paginate(5);
        return view('welcome',compact('questionnaire'));
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
        dd($questionnaire);
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
