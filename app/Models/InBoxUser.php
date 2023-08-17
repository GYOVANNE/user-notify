<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InBoxUser extends Model
{
    use HasFactory;


    protected $table = 'inbox_users';

    protected $fillable = [
        'user_id',
        'subject',
        'message',
    ];

    public static $rules = [
        'user_id'=>'required|exists:users,id',
        'subject'=>'required|string|max:255',
        'message'=>'required|string'
    ];

    /**
     * Get the user's most recent order.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
