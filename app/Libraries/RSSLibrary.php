<?php

namespace App\Libraries;

class RSSLibrary 
{
	public function getRSS($source)
	{
		$xml_rss = file_get_contents($source);

		return new \SimpleXMLElement($xml_rss);
	}
}