<?php

namespace App\Models;

use Egulias\EmailValidator\Parser\Comment;
use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User;

class contact extends Model
{
    protected $table="contact";
    protected $primarykey="id";
    protected $keyType="int";
    public $timestamps=true;
    public $incrementing=true;

    protected $fillable=['first_name','last_name','email','phone'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class,'contact_id','id');
    }
    //use HasFactory;
}
