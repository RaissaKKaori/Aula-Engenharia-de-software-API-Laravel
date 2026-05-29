<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    public function Pessoa(){
        return $this->hasOne(Pessoa::class, "certidao_id", "id");
    }
}
