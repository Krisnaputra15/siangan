<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sarpra
 * 
 * @property string $username
 * @property string $nama
 * @property string $password
 * @property string $phone_number
 * @property string $email
 * @property Carbon $tgl_lahir
 * @property string $alamat
 * @property string $jenis_kelamin
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Sarpra extends Model
{
	protected $table = 'sarpras';
	protected $primaryKey = 'username';
	public $incrementing = false;

	protected $casts = [
		'tgl_lahir' => 'datetime'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nama',
		'password',
		'phone_number',
		'email',
		'tgl_lahir',
		'alamat',
		'jenis_kelamin'
	];
}
