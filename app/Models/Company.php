<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'comname',
        'email',
        'telephone',
        'photo',
        'social'
    ];
    public function Employees(){
        return $this->hasMany(Employee::class,'company_id','id');
    }
}
