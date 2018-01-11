<?php

namespace Drupal\coi_imports\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
use Drupal\migrate\MigrateSkipProcessException;

/**
 * Returns the first, unless the second is not empty, in which case it returns that.
 *
 * @link https://www.drupal.org/node/2771965 Online handbook documentation for substr process plugin @endlink
 *
 * @MigrateProcessPlugin(
 *   id = "choose"
 * )
 */
class Choose extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {

    if (!(isset($value[0]))) {
      throw new MigrateException('First value is required');
    }
    if (!(isset($value[1]))) {
      throw new MigrateException('Second value is required');
    }
    if (!empty($value[1])){
      return $value[1];
    }else{
      return $value[0];
    }
  }

}
