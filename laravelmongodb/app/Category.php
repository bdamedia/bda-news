<?php
namespace App;


use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Category extends Eloquent
{
protected $connection = 'mongodb';
protected $collection = 'category';


/**
* The attributes that are mass assignable.
*
* @var array
*/
    protected $fillable = [
    'name', 'detail'
    ];
}

?>
