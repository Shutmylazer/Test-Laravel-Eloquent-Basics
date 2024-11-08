<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Morningnews extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'morning_news';

    // Allow mass assignment for 'title' and 'content'
    protected $fillable = [
        'title',
        'news_text'  // Changed from 'content' to match the migration
    ];
}
