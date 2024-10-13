<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryDocument extends Model
{
    use HasFactory;
    protected $table = 'category_documents';
    protected $fillable = ['name', 'slug'];

    public function dokumens(): HasMany
    {
        return $this->hasMany(Dokumen::class);
    }
}
