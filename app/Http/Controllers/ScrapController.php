<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use App\Services\ScrapService;

class ScrapController extends Controller
{
    private $scrapService;

    public function __construct(ScrapService $scrapService)
    {
        $this->scrapService = $scrapService;
    }
    
    public function view()
    {
        return view('links/link');
    }

    public function scrap(Request $request, ScrapService $scrapService)
    {
        $productsCrawl = $this->scrapService->scrap($request);

        if ($productsCrawl) {
            return redirect('/products');
        }

    }
}
