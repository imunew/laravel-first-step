<?php

namespace App\Http\Controllers;

use SimpleXMLElement;

class LaravelNewsController extends Controller
{
    public function show()
    {
        $xml = new SimpleXMLElement(file_get_contents('https://feed.laravel-news.com/'));
        $items = $xml->xpath('/rss/channel/item');

        return view('laravel-news', ['items' => $items]);
    }

}
