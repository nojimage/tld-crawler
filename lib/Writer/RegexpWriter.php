<?php

namespace Nojimage\TLDCrawler\Writer;

use Nojimage\TLDCrawler\TLD;

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

	public function write(TLD $tld)
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
		if (!isset($gTLD) || !isset($ccTLD)) {
		    return;
        }

		$this->file->fwrite("<?php" . PHP_EOL . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD = "(?:%s)";', implode('|', $gTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD = "(?:%s)";', implode('|', $ccTLD['ascii'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$gTLD_IDN = "(?:%s)";', implode('|', $gTLD['utf8'])) . PHP_EOL);
		$this->file->fwrite(sprintf('$ccTLD_IDN = "(?:%s)";', implode('|', $ccTLD['utf8'])) . PHP_EOL);
		if (function_exists('\idn_to_ascii')) {
			$this->file->fwrite(sprintf('$gTLD_punycode = "(?:%s)";', implode('|', $gTLD['punycode'])) . PHP_EOL);
			$this->file->fwrite(sprintf('$ccTLD_punycode = "(?:%s)";', implode('|', $ccTLD['punycode'])) . PHP_EOL);
		}
	}

}
