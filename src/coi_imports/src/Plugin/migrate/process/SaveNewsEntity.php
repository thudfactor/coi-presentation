<?php

namespace Drupal\coi_imports\Plugin\migrate\process;

use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\Row;
use Drupal\migrate\MigrateSkipProcessException;

use Drupal\paragraphs\Entity\Paragraph;

/**
 * Creates a content entity to hold news.
 *
 * @link https://www.drupal.org/node/2771965 Online handbook documentation for substr process plugin @endlink
 *
 * @MigrateProcessPlugin(
 *   id = "save_news_entity"
 * )
 */


class SaveNewsEntity extends ProcessPluginBase {


  /**
   * {@inheritdoc}
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    
    if (empty($value)) {
        throw new MigrateException('Required news content needed');
    }
    
    //remove tags
    $exploded_value = explode('<div class="field field-name-field-tags field-type-taxonomy-term-reference field-label-inline clearfix">',$value);
    $value = $exploded_value[0];

    $paragraph = Paragraph::create([
        'type' => 'editorial_only',   // paragraph type machine name
        'field_formatted_text' => [   // paragraph's field machine name
            'value' => $value,                  // body field value
            'format' => 'full_html',         // body text format
        ],
    ]);

    $paragraph->save();

    $return_html = [  // paragraph field attached to node
        [
            'target_id' => $paragraph->id(),
            'target_revision_id' => $paragraph->getRevisionId(),
        ],
    ];
    return $return_html;
  }

}
