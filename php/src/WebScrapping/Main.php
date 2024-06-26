<?php

namespace Chuva\Php\WebScrapping;

/**
 * Runner for the Webscrapping exercise.
 */
class Main {

  /**
   * Main runner, instantiates a Scrapper and runs.
   */
  public static function run() : void {

    $dom = new \DOMDocument('1.0', 'utf-8');
    $dom->loadHTMLFile(__DIR__ . '/../../assets/origin.html');

    $scrapper = new Scrapper();

    $scrapper->scrapAndWriteXlsx($dom, 'assets/data_origin.xlsx');
  }

}
