<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{   
    use HasFactory;
    protected $guarded = ['id'];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'rules';

    public function contraceptive()
    {
        return $this->belongsTo(Contraceptives::class);
    }
}
