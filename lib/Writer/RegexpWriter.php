<?php

namespace Nojimage\TLDCrawler\Writer;

class RegexpWriter extends FileWriter
{

	/**
	 * @var array
	 */
	protected $gTLD;

	/**
	 * @var array
	 */
	protected $ccTLD;

	public function __construct($path)
	{
		parent::__construct($path);
	}

	public function write(\Nojimage\TLDCrawler\TLD $tld)
	{
		$code = (preg_match('/^[a-z0-9]+$/u', $tld->domain)) ? 'ascii' : 'utf8';

		if ($tld->type === 'country-code') {
			$this->ccTLD[$code][] = $tld->domain;
		} else {
			$this->gTLD[$code][] = $tld->domain;
		}
		return $this;
	}

	public function save()
	{
		$withPunycode = function_exists('\idn_to_ascii');
		$gTLD = $this->gTLD;
		$ccTLD = $this->ccTLD;

		if ($withPunycode) {
			$gTLD['punycode'] = array_map('\idn_to_ascii', $gTLD['utf8']);
			$ccTLD['punycode'] = array_map('\idn_to_ascii', $ccTLD['utf8']);
		}

		$this->file->fwrite("<?php" . PHP_EOL . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD = "(?:%s)";', join('|', $gTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD = "(?:%s)";', join('|', $ccTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD_utf8 = "(?:%s)";', join('|', $gTLD['utf8'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD_utf8 = "(?:%s)";', join('|', $ccTLD['utf8'])) . PHP_EOL);
		if ($withPunycode) {
			$this->file->fwrite(sprintf('$gTLD_punycode = "(?:%s)";', join('|', $gTLD['punycode'])) . PHP_EOL);
			$this->file->fwrite(sprintf('$ccTLD_punycode = "(?:%s)";', join('|', $ccTLD['punycode'])) . PHP_EOL);
		}
	}

}
