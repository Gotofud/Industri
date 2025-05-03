<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $fillable = [
        'id',
        'cover',
        'judul',
        'isi',
        'tanggal',
        'id_kategori'
    ];
    public $timestamp = true;

    public function deleteImage(){
        if ($this->img && file_exists(public_path('images/berita/' . $this->img))){
            return unlink(public_path('images/berita/' . $this->img));
        } 
        return false;
    }
    
    public function Kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori','id');
    }
}


// $guard = ['id'] ini isi semua kecuali id karna udah otomatis