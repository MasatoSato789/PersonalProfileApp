<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    // ログインフォーム
    public function index() {
        return view('login');
    }

    // ログイン結果表示
    public function result(Request $request){
        $login_id = $request->input('login_id');
        $password = $request->input('password');

        // ログイン状態の確認
        //DB::enableQueryLog();
        $exists = Account::where('login_id', $login_id)->where('password', $password)->exists();
        //dd(DB::getQueryLog());
        if ($exists) {
            return "Login OK";
        } else {
            return "Login NG";
        }
    }
}
