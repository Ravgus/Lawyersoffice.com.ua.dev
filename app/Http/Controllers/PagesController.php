<?php

namespace App\Http\Controllers;

use App\Article;
use App\Dtp;
use App\Faq;
use App\Offer;
use App\Partner;
use App\Worker;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function main()
    {
        $workers = Worker::all();
        return view('landing.main', ['title' => 'Головна', 'workers' => $workers]);
    }

    public function offers()
    {
        $offers = Offer::all();
        return view('landing.offers', ['title' => 'Послуги', 'offers' => $offers]);
    }

    public function dtps()
    {
        $dtps = Dtp::all();
        return view('landing.dtps', ['title' => 'Допомога при ДТП', 'dtps' => $dtps]);
    }

    public function faqs()
    {
        $faqs = Faq::all();
        return view('landing.faqs', ['title' => 'Питання\Відповіді', 'faqs' => $faqs]);
    }

    public function partners()
    {
        $partners = Partner::all();
        return view('landing.partners', ['title' => 'Ми співпрацюємо', 'partners' => $partners]);
    }

    public function contacts()
    {
        return view('landing.contacts', ['title' => 'Контакти']);
    }

    public function news()
    {
        $articles = Article::paginate(10);
        return view('landing.news', ['title' => 'Новини', 'articles' => $articles]);
    }

    public function article($alias)
    {
        $article = Article::where('alias', $alias)->get();
        return view('landing.article', ['article' => $article[0]]);
    }
}
