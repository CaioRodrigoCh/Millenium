<?php
  
namespace App;
  
use Illuminate\Database\Eloquent\Model;
   
class faculdades extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'acessos'
    ];
}
?>