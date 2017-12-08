<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

    protected $fillable = ["name", "desc", "deal_at", "total", "status", "method", "user_id", "cart_id"];

    protected $dates = ["deal_at"];

    public static $rules = [
        "name" => "required",
        "deal_at" => "date",
        "total" => "numeric",
        "status" => "numeric",
        "method" => "required",
        "user_id" => "required|numeric",
        "cart_id" => "required|numeric",
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function cart()
    {
        return $this->belongsTo("App\Cart");
    }


}
