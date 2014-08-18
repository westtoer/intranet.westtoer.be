<?php

/**
 * Class to represent a basic HTTP request response.
 */
class CultureFeed_HttpResponse {

  /**
   * HTTP response status code.
   *
   * @var integer
   */
  public $code;

  /**
   * HTTP response body.
   *
   * @var string
   */
  public $response;

  const ERROR_CODE_ACCESS_DENIED = 'ACCESS_DENIED';

  /**
   * Constructor for a new CultureFeed_OAuthResponse instance.
   *
   * @param integer $code
   *   HTTP response status code.
   * @param string $response
   *   HTTP response body.
   */
  public function __construct($code, $response) {
    $this->code = $code;
    $this->response = $response;
  }

  /**
   * Get the status code.
   */
  public function getStatusCode() {
    return $this->code;
  }

}
