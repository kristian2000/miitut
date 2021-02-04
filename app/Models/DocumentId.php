<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentId extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status_id',
        'type_document',
        'img_front',
        'img_back'
    ];

    protected $table = 'documents_id';

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
