<?php

declare(strict_types=1);

namespace Drupal\webform\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a webform variant attribute object.
 *
 * Plugin Namespace: Plugin\WebformVariant.
 *
 * For a working example, see
 * \Drupal\webform\Plugin\WebformVariant\OverrideWebformVariant
 *
 * @see hook_webform_variant_info_alter()
 * @see \Drupal\webform\Plugin\WebformVariantInterface
 * @see \Drupal\webform\Plugin\WebformVariantBase
 * @see \Drupal\webform\Plugin\WebformVariantManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WebformVariant extends Plugin {

  /**
   * Constructs a WebformVariant attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The human-readable name of the webform variant.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $category
   *   (optional) The category in the admin UI where the block will be
   *   listed.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the webform variant.
   * @param string $machine_name_replace_pattern
   *   (optional) The machine name replacement pattern.
   * @param string $machine_name_replace
   *   (optional) The machine name replacement character.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly TranslatableMarkup|string $category = '',
    public readonly TranslatableMarkup|string $description = '',
    public readonly string $machine_name_replace_pattern = '[^a-zA-Z0-9_-]+',
    public readonly string $machine_name_replace = '_',
    public readonly ?string $deriver = NULL,
  ) {}

}
