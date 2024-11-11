<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';

    
    protected $dates = ['tgl_terbit'];

    protected $casts = [
        'tgl_terbit' => 'date:Y-m-d',
    ];

    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'harga',
        'created_at',
        'updated_at',
        'tgl_terbit',
        'filename',
        'filepath'
    ];

    public function galleries(): HasMany{
        return $this->hasMany(Gallery::class);
    }
}
