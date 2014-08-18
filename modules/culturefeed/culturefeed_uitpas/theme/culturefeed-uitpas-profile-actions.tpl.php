<?php

/**
 * @file
 * Default theme implementation to display culturefeed uitpas profile actions.
 *
 * Available variables:
 * - $actions_form: Form to set publishing of actions.
 * - $intro: Intro text.
 * - $actions_table: The list of actions.
 */
?>
<?php if ($activity_preferences_form): ?>
<div class="activity-preferences-form">
  <?php print $activity_preferences_form; ?>
</div>
<?php endif; ?>
<div class="profile_actions">
  <?php if ($intro): ?>
  <div class="intro">
  <?php print $intro; ?>
  </div>
  <?php endif; ?>
  <?php print $actions_table; ?>
</div>
