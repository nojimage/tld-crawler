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

use Symfony\Component\DomCrawler\Crawler;
use Guzzle\Common\Collection;
use Goutte\Client as Goutte;
use Nojimage\TLDCrawler\TLD;
use Nojimage\TLDCrawler\Writer\CSVWriter;
use Nojimage\TLDCrawler\Writer\JsonWriter;
use Nojimage\TLDCrawler\Writer\YamlWriter;

$client = new Goutte();
$crawler = $client->request('GET', $url);

$collection = new Collection();
$csv = new CSVWriter($csvFile);
$json = new JsonWriter($jsonFile);
$yaml = new YamlWriter($yamlFile);

// fetch data
$crawler->filter('#tld-table tbody > tr')->each(function (Crawler $node) use ($collection) {
	$tld = new TLD();
	$tld->domain = ltrim($node->children()->eq(0)->text(), '.');
	$tld->type = $node->children()->eq(1)->text();
	$tld->organisation = $node->children()->eq(2)->text();

	$collection->add($tld->domain, $tld);
});

$collection->map(function ($domain, TLD $tld) use ($csv, $json, $yaml) {
	$csv->write($tld);
	$json->write($tld);
	$yaml->write($tld);
});
