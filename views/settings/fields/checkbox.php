<?php
/**
 * Checkbox template.
 *
 * @since 3.0
 *
 * @param array $data {
 *     Checkbox Field arguments.
 *
 *     @type string $id          Field identifier.
 *     @type string $parent      Parent field identifier.
 *     @type string $label       Field label.
 *     @type string $value       Field value.
 *     @type string $description Field description.
 *     @type string $input_attr  Attributes for the input field.
 *     @type array  $warning {
 *         Warning panel content.
 *
 *         @type string $title        Warning title.
 *         @type string $description  Warning description.
 *         @type string $button_label Warning Button label.
 *     }
 * }
 */

defined( 'ABSPATH' ) || die( 'Cheatin&#8217; uh?' );
?>

<div class="wpr-field wpr-field--checkbox <?php echo ($data['parent']) ? 'wpr-field--children' : '';?>">
	<input type="checkbox" id="<?php echo esc_attr( $data['id'] ); ?>" class="" name="wp_rocket_settings[<?php echo esc_attr( $data['id'] ); ?>]" value="1" <?php checked( $data['value'], 1 ); ?>
	<?php echo isset( $data['input_attr'] ) ? $data['input_attr'] : ''; ?>>
	<label for="<?php echo esc_attr( $data['id'] ); ?>" class=""><?php echo $data['label']; ?></label>

	<?php if ( isset( $data['description'] ) ) { ?>
	<div class="wpr-field-description">
		<?php echo esc_html( $data['description'] );?>
	</div>
	<?php } ?>
</div>

<?php if ( ! empty( $data['warning'] ) ) { ?>
	<div class="wpr-fieldWarning">
		<div class="wpr-fieldWarning-title wpr-icon-important">
			<?php echo esc_html( $data['warning']['title'] ); ?>
		</div>
		<?php if ( isset( $data['warning']['description'] ) ) { ?>
			<div class="wpr-fieldWarning-description">
				<?php echo esc_html( $data['warning']['description'] ); ?>
			</div>
		<?php } ?>
		<button class="wpr-button wpr-button--small wpr-button--icon wpr-icon-check"><?php echo esc_html( $data['warning']['button_label'] ); ?></button>
	</div>
<?php } ?>
