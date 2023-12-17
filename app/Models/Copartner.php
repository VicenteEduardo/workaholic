<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Copartner extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'copartners';
    protected $guarded = ['id'];
<<<<<<< HEAD
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
=======
    
>>>>>>> 1e7368d59ff25e24e3be0bb39b19c9e3240fa74d
    protected $dates = ['deleted_at'];
}
