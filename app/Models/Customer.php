<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['FirstName', 'LastName', 'Address1', 'Address2', 'City', 'State', 'PostalCode', 'Country', 'Phone', 'Email', 'Password', 'BillingAddress', 'BillingState', 'BillingCountry'];
}
