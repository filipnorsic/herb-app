<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'weight',
        'body_fat',
        'muscle_mass',
        'water',
        'visceral_fat',
        'age',
        'basal_metabolism',];

    // Define the many-to-one relationship with Client

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function getClient()
    {
        return $this->client()->get();
    }

    // Define the one-to-many relationship with Photos


    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function getPhotos()
    {
        return $this->photos()->get();
    }
}
