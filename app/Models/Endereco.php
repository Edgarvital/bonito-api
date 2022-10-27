<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne('App\Models\User');
    }

    public function propriedade(){
        return $this->hasOne('App\Models\Propriedade');
    }

    public function organizacaoControleSocial(){
        return $this->hasOne('App\Models\OrganizacaoControleSocial');
    }

}
