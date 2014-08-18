<?php

require 'common.php';

if (!isset($_COOKIE['key'])) {
  header('Location: setup.php');
  exit();
}

?>

<?php if (!isset($_COOKIE['oauth_token'])) : ?>

  <p><a href="setup.php">Setup</a></p>
  <p><a href="connect.php">Connect</a></p>

  <?php exit(); ?>

<?php endif; ?>

<?php

$base_url = 'http://' . $_SERVER['HTTP_HOST'] . rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/') . '/';

$cf = new CultureFeed(new CultureFeed_DefaultOAuthClient($_COOKIE['key'], $_COOKIE['secret'], $_COOKIE['oauth_token'], $_COOKIE['oauth_token_secret']));

$uid = $_COOKIE['oauth_user'];

?>

<p><a href="setup.php">Setup</a></p>
<p><a href="logout.php">Log out on client</a></p>
<p><a href="<?php print $cf->getUrlLogout($base_url) ?>">Log out on server</a></p>
<p><a href="<?php print $cf->getUrlChangePassword($uid, $base_url) ?>">Change password</a></p>
<p><a href="<?php print $cf->getUrlAddSocialNetwork('twitter', $base_url) ?>">Connect with Twitter</a></p>
<p><a href="<?php print $cf->getUrlAddSocialNetwork('facebook', $base_url) ?>">Connect with Facebook</a></p>
<p><a href="<?php print $cf->getUrlAddSocialNetwork('google', $base_url) ?>">Connect with Google</a></p>

<?php

$actions = array();

$actions['updateUser']                    = 'updateUser';
$actions['deleteUser']                    = 'deleteUser';
$actions['getUser']                       = 'getUser';
$actions['searchUsers']                   = 'searchUsers';
$actions['getSimilarUsers']               = 'getSimilarUsers';
$actions['uploadUserDepiction']           = 'uploadUserDepiction';
$actions['resendMboxConfirmationForUser'] = 'resendMboxConfirmationForUser';
$actions['updateUserPrivacy']             = 'updateUserPrivacy';
$actions['getUserServiceConsumers']       = 'getUserServiceConsumers';
$actions['revokeUserServiceConsumer']     = 'revokeUserServiceConsumer';
$actions['getTopEvents']                  = 'getTopEvents';
$actions['getRecommendationsForUser']     = 'getRecommendationsForUser';
$actions['getRecommendationsForEvent']    = 'getRecommendationsForEvent';

?>

<form action="" method="get">
  <select name="action" id="action">
    <?php foreach ($actions as $action => $title) : ?>
      <option value="<?php print $action ?>" <?php if (isset($_GET['action']) && $_GET['action'] == $action) : ?>selected<?php endif ?>><?php print $title ?></option>
    <?php endforeach ?>
  </select>
  <input type="submit" name="submit" value="Submit" />
</form>


<?php

require 'examples.inc.php';

?>