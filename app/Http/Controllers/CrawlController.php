<?php

namespace App\Http\Controllers;

use App\Http\Controllers\API\CustomCrawlerController;
use App\Models\Crawler;
use Illuminate\Http\Request;

class CrawlController extends Controller
{
    public function index()
    {
        $crawledText = Crawler::all();
        return view('welcome', compact($crawledText));
    }

    public function create(Request $request)
    {
        $crawler = new CustomCrawlerController();
        $crawler->fetchContent($request->url());
        return view('welcome');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
