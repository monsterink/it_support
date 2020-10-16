<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accept extends Model
{
    use HasFactory;
    protected $fillable = ['name_informant',
                        'name_notifier',
                        'name_responsible',
                        'description',
                        'status',
                        'tel'];
    public function detail_accept()
    {
        return $this->hasMany('App\Models\detail_accept');
    }
}
