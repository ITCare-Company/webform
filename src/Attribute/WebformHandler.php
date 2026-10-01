<?php

declare(strict_types=1);

namespace Drupal\webform\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\webform\Plugin\WebformHandlerInterface;

/**
 * Defines a webform handler attribute object.
 *
 * Plugin Namespace: Plugin\WebformHandler.
 *
 * For a working example, see
 * \Drupal\webform\Plugin\WebformHandler\EmailWebformHandler
 *
 * @see hook_webform_handler_info_alter()
 * @see \Drupal\webform\Plugin\WebformHandlerInterface
 * @see \Drupal\webform\Plugin\WebformHandlerBase
 * @see \Drupal\webform\Plugin\WebformHandlerManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WebformHandler extends Plugin {

  /**
   * Constructs a WebformHandler attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The human-readable name of the webform handler.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $category
   *   (optional) The category in the admin UI where the block will be
   *   listed.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the webform handler.
   * @param int $cardinality
   *   (optional) The maximum number of instances allowed for this webform
   *   handler.
   * @param bool $results
   *   (optional) Notifies the webform that this handler processes results.
   * @param bool $conditions
   *   (optional) Indicated whether handler supports condition logic.
   * @param bool $tokens
   *   (optional) Indicated whether handler supports tokens.
   * @param bool $submission
   *   (optional) Indicated whether submission must be stored in the
   *   database for this handler processes results.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly TranslatableMarkup|string $category = '',
    public readonly TranslatableMarkup|string $description = '',
    public readonly int $cardinality = WebformHandlerInterface::CARDINALITY_UNLIMITED,
    public readonly int $results = WebformHandlerInterface::RESULTS_IGNORED,
    public readonly bool $conditions = TRUE,
    public readonly bool $tokens = FALSE,
    public readonly int $submission = WebformHandlerInterface::SUBMISSION_OPTIONAL,
    public readonly ?string $deriver = NULL,
  ) {}

}
