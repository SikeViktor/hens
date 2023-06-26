<?php

namespace App\Models;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hens extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'breed', 'birth', 'description', 'sex', 'alive', 'tags', 'logo', 'user_id'];            
    
    public function scopeFilter($query, array $filters) {

        if($filters['tag'] ?? false) {
            $query->where('tags', 'like', '%'. request('tag') . '%' );
        }

        if($filters['search'] ?? false) {
            $query->where('name', 'like', '%'. request('search') . '%' )
                ->orWhere('description', 'like', '%'. request('search') . '%' )
                ->orWhere('tags', 'like', '%'. request('search') . '%' );
        }
    }

    //Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
