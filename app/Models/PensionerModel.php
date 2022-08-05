<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PensionerModel extends Model
{
    use HasFactory;
    protected $table = 'pensioner';
    protected $fillable = [
        'registration_no',
        'pensioner_name',
        'pensioner_dob',
        'pensioner_address',]
    ;
}
