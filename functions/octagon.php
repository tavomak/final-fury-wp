<?php
function render_octagon($args) {
  $defaults = array(
    'icon' => null,
    'text' => '',
    'type' => 'button',
    'onClick' => null,
    'variant' => false,
  );

  $props = wp_parse_args($args, $defaults);
  extract($props);

  $typeAttr = $type ? 'submit' : 'button';

  $className = 'btn';

  $outerClassName = $variant ? 'outerVariant' : 'outer';
  $innerClassName = $variant ? 'innerVariant' : 'inner';

  ob_start();
  ?>
  <button type="<?php echo esc_attr($typeAttr); ?>" class="<?php echo esc_attr($className); ?>" onClick="<?php echo esc_attr($onClick); ?>">
    <div class="<?php echo esc_attr($outerClassName); ?>">
      <span class="<?php echo esc_attr($innerClassName); ?>">
        <?php if ($icon) : ?>
          <span class="me-2">
            <?php echo wp_kses_post($icon); ?>
          </span>
        <?php endif; ?>
        <?php echo esc_html($text); ?>
      </span>
    </div>
  </button>
  <?php
  return ob_get_clean();
}
?>