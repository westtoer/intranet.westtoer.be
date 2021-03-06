<?php

/**
 * @file
 * Callback and handler implementations for administration pages.
 */

/**
 * Configuration form for general settings.
 */
function culturefeed_search_admin_settings() {

  $form['culturefeed_search_api_location'] = array(
    '#type' => 'textfield',
    '#title' => t('Search API location'),
    '#description' => t('The URL where the CultureFeed Search API resides. End with a slash. Example: http://acc.uitid.be/uitid/rest/searchv2/ (acceptance) or http://www.uitid.be/uitid/rest/searchv2/ (production)'),
    '#default_value' => variable_get('culturefeed_search_api_location', CULTUREFEED_SEARCH_API_LOCATION),
  );

  $form['culturefeed_search_api_application_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Application key'),
    '#description' => t('Your CultureFeed Search Application key.'),
    '#default_value' => variable_get('culturefeed_search_api_application_key', ''),
    '#size' => 40,
    '#maxlength' => 40,
  );

  $form['culturefeed_search_api_shared_secret'] = array(
    '#type' => 'textfield',
    '#title' => t('Shared secret'),
    '#description' => t('Your CultureFeed Search Shared Secret.'),
    '#default_value' => variable_get('culturefeed_search_api_shared_secret', ''),
    '#size' => 40,
    '#maxlength' => 40,
  );

  return system_settings_form($form);

}
