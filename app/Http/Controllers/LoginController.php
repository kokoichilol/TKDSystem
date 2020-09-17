<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MUserJohoModel;

class LoginController extends Controller
{

    /*
     * 開始時処理(GET)
     *
     * @return view
     *
     */
    public function init()
    {

        // 必要な場合は処理を書く

        // 画面を返す
        return view('pages/login');
    }

    /*
     * Submit時処理(POST)
     *
     * @retrun redirect
     *
     */
    public function proceed(Request $request)
    {

        // ログインボタン押下時処理
        if ($request->has('login_button')) {

            // メールアドレス
            $mailAddress = $request->input('mail_address');
            // パスワード
            $passWord = $request->input('password');

            // ユーザ情報モデルのインスタンス
            $userJohoModel = new MUserJohoModel();
            // DBからユーザIDを取得
            $userID = $userJohoModel->login($mailAddress, $passWord);
            // ユーザIDが取得されていた場合
            if (!empty($userID)) {
                // ユーザIDをセッション情報にセット
                $request->session()->put('userID', $userID);
                // トップページへ遷移
                return redirect('/top');
            }

            // ログイン失敗の場合はエラーメッセージをセットしログイン画面に戻す
            return redirect('/')->with('error_message', 'ログインに失敗しました。メールアドレス、またはパスワードに誤りがあります。');
        }
    }
}
