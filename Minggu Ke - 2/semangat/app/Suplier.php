<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suppliers';
    public $fillable = [
    	'name',
    	'address',
    	'postal_code',
    	'zip_code',
    	'region',
    	'city',
    	'country',
    	'contact_title',
    	'contact_name',
    	'contact_phone',
    	'contact_fax',
    	'contact_email'
    ];
}
