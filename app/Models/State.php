<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'capital',
        'demonym',
        'land_area',
        'postal_code',
        'iso_code'
    ];

    /**
     * Get the LGAs for the state.
     */
    public function localGovernments(): HasMany
    {
        return $this->hasMany(LocalGovernment::class);
    }
}