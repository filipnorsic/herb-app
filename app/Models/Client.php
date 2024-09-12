<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Client extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'height',
        'sex',];

    // Define the many-to-one relationship with User

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getUser()
    {
        return $this->user()->get();
    }

    // Define the one-to-many relationship with Measurement

    public function measurements()
    {
        return $this->hasMany(Measurement::class);
    }

    public function getMeasurements()
    {
        return $this->measurements()->get();
    }

}
