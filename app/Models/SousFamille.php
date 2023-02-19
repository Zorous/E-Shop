<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousFamille extends Model
{
    use HasFactory;
    protected $fillable = [
        'sous_famille',
        'active',
        'photo',
        'famille_id'
    ];

    public function famille(){
        return $this->belongsTo(Famille::class,"famille_id","id");
    }


    public $timestamps = false;
}
