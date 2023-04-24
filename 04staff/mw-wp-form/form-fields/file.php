<?php
/**
 * @package mw-wp-form
 * @author inc2734
 * @license GPL-2.0+
 */
?>
<label for="<?php echo esc_attr( $id ); ?>" class="btn-base btn-blue is-small">ファイルを選択<input type="file"
	name="<?php echo esc_attr( $name ); ?>"
	<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
	<?php echo MWF_Functions::generate_input_attribute( 'class', $class ); ?>
/></label>
<p data-mwform-file-delete="<?php echo esc_attr( $name ); ?>" class="mwform-file-delete">&times;</p>