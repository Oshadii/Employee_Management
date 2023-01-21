<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
class Employee extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'nick',
        'email',
        'telephone',
        'position',
        'company_id'
    ];
    public function company(){
        return $this->belongsTo(Company::class);

    }
}
