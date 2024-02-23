<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles; //role & permission
use Laravel\Scout\Searchable; //searchable featur
use App\Models\IklanProperti; //db relation
use App\Models\IklanPremium; //db relation
use App\Models\SellProperti; //db relation
use App\Models\Post; //db relation

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * 
     * fitur untuk search user
     * 
     */

     public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
        ];
    }

    /**
     * 
     * db relation
     * 
     */
    public function iklanProperti(){
        return $this->hasMany(IklanProperti::class);
    }

    public function iklanPremium(){
        return $this->hasMany(IklanPremium::class);
    }

    public function sellProperti() {
        return $this->hasMany(SellProperti::class);
    }

    public function post() {
        return $this->hasMany(Post::class);
    }
}
