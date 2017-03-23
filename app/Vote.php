<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{

    protected $table = 'vote';
    protected $fillable = array("vote_id", "user_id", "voted_id", "value", "voted_date");
    public static $rules = array(
        "create" => array(
            'user_id' => 'required|integer',
            'voted_id' => 'required|integer',
            'value' => 'required|integer',

        ),
        "update" => array(
            'user_id' => 'required|integer',
            'voted_id' => 'required|integer',
            'value' => 'required|integer',
        )
    );

    public function user()
    {
        return $this->belongsTo("App\User","user_id","id");
    }
   
}
