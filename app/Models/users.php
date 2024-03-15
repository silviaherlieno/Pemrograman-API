<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Mail\Mailables\Content;

class users extends Model
{
    protected $table="users";
    protected $primarykey="id";
    protected $keyType="int";
    public $timestamps=true;
    public $incrementing=true;

    protected $fillable=['username','password','name'];
    public function contacts(): HasMany
    {
        return $this->hasMany(Content::class,'user_id','id');
    }
    // use HasFactory;
}
