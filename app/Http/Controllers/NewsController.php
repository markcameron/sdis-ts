<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(private NewsRepository $repository)
    {
    }

    public function index()
    {
        return view('front.news.index', [
            'news' => $this->repository->published()->get(perPage: 12),
        ]);
    }

    public function show($slug)
    {
        $news = $this->repository->forSlug($slug);
        abort_unless($news, 404, 'News ');

        return view('front.news.show', [
            'news' => $news,
        ]);
    }
}
