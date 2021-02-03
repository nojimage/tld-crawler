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
use Goutte\Client as Goutte;
use Nojimage\TLDCrawler\TLD;
use Nojimage\TLDCrawler\Writer\CsvWriter;
use Nojimage\TLDCrawler\Writer\JsonWriter;
use Nojimage\TLDCrawler\Writer\YamlWriter;
use Nojimage\TLDCrawler\Writer\RegexpWriter;

$client = new Goutte();
$crawler = $client->request('GET', $url);

$collection = [];
$csv = new CsvWriter($csvFile);
$json = new JsonWriter($jsonFile);
$yaml = new YamlWriter($yamlFile);
$regexp = new RegexpWriter($regexpFile);

$withPunycode = function_exists('\idn_to_ascii');
// fetch data
$crawler->filter('#tld-table tbody > tr')->each(function (Crawler $node) use (&$collection, $withPunycode) {
	$tld = new TLD();
	$tld->domain = preg_replace('/\A(\x{200f}?)\.+/u', '$1', trim($node->children()->eq(0)->text()));
	$tld->type = trim($node->children()->eq(1)->text());
	$tld->organisation = trim($node->children()->eq(2)->text());
	$tld->isIDN = !preg_match('/^[a-z0-9]+$/u', $tld->domain);

	if ($withPunycode) {
		$tld->punycode = idn_to_ascii($tld->domain, IDNA_DEFAULT, INTL_IDNA_VARIANT_UTS46);
	}

    $collection[$tld->domain] = $tld;
});

foreach ($collection as $tld) {
    /** @var TLD $tld */
    $csv->write($tld);
    $json->write($tld);
    $yaml->write($tld);
    $regexp->write($tld);
}
