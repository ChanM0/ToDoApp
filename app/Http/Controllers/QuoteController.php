<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    protected $quoteContractRetriever;
    public function __construct(QuoteContract $quoteContract)
    {
        $quoteContractRetriever = $quoteContract;
    }

    public function postQuote()
    {

    }

    public function getQuotes()
    {

    }

    public function putQuote()
    {

    }
}
