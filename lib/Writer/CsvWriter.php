<?php

namespace Nojimage\TLDCrawler\Writer;

class CsvWriter extends FileWriter
{

	public function write(\Nojimage\TLDCrawler\TLD $tld)
	{
		$this->file->fputcsv([
			$tld->domain,
			$tld->type,
			$tld->organisation,
		]);

		return $this;
	}

}
