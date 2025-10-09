<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comercio extends Model
{
    use HasFactory;

    protected $table = 'comercios';

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'service',
        'city',
        'neighborhood',
        'street',
        'street_number',
        'image',
        'CEP',
        'telephone',
    ];

    // Relacionamento com o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
