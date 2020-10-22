<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{

    protected $fillable = [
        'user_id', 'acct_name', 'init_invest', 'start_date', 'remarks', 
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

}
