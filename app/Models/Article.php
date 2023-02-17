<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'designation',
        'prixht',
        'tva',
        'stock',
        'stock_initial',
        'active',
        'sous_famille_id'
    ];

    public $timestamps = false;
}
