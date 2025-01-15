<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'Mobils';
    protected $primary = 'id';
    protected $fillable = ['id', 'user_id', 'nopolisi', 'merk', 'jenis', 'kapasitas', 'harga', 'foto'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

}
