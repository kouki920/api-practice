<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SebastianBergmann\Environment\Console;

class TestController extends Controller
{
    public function index()
    {
        //api設定
        $tag_id = "PHP";
        $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
        $method = "GET";

        //接続
        $client = new Client();
        $response = $client->request($method, $url);

        //apiのデータを取得、json形式を配列に変換
        $results = $response->getBody();
        $posts = json_decode($results, true);

        return view('index', compact('posts'));
    }
}
