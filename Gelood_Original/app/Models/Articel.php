<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    use HasFactory;

    protected $table = 'articel';
    protected $primaryKey = 'id_articel';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id_articel', 'name_articel', 'desc_articel', 'thumbnail_articel'];

}