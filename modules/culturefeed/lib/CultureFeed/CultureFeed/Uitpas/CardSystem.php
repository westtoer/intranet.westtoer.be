<?php
/**
 * @file
 */

class CultureFeed_Uitpas_CardSystem
{
    /**
     * @var integer Unique ID of the card system.
     */
    public $id;

    /**
     * @var string Name of the card system.
     */
    public $name;

  /**
   * @var CultureFeed_Uitpas_DistributionKey[] Distributionkeys.
   */
  public $distributionKeys = array();

  /**

   * @param CultureFeed_SimpleXMLElement $object
   *
   * @return CultureFeed_Uitpas_CardSystem
   */
  public static function createFromXML(CultureFeed_SimpleXMLElement $object) {

    $card_system = new static();

    $card_system->id = $object->xpath_int('id');
    $card_system->name = $object->xpath_str('name');

    $card_system->distributionKeys = array();
    foreach ($object->xpath('distributionKeys/distributionKey') as $distributionKey) {
      $card_system->distributionKeys[] = CultureFeed_Uitpas_DistributionKey::createFromXML($distributionKey, FALSE);
    }

    return $card_system;

  }

}
