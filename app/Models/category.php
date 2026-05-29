<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Category extends Model{
    protected $table = 'category';
    protected $fillable = [
        "name",
        "description"
    ];
//a partir de uma categoria posso acessar um produto
    public function products(){
        $this->hasmany(Product::class,"category_id", "id");
    }
}