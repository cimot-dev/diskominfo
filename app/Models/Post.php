<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $table = 'posts';
    protected $fillable = [
        'title',
        'category_id',
        'content',
        'slug',
        'image',
        'status',
        'author_id',
        'categories_id',
    ];
    protected $cast = [
        'is_publish' => 'boolean',
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function image()
    {
        return $this->morphOne(Media::class, 'model');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
