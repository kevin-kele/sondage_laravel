<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class questionnaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'age',
        'sexe',
        'nb_Foyer',
        'profession',
        'marque',
        'magasin',
        'casque',
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
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
