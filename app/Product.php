<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    //azeem is learning laravel
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'detail','company'
    ];
}
