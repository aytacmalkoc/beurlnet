<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function withoutHttps($attribute)
    {
        return preg_replace('#^https?://#', '', rtrim($this->getAttribute($attribute), '/'));
    }

    public function domain()
    {
        return parse_url($this->getAttribute('original'), PHP_URL_HOST);
    }
}
