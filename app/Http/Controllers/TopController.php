<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\testModel;
use Illuminate\Http\Request;

class TopController extends Controller
{

    public function init()
    {
        $testModel = new testModel();
        $testData = $testModel->getAllData();

        return view('pages/top', compact('testData'));
    }
}
