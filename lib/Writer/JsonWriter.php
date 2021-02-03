<?php

namespace Nojimage\TLDCrawler\Writer;

use Nojimage\TLDCrawler\TLD;

class JsonWriter extends FileWriter
{

	/**
	 * @var array
	 */
	protected $tmp;

	public function __construct($path)
	{
		parent::__construct($path);
	}

	public function write(TLD $tld)
	{
		$this->tmp[] = $tld;

		return $this;
	}

	public function save()
	{
		$this->file->fwrite(
				json_encode(
						$this->tmp, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT |
						JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT
				)
		);
	}

}
