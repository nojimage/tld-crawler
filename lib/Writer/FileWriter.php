<?php

namespace Nojimage\TLDCrawler\Writer;

abstract class FileWriter implements Writer
{

	/**
	 * @var \SplFileObject;
	 */
	protected $file;

	public function __construct($path)
	{
		$this->file = new \SplFileObject($path, 'w');
	}

	public function __destruct()
	{
		$this->save();
		unset($this->file);
	}

	public function save() {
		
	}
}
