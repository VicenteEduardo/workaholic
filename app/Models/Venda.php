<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venda extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'vendas';
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
