<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopkeeper extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'document',
        'email',
        'password'
    ];
    
    public function wallet()
    {
        return $this->morphOne(Wallet::class, 'owner');
    }
}
