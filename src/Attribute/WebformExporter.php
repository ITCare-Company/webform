<?php

declare(strict_types=1);

namespace Drupal\webform\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a results exporter attribute object.
 *
 * Plugin Namespace: Plugin\WebformExporter.
 *
 * For a working example, see
 * \Drupal\webform\Plugin\WebformExporter\DelimitedText/WebformExporter
 *
 * @see hook_webform_exporter_info_alter()
 * @see \Drupal\webform\Plugin\WebformExporterInterface
 * @see \Drupal\webform\Plugin\WebformExporterBase
 * @see \Drupal\webform\Plugin\WebformExporterManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WebformExporter extends Plugin {

  /**
   * Constructs a WebformExporter attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The human-readable name of the results exporter.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $category
   *   (optional) The category in the admin UI where the block will be
   *   listed.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the results exporter.
   * @param bool $archive
   *   (optional) Generates zipped archive.
   * @param bool $files
   *   (optional) Download uploaded files (in a zipped archive).
   * @param bool $options
   *   (optional) Using export options.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly TranslatableMarkup|string $category = '',
    public readonly TranslatableMarkup|string $description = '',
    public readonly bool $archive = FALSE,
    public readonly bool $files = TRUE,
    public readonly bool $options = TRUE,
    public readonly ?string $deriver = NULL,
  ) {}

}
