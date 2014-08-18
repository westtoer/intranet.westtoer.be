<?php
/**
 * @file
 */ 

class CultureFeed_Uitpas_Passholder_CardSystemSpecific {

  /**
   * @var CultureFeed_Uitpas_Passholder_Card
   */
  public $currentCard;

  /**
   * The e-mail preference
   *
   * @var string
   */
  public $emailPreference;

  /**
   * The SMS preference
   *
   * @var string
   */
  public $smsPreference;

  /**
   * @var CultureFeed_Uitpas_CardSystem
   */
  public $cardSystem;

  /**
   * @var boolean
   */
  public $kansenStatuut;

  /**
   * @var boolean
   */
  public $kansenStatuutExpired;

  /**
   * @var int
   */
  public $kansenStatuutEndDate;

  /**
   * @var bool
   */
  public $kansenStatuutInGracePeriod;

  /**
   * @var string
   */
  public $status;

  /**
   * @param CultureFeed_SimpleXMLElement $object
   * @return CultureFeed_Uitpas_Passholder_CardSystemSpecific
   */
  public static function createFromXML(CultureFeed_SimpleXMLElement $object) {
    $cardSystemSpecific = new self();
    $cardSystemSpecific->cardSystem = CultureFeed_Uitpas_CardSystem::createFromXml($object->xpath('cardSystem', false));
    $currentCard = $object->xpath('currentCard', false);
    if ($currentCard instanceof CultureFeed_SimpleXMLElement) {
      $cardSystemSpecific->currentCard = CultureFeed_Uitpas_Passholder_Card::createFromXML($currentCard);
    }

    $cardSystemSpecific->emailPreference = $object->xpath_str('emailPreference');
    $cardSystemSpecific->smsPreference = $object->xpath_str('smsPreference');

    $cardSystemSpecific->kansenStatuut = $object->xpath_bool('kansenStatuut');
    $cardSystemSpecific->kansenStatuutExpired = $object->xpath_bool('kansenStatuutExpired');
    $cardSystemSpecific->kansenStatuutEndDate = $object->xpath_time('kansenStatuutEndDate');
    $cardSystemSpecific->kansenStatuutInGracePeriod = $object->xpath_bool('kansenStatuutInGracePeriod');

    $cardSystemSpecific->status = $object->xpath_str('status');

    return $cardSystemSpecific;
  }
}
