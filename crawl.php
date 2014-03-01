#!/usr/bin/env php
<?php
/**
 * fetch tld data from http://www.iana.org/domains/root/db
 */
require_once './vendor/autoload.php';

$url = 'http://www.iana.org/domains/root/db';
$csvFile = './data/tld.csv';
$jsonFile = './data/tld.json';
$yamlFile = './data/tld.yml';
$regexpFile = './data/tld-regexp.php';

use Symfony\Component\DomCrawler\Crawler;
use Guzzle\Common\Collection;
use Goutte\Client as Goutte;
use Nojimage\TLDCrawler\TLD;
use Nojimage\TLDCrawler\Writer\CsvWriter;
use Nojimage\TLDCrawler\Writer\JsonWriter;
use Nojimage\TLDCrawler\Writer\YamlWriter;
use Nojimage\TLDCrawler\Writer\RegexpWriter;

$client = new Goutte();
$crawler = $client->request('GET', $url);

$collection = new Collection();
$csv = new CsvWriter($csvFile);
$json = new JsonWriter($jsonFile);
$yaml = new YamlWriter($yamlFile);
$regexp = new RegexpWriter($regexpFile);

$withPunycode = function_exists('\idn_to_ascii');
// fetch data
$crawler->filter('#tld-table tbody > tr')->each(function (Crawler $node) use ($collection, $withPunycode) {
	$tld = new TLD();
	$tld->domain = ltrim($node->children()->eq(0)->text(), '.');
	$tld->type = $node->children()->eq(1)->text();
	$tld->organisation = $node->children()->eq(2)->text();
	$tld->isIDN = !preg_match('/^[a-z0-9]+$/u', $tld->domain);

	if ($withPunycode) {
		$tld->punycode = \idn_to_ascii($tld->domain);
	}

	$collection->add($tld->domain, $tld);
});

$collection->map(function ($domain, TLD $tld) use ($csv, $json, $yaml, $regexp) {
	$csv->write($tld);
	$json->write($tld);
	$yaml->write($tld);
	$regexp->write($tld);
});
