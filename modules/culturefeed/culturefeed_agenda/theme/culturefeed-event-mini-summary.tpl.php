<?php
/**
 * @file
 * Template for the mini summary of an event.
 */
?>

<h4><a href="<?php print $url ?>"><?php print $title; ?></a></h4>
<?php if (!empty($themes)): ?>
<p><?php print $themes[0] ?></p>
<?php endif; ?>

<p>
<?php if (isset($location['city'])): ?>
<?php print $location['city']; ?>
<?php endif;?>
<?php if (isset($when)): ?>
, <?php print $when; ?>
<?php endif;?>
</p>

<hr />
