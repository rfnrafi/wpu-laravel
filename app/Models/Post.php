<?php

namespace App\Models;

use App\Models\Category;
use function GuzzleHttp\Promise\queue;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ["id"];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function scopeFilter($query, array $filters){
        // SEARCH
        $query->when($filters["search"] ?? false, fn($query,$search)=>
            $query->where("title","like","%" . $search . "%")
                ->orWhere("description","like", "%". $search . "%")
        );
        // CATEGORY
        $query->when($filters["category"] ?? false, function($query,$category){
            return $query->whereHas("category",function($query) use ($category){
                $query->where("slug",$category);
            });
        });
    }

    public function category(){
        return $this->BelongsTo(Category::class);
    }

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
