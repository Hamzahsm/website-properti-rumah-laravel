<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class IklanProperti extends Model
{
    use HasFactory, Searchable;

    protected $guarded = [
        'id'
    ];

    public function toSearchableArray(): array
    {
        return [
            'judul_properti' => $this->judul,
            'lokasi_properti' => $this->lokasi,
        ];
    }
}
