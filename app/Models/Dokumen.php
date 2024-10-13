<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'deskripsi',
        'file_path',
        'category_document_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryDocument::class, 'category_document_id');
    }
}
