<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
// use App\Models\Quote;
use App\Contracts\QuoteContract;


class QuoteController extends Controller
{
    protected $quoteContractRetriever;
    public function __construct(QuoteContract $quoteContract)
    {
        $this->quoteContractRetriever = $quoteContract;
    }

    public function postQuote(Request $request)
    {
        return $this->quoteContractRetriever->postQuote($request);
    }

    public function getQuotes()
    {
        return $this->quoteContractRetriever->getQuotes();
    }

    public function putQuote(Request $request, $id)
    {
        return $this->quoteContractRetriever->putQuote($request, $id);
    }

    public function deleteQuote($id)
    {
        return $this->quoteContractRetriever->deleteQuote($id);
    }
}
