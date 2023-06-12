<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fillable=['title','excerpt','body'];
    protected $guarded = ['id'];
    
    // eager load
    protected $with= ['user', 'category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {
            $search = $filters['search'];
            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
            });
        }

        if (isset($filters['category'])) {
            $category = $filters['category'];
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        }

        if (isset($filters['author'])) {
            $author = $filters['author'];
            $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        }

        return $query;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    // buat slug otomatis
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    // public function scopeFilter($query, array $filters){
    //     $query->when($filters['search'] ?? false, function($query, $search) {
    //         return $query->where('title', 'like', '%' . $search . '%')
    //                      ->orWhere('body', 'like', '%' . $search . '%');
    //     });
    //     $query->when($filters['category'] ?? false, function ($query, $category) {
    //         return $query->whereHas('category', function($query) use ($category){
    //                 $query->where('slug',$category);
    //             });
    //     });
    //     $query->when($filters['author'] ?? false, function ($query, $author) {
    //         return $query->whereHas('user', function ($query) use ($author) {
    //             $query->where('username', $author);
    //         });
    //     });


    // }




}
