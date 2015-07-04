<?php

/**
 * Archive Forum Content Part
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<div id="bbpress-forums">

	<?php do_action( 'bbp_template_before_forums_index' ); ?>
    
    <a href="<?php echo esc_url( home_url( '/nytt-amne/' ) ); ?>" title="Skapa ett nytt ämne i forumet" class="btn btn-primary bbp-new-topic-btn"><i class="fa fa-plus-square"></i> Nytt ämne</a>

	<?php if ( bbp_has_forums() ) : ?>

		<?php bbp_get_template_part( 'loop',     'forums'    ); ?>

	<?php else : ?>

		<?php bbp_get_template_part( 'feedback', 'no-forums' ); ?>

	<?php endif; ?>
    
    <a href="<?php echo esc_url( home_url( '/nytt-amne/' ) ); ?>" title="Skapa ett nytt ämne i forumet" class="btn btn-primary bbp-new-topic-btn"><i class="fa fa-plus-square"></i> Nytt ämne</a>

	<?php do_action( 'bbp_template_after_forums_index' ); ?>

</div>
