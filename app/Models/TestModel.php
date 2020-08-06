<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class testModel extends Model
{
    protected $table = 'test';
    protected $guarded = array('ID');

    public function getAllData(){
        $data = DB::table($this->table)->get()->all();

        return $data;
    }

}
