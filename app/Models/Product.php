<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'controlNumber',
        'sourceofmail',
        'subjectMatter',
        'statuss',
        'actionUnit',
        'dateReleased',
        'nameofpersonnel',
        'initialReceived',
        'trackingNumber',
    ];
}
