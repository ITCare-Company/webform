<?php

declare(strict_types=1);

namespace Drupal\webform\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a webform element attribute object.
 *
 * Plugin Namespace: Plugin\WebformElement.
 *
 * For a working example, see
 * \Drupal\webform\Plugin\WebformElement\Email
 *
 * @see hook_webform_element_info_alter()
 * @see \Drupal\webform\Plugin\WebformElementInterface
 * @see \Drupal\webform\Plugin\WebformElementBase
 * @see \Drupal\webform\Plugin\WebformElementManager
 * @see \Drupal\webform\Plugin\WebformElementManagerInterface
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class WebformElement extends Plugin {

  /**
   * Constructs a WebformElement attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param string $api
   *   (optional) URL to the element's API documentation.
   * @param array $dependencies
   *   (optional) The element's module dependencies.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|null $label
   *   (optional) The human-readable name of the webform element.
   * @param string $default_key
   *   (optional) The default key used for new webform element.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $category
   *   (optional) The category in the admin UI where the webform will be
   *   listed.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $description
   *   (optional) A brief description of the webform element.
   * @param bool $hidden
   *   (optional) Flag that defines hidden element.
   * @param bool $multiline
   *   (optional) Flag that defines multiline element.
   * @param bool $composite
   *   (optional) Flag that defines composite element.
   * @param bool $states_wrapper
   *   (optional) Flag that defines if #states wrapper should applied be to
   *   the element.
   * @param bool $deprecated
   *   (optional) Flag that indicates the element has been deprecated.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup|string $deprecated_message
   *   (optional) Deprecated message.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly string $api = '',
    public readonly array $dependencies = [],
    public readonly ?TranslatableMarkup $label = NULL,
    public readonly string $default_key = '',
    public readonly TranslatableMarkup|string $category = '',
    public readonly TranslatableMarkup|string $description = '',
    public readonly bool $hidden = FALSE,
    public readonly bool $multiline = FALSE,
    public readonly bool $composite = FALSE,
    public readonly bool $states_wrapper = FALSE,
    public readonly bool $deprecated = FALSE,
    public readonly TranslatableMarkup|string $deprecated_message = '',
    public readonly ?string $deriver = NULL,
  ) {}

}
