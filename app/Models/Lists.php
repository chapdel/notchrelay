<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Lists extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    protected $appends = ['contacts_nb'];
    protected $table = "lists";


    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function getContactsNbAttribute()
    {
        return count($this->contacts()->get());
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class, 'list_id');
    }


    public static function uid()
    {
        $rd = Str::random(9);
        $item = self::where('uid', $rd)->first();
        if ($item) {
            return self::uid();
        }
        return $rd;
    }
}
