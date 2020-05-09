<?php
  /**
   * Small snippets or functions to make easy your development.
   */
  class Utils {
    /**
     * Generates a JSON response for the API.
     * @param int $statusCode 
     * @param array $response This should be an a associative array
    */
    public function jsonResponse($statusCode, $response) {
      header('Content-Type: application/json');
      http_response_code($statusCode);
      echo json_encode($response);
    }
  }