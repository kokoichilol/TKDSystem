<?php
namespace App\Http\Controllers;

use App\Models\testModel;
use App\Models\MUserJohoModel;

class TopController extends Controller
{

    public function init()
    {
        $testModel = new testModel();
        $testData = $testModel->getAllData();

        // ユーザ情報
        $userJohoModel = new MUserJohoModel();
        $userData = $userJohoModel->getUserJoho('00000001');

        // 履歴情報（テスト用ダミーデータnull））
        $rirekiData = null;

        return view('pages/top', compact(
            'testData',
            'userData',
            'rirekiData'
            ));
    }

}
