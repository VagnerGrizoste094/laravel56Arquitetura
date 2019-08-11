<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $fillable = ['name', 'caminho', 'local'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'imagens';
}

