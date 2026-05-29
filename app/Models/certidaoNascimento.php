<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class certidaoNascimento extends Model
{
    public function certidaoNascimento(){
        return $this->hasOne(certidaoNascimento::class, "pessoa_id", "id");
    }
}
