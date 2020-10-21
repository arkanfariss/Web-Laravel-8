<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table = 'anggota';
	protected $primaryKey = 'id';
	static $rules = ['nama' => 'required', 'alamat' => 'required',];
	protected $perPage = 20;
	protected $fillable = ['nama','alamat','tempat_lahir','tanggal_lahir','jenis_kelamin','STATUS','telepon','keterangan'];
}
