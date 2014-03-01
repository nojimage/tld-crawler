<?php

namespace Nojimage\TLDCrawler;

class TLD
{

	public $domain;
	public $type;
	public $organisation;
	public $isIDN = false;
	public $punycode = null;

	public function toArray() {
		return (array)$this;
	}
}
