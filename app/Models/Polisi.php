<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Polisi extends Model
{
    protected $table = 'polisi'; // nama tabel
    protected $fillable = ['nama', 'usia', 'jabatan'];
}
?>