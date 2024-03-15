<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Mail\Mailables\Content;

class address extends Model
{
    protected $table="address";
    protected $primarykey="id";
    protected $keyType="int";
    public $timestamps=true;
    public $incrementing=true;

    protected $fillable=['street','city','province','country','postal_code'];
    public function contact(): BelongsTo
    {
        return $this->belongsTo(Content::class,'contact_id','id');
    }
    //use HasFactory;
}
