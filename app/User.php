<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role', 'photo', 'nama', 'tanggallahir', 'jeniskelamin', 'status', 'username', 'email', 'kontak', 'password', 'ktp', 'perusahaan'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function investasi()
    {
      return $this->hasMany(Investasi::class);
    }

    public function pengajuanpetani()
    {
      return $this->hasMany(Pengajuanpetani::class);
    }
}
