<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petroom extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'petrooms';

    public function rooms(){
        return $this->belongsTo(Room::class, 'id');
    }

    public function hewans(){
        return $this->belongsTo(Customer::class, 'id');
    }

    public function customers(){
        return $this->belongsTo(Customer::class, 'id');
    }
}
