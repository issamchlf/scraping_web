<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;

use Illuminate\Http\Request;

class webScrapingController extends Controller
{
    public function scrapeQuotes(): JsonResponse

{

// scraping logic...

return response()->json('Hello, World!');

}
}
