<?php
namespace App\Http\Controllers;

use App\Models\testModel;

class TopController extends Controller
{

    public function init()
    {
        $testModel = new testModel();
        $testData = $testModel->getAllData();

        return view('pages/top', compact('testData'));
    }
}
