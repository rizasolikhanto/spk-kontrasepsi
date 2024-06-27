<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contraceptives extends Model
{   
    use HasFactory;
    protected $guarded = ['id'];
    // Jika nama tabel tidak sesuai dengan konvensi, tentukan secara eksplisit
    protected $table = 'contraceptives';

    protected $fillable = ['name', 'description', 'suggestion'];

    public function rules()
    {
        return $this->hasMany(Rules::class);
    }

    public function consultation()
    {
        return $this->hasMany(Consultations::class);
    }
}
