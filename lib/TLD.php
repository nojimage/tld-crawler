<?php

namespace Nojimage\TLDCrawler;

class TLD
{

	public $domain;
	public $type;
	public $organisation;

	public function toArray() {
		return (array)$this;
	}
}
