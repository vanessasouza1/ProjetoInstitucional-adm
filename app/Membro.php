<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membro';
    protected $primaryKey = 'idMembro';
    protected $fillable = ['idDepartamento', 'nome', 'funcao'];
    protected $hidden = ['remember_token'];
    public $timestamps = false;


   /* public function add(){
        $member = new Membro;
        
    }*/
    public function departamento(){
        //return $this->belongsTo(Departamento::class);
        return $this->belongsTo('App\Departamento', 'idDepartamento');
    }

   
}
