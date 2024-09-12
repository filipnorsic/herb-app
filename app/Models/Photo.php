<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'title',];


    // Define the many-to-one relationship with Measurement

    public function measurement()
    {
        return $this->belongsTo(Measurement::class);
    }

    public function getMeasurement()
    {
        return $this->measurement()->get();
    }
}
