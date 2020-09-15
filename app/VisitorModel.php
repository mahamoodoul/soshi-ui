<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    public $table='visitor_tables';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}