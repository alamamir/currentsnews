<?php
namespace Bamawebsite\CurrentsNews;

use Illuminate\Support\Facades\Http;

class CurrentsNews  
{
    public static function getNews()
    {
        $news = Http::get('https://newsapi.org/v2/everything?q=tesla&from=2021-02-23&sortBy=publishedAt&apiKey='.config('currentsnews.api_key'));
        return $news->json();
    }
}
