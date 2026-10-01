<?php

declare(strict_types=1);

namespace Drupal\webform\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a webform source entity attribute object.
 *
 * Plugin Namespace: Plugin\WebformSourceEntity.
 *
 * For a working example, see
 * \Drupal\webform\Plugin\WebformSourceEntity\QueryStringWebformSourceEntity
 *
 * @see hook_webform_source_entity_info()
 * @see \Drupal\webform\Plugin\WebformSourceEntityInterface
 * @see \Drupal\webform\Plugin\WebformSourceEntityManager
 * @see \Drupal\webform\Plugin\WebformSourceEntityManagerInterface
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WebformSourceEntity extends Plugin {

  /**
   * Constructs a WebformSourceEntity attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The human-readable name of the plugin.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the plugin.
   * @param int $weight
   *   (optional) Weight (priority) of the plugin.
   * @param array $dependencies
   *   (optional) The element's module dependencies.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly TranslatableMarkup|string $description = '',
    public readonly int $weight = 0,
    public readonly array $dependencies = [],
    public readonly ?string $deriver = NULL,
  ) {}

}
