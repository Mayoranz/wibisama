<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kriminal extends Model
{
    protected $table = 'kriminal'; 
    protected $fillable = ['nama', 'usia', 'kasus', 'lama_hukuman'];
}
?>