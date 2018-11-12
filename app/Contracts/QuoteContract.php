<?php 
namespace App\Contracts;

interface QuoteContract
{

  public function postQuote(Request $request);

  public function getQuotes();

  public function putQuote(Request $request, $id);

  public function deleteQuote($id);

}
