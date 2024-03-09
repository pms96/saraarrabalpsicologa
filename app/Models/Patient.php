<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'first_name',
        'last_name',
        'personal_id',
        'birth_date',
        'gender_id',
        'country_id',
        'city',
        'postal_code',
        'address',
        'phone',
        'email',
        'first_visit',
        'last_visit',
        'next_appointment',
        'notes',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function gender(): BelongsTo
    {
        return $this->belongsTo(Gender::class);
    }

    public function coutry(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function session(): HasMany
    {
        return $this->hasMany(Session::class, 'patient_id');
    }
}
