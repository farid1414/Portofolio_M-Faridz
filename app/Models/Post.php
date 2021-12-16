<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use Sluggable;

    protected $fillable = ['users_id','kategoris_id','judul','gambar', 'slug','cuplikan','body'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'kategoris_id', 'id');
    }
    public function publish()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y ');
    }
}