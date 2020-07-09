<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";
    protected $primaryKey = 'album_id';
    protected $fillable = ['nama_album','artist_id'];
    public function artist(){
    	return $this->belongsTo('App\Artist','artist_id');
    }
}
