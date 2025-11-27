<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MultipleUpload extends Model
{
    protected $table = 'multipleuploads';
    protected $fillable = [
        'ref_table',
        'ref_id',
        'filename',
    ];
}

