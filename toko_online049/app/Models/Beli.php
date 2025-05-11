<?php

// app/Models/Beli.php 
namespace App\Models; 
use Illuminate\Database\Eloquent\Model; 
class Beli extends Model 
{ 
protected $table = 'belis'; 
protected $fillable = [ 
'user_id', 
'product_id', 
'quantity', 
]; 
}
