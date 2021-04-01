<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TestController extends Controller
{
    //     public function index()
    //     {
    //         //api設定
    //         $tag_id = "Git";
    //         $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
    //         $method = "GET";

    //         //接続
    //         $client = new Client();
    //         $response = $client->request($method, $url);

    //         $items = $response->getBody();
    //         $posts = json_decode($items, true);
    //         return view('index', compact('posts'));
    //     }
    public function index()
    {
        $tag_id = "laravel";

        $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
        $method = "GET";

        //接続
        $client = new Client();

        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return view('index', ['posts' => $posts]);
    }
}
