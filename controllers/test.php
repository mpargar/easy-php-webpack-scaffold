<?php
  include_once "libs/utils.php";
  /**
   * This is a test controller for api/v1/test
  */
  class Test
  {

    public $utils;

    function __construct () {
      $this->utils = new Utils();
    }
    /**
     * This methods are automatically casted on the route this class was instanced.
     * I recommend get all your body / formdata inside of the function.
     *
     * 
     * GET Method description
     * 
     * @param string parameName Description
     * @return json Description
     *
     */
    public function GET() {
      $statusCode = 200;
      $response = array("data" => "Some data from GET", "message" => "This is a GET message");
      $this->utils->jsonResponse($statusCode, $response);
    }
    /**
     * POST Method Description
     * 
     * @param string parameName Description
     * @return json Description
     *
     */
    public function POST() {
      $statusCode = 200;
      $response = array("data" => "Some data from POST", "message" => "This is a POST Message");
      $this->utils->jsonResponse($statusCode, $response);
    }
    /**
     * PUT Method Description
     * 
     * @param string parameName Description
     * @return json Description
     *
     */
    public function PUT() {
      $statusCode = 500; // This is an error code
      $response = array("data" => "Some data from PUT", "message" => "This is a PUT error");
      $this->utils->jsonResponse($statusCode, $response);
    }
  }