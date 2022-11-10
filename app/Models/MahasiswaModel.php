<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{

    protected $table ='mahasiswa';
    // protected $fillable=['nim','nama','jurusan','prodi'];
    protected $guarded=['id'];
}
