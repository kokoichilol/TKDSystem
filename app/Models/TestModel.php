<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class testModel extends Model
{
    protected $table = 'test';
    protected $guarded = array('ID');

    /*
     * テストテーブルの全データ取得
     *
     * @return $data
     *
     */

    public function getAllData(){
        $data = DB::table($this->table)->get()->all();

        return $data;
    }

}
