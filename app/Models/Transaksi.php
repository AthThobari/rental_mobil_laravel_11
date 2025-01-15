<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory, softDeletes;

    protected $table = 'transaksis';
    protected $primary = 'id';
    protected $fillable = ['id', 'user_id', 'mobil_id', 'nama', 'ponsel', 'alamat', 'lama', 'tgl_pesan', 'total', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function mobil(): BelongsTo
    {
        return $this->belongsTo(mobil::class);
    }
}
