<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Libraries\RSSLibrary;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	protected $rssLib;

	public function __construct(RSSLibrary $rssLib)
	{
		$this->rssLib = $rssLib;
	}


	public function getIndex()
	{

		$rss = $this->rssLib->getRSS('https://news.google.com/news/section?cf=all&hl=pt-BR&pz=1&ned=pt-BR_br&topic=n&output=rss');

		if ( !$rss ) {
			abort(404);
		}

		//dd($rss->channel->item);
		return view('private.home')->with(['rss' => $rss->channel]);
	}
}