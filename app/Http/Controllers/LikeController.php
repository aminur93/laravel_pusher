<?php

namespace App\Http\Controllers;

use App\Model\Like;
use App\Model\Reply;
use Illuminate\Http\Request;
use auth;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->likes()->create([
            //'user_id' => auth()->id(),
            'user_id' => '2'
        ]);
    }
    
    public function unlikeIt(Reply $reply)
    {
        $reply->likes()->where('user_id','2')->first()->delete();
    }
}
