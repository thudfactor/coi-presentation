<?php

namespace Drupal\coi_imports\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
use Drupal\migrate\MigrateSkipProcessException;

/**
 * Adds appropriate phone number to extension.
 *
 * @link https://www.drupal.org/node/2771965 Online handbook documentation for substr process plugin @endlink
 *
 * @MigrateProcessPlugin(
 *   id = "phone"
 * )
 */

define("AREACODE","208");
define("OFFICECODE","459");

class Phone extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {

    if (empty($value)) {
      throw new MigrateException('Last part of number required');
    }

      return '('.AREACODE.') '.OFFICECODE.'-'.$value;
  }

}
