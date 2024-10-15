<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pest extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = ['name', 'image', 'likes', 'user_id'];

    /**
     * Define the relationship: A pest belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
