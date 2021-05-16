<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }

    //Función para que la descripción se interrumpa en 80 caracteres
    //virtual field
    public function getExcerptAttribute(){
        return substr($this->description,0,80);
    }
    //metodo personalizado
    public function similar(){
        return $this->where('category_id', $this->category_id)
        ->with('user')
        ->take(2)
        ->get();
        }
}
