<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "tb_artist";
    protected $primaryKey = 'artist_id';
    protected $fillable = ['nama_artist'];
}
