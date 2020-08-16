<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MUserJohoModel extends Model
{
    protected $table = 'tkdsystem.m_user_joho';
    protected $guarded = array('user_id');

    /*
     * ユーザ情報を取得する
     *
     * @return userData
     */
    public function getUserJoho($userID){
           $userData = DB::table($this->table)->
           select('sei','mei')->
           where('user_id', '=', $userID)->
           get()->first();

           return $userData;
    }
}
