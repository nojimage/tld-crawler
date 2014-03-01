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
		$code = $tld->isIDN ? 'utf8' : 'ascii';

		if ($tld->type === 'country-code') {
			$this->ccTLD[$code][] = $tld->domain;
			if ($code === 'utf8') {
				$this->ccTLD['punycode'][] = $tld->punycode;
			}
		} else {
			$this->gTLD[$code][] = $tld->domain;
			if ($code === 'utf8') {
				$this->gTLD['punycode'][] = $tld->punycode;
			}
		}
		return $this;
	}

	public function save()
	{
		$gTLD = $this->gTLD;
		$ccTLD = $this->ccTLD;

		$this->file->fwrite("<?php" . PHP_EOL . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD = "(?:%s)";', join('|', $gTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD = "(?:%s)";', join('|', $ccTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD_IDN = "(?:%s)";', join('|', $gTLD['utf8'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD_IDN = "(?:%s)";', join('|', $ccTLD['utf8'])) . PHP_EOL);
		if (function_exists('\idn_to_ascii')) {
			$this->file->fwrite(sprintf('$gTLD_punycode = "(?:%s)";', join('|', $gTLD['punycode'])) . PHP_EOL);
			$this->file->fwrite(sprintf('$ccTLD_punycode = "(?:%s)";', join('|', $ccTLD['punycode'])) . PHP_EOL);
		}
	}

}
