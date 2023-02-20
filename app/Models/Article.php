<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Unite;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'designation',
        'prix',
        'tva',
        'stock',
        'stock_initial',
        'active',
        'sous_famille_id',
        'unite_id',
    ];

    public $timestamps = false;

    public function unite()
    {
        return $this->hasOne(Unite::class,"unite_id","id");
    }


    public function sous_famille():BelongsTo{
        return $this->belongsTo(SousFamille::class,"famille_id","id");
    }

}
