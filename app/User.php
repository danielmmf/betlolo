<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    use \Illuminate\Database\Eloquent\SoftDeletes;

    protected $fillable = ["name","user_hash", "email", "password", "group_id"];

    protected $dates = [];

    public static $rules = [
        "name" => "required",
        "user_hash" => "required",
        "email" => "required",
        "password" => "required",
        "group_id" => "required|numeric",
    ];

    public function Addresses()
    {
        return $this->hasMany("App\Address");
    }


    public function Carts()
    {
        return $this->hasMany("App\Cart");
    }

    public function group()
    {
        return $this->belongsTo("App\Group");
    }


}
