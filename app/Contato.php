<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';
    protected $primaryKey = 'idContato';
    protected $fillable = ['nome', 'email', 'mensagem'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;
}
