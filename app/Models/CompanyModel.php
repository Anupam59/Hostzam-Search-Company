<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyModel extends Model
{
    use HasFactory;

    public $table ='company';
    public $primaryKey ='company_id';
    public $incrementing =true;
    public $keyType ='int';
    public $timestamps =false;
}
