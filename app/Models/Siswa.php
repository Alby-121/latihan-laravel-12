<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Siswa extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'siswa';
    protected $fillable = ['nama', 'nisn', 'kelas'];
}
