<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    // ✅ Tambahkan fillable agar bisa create data
    protected $fillable = ['nama', 'npm', 'kelas_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function getUser()
    {
        return $this->join('kelas', 'kelas.id', '=', 'users.kelas_id')
                    ->select('users.*', 'kelas.nama_kelas as nama_kelas')
                    ->get();
    }
}
