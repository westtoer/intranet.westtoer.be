<?php

class CultureFeed_Uitpas_Event_Query_SearchTicketSalesOptions extends CultureFeed_Uitpas_ValueObject {

  /**
   * The uid of the passholder
   *
   * @var string
   */
  public $uid;

  /**
   * Begin date
   *
   * @var integer
   */
  public $startDate;

  /**
   * End date
   *
   * @var integer
   */
  public $endDate;

  /**
   * Search for events with a given location ID
   *
   * @var string
   */
  public $cdbid;

  /**
   * Consumer key of the counter
   *
   * @var string
   */
  public $balieConsumerKey;


  /**
   * The origanizer of the event
   *
   * @var string
   */
  public $organizer;

  /**
   * The city of the event
   *
   * @var string
   */
  public $city;



  /**
   * Results offset.
   *
   * @var integer
   */
  public $start;

  /**
   * Maximum number of results.
   *
   * @var integer
   */
  public $max;

  protected function manipulatePostData(&$data) {
    if (isset($data['startDate'])) {
      $data['startDate'] = date('c', $data['startDate']);
    }

    if (isset($data['endDate'])) {
      $data['endDate'] = date('c', $data['endDate']);
    }
  }

}
