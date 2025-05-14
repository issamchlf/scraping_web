<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\BrowserKit\HttpBrowser;

use Illuminate\Http\Request;

class webScrapingController extends Controller
{
    public function scrapeQuotes(): JsonResponse
    {

    $browser = new HttpBrowser(HttpClient::create()); 
    // This enables you to make HTTP requests by simulating browser behavior

    $crawler = $browser->request('GET', 'https://visita.malaga.eu/es/');
    // This sends a GET request to the specified URL

    $html = $crawler->outerHtml();
     // This retrieves the HTML content of the page

    $decodedHtml = html_entity_decode($html);
     // This decodes any HTML entities in the HTML content
     
    return response()->json($decodedHtml); 
    
    }
}
