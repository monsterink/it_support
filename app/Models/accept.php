<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accept extends Model
{
    use HasFactory;
    protected $fillable = ['informant',
                        'position',
                        'unit',
                        'location',
                        'owner',
                        'topic',
                        'status',
                        'responsible',
                        'groupissue',
                        'type',
                        'sapid',
                        'result',
                        'resultdetail',
                        'coworker',
                        'namecoworker'];
    public function detail_accept()
    {
        return $this->hasMany('App\Models\detail_accept');
    }
}
