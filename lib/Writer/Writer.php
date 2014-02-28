<?php

namespace Nojimage\TLDCrawler\Writer;

use Nojimage\TLDCrawler\TLD;

interface Writer
{

	public function __construct($path);

	/**
	 * @return Writer
	 */
	public function write(TLD $tld);

	public function save();

}
