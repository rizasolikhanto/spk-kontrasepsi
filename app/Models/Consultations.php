<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultations extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'consultations';

    public function contraceptive() {
        return $this->belongsTo(Contraceptives::class);
    }
}   
