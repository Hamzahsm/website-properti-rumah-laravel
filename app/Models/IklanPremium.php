<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use App\Models\User; //db-relation
use Cviebrock\EloquentSluggable\Sluggable; //slugable

class IklanPremium extends Model
{
    use HasFactory, Searchable, Sluggable;

    protected $guarded = [
        'id'
    ];

    /**
     * 
     * fitur search
     * 
     */

    public function toSearchableArray(): array
    {
        return [
            'judul_properti' => $this->judul,
            'lokasi_properti' => $this->lokasi,
        ];
    }

    /**
     * 
     * db relation
     * 
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id'); 
    }  

    /**
     * 
     * fitur sluggable
     * 
     */
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'judul_properti'
            ]
            ];  
    }


}
