<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $guarded = [
        'id'
    ];

    public function laundry()
    {
        return $this->belongsTo(Laundry::class, 'laundry_id', 'id');
    }
}
