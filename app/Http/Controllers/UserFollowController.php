<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
        /**
     * ユーザをフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
         //認証済みのユーザー（閲覧者）がidのユーザーをフォローする
         \Auth::user()->follow($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
     
    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         //認証済みのユーザー（閲覧者）が、idのユーザをアンフォローする
         \Auth::user()->unfollow($id);
         //前のURLへリダイレクトさせる
         return back();
     }
     
}
