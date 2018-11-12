<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;

class QuoteController extends Controller
{
    protected $quoteContractRetriever;
    public function __construct(QuoteContract $quoteContract)
    {
        $quoteContractRetriever = $quoteContract;
    }

    public function postQuote(Request $request)
    {
        return $this->quoteContractRetriever->postQuote($request);
    }

    public function getQuotes()
    {

    }

    public function putQuote(Request $request, $id)
    {

    }

    public function deleteQuote($id)
    {

    }
}
