<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['book_id', 'book_name', 'description', 'category_id'
    , 'quantity', 'price', 'image', 'author'];
    public $timestamps = true;
}