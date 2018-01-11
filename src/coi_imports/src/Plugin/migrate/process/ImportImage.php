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
 *   id = "import_image"
 * )
 */


class ImportImage extends ProcessPluginBase {


   /**
 * Adds appropriate phone number to extension.
 *
 * @link https://www.drupal.org/node/2771965 Online handbook documentation for substr process plugin @endlink
 *
 * @MigrateProcessPlugin(
 *   id = "import_image"
 * )
 */
    public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
      $source = "http://dpohccb5cbpo2.cloudfront.net/images/post-header-thumbnail/_thumbnail/strategy.jpg";
      if (!$uri = file_unmanaged_copy($source)) {
        return [];
      }
      $file = \Drupal::entityTypeManager()->getStorage('file')->create(['uri' => $uri]);
      $file->save();
      return $file->id();
    }

}
