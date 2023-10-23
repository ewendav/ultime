<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ["collection_id" ,
    "sous_collection_id",
    "sous_categorie_id" ,
    "name",
    "description" ,
    "image" ,
    "price" ,
    "active",
    "size",
    "variante",];

}
