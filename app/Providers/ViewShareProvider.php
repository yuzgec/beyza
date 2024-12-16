<?php

namespace App\Providers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Service;
use App\Models\Features;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class ViewShareProvider extends ServiceProvider
{

    public function boot()
    {

        $Pages = Cache::remember('pages',now()->addYear(1), function () {
            return Page::with('getCategory')->get();
        });

        $Service = Cache::remember('service',now()->addYear(1), function () {
            return Service::all();
        });

        $Blog = Cache::remember('blog',now()->addYear(1), function () {
            return Blog::all();
        });

        $Faq = Faq::with('getCategory')->orderBy('rank')->get();


        View::share([
            'Pages' => $Pages,
            'Service' => $Service,
            'Blog' => $Blog,
            'Faq' => $Faq,
        ]);
    }
}
