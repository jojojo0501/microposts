<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    //お気に入り登録アクション
    public function store($id)
    {
        \Auth::user()->favorite($id);
        return back();
    }
    
    //お気に入り削除アクション
    public function destroy($id)
    {
       \Auth::user()->unfavorite($id);
       return back();
    }
}
