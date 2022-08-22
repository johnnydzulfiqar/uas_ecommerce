<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    protected $fillable = ["admin_id", "users_id", "status"];
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function isTheOwner($user)
    {
        return $this->users_id === $user->id;
    }
}
