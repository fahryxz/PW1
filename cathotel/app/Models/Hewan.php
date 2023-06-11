<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'hewans';
    
    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}