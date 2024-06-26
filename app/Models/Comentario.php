<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Comentario extends Model
{
    use HasFactory;

    protected $table = 'comentarios';

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function postagem(): HasOne
    {
        return $this->hasOne(Postagem::class, 'id', 'postagem_id');
    }

    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function comentarios(): HasMany
    {
        return $this->hasMany(Comentario::class, 'postagem_id', 'id');
    }
}
