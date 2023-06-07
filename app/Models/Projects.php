<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $fillable = ['titolo', 'descrizione', 'slug', 'type_id'];
    public function type() {
        return $this->belongsTo(Type::class);
    }
}
