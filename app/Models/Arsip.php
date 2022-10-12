<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    //nama tabel ada yang dlm database
    protected $table ='arsip';
    protected $fillable = ['no_surat','kategori', 'judul', 'dokumen', 'created_at', 'updated_at'];
}