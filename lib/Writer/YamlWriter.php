<?php

namespace Nojimage\TLDCrawler\Writer;

use Nojimage\TLDCrawler\TLD;
use Symfony\Component\Yaml\Yaml;

class YamlWriter extends FileWriter
{

	/**
	 * @var array
	 */
	protected $tmp;

	public function write(TLD $tld)
	{
		$this->tmp[] = $tld->toArray();

		return $this;
	}

	public function save()
	{
		$this->file->fwrite(Yaml::dump($this->tmp, 2, 2));
	}

}
