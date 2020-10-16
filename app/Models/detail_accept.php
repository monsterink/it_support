<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_accept extends Model
{
    use HasFactory;
    protected $fillable = ['accept_id',
                        'description',
                        'service_date'];
    public function accept()
    {
        return $this->belongsTo('App\Models\accept');
    }
}
