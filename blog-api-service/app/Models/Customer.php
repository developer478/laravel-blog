<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{

    use HasFactory;

    public function __construct()
    {
        $prefix  = auth()->user()? auth()->user()->id.'_':'';
        $this->table = $prefix.'customer';
    }
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address'
    ];

}
