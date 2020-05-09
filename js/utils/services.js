/**
 * Heres an example of how to:
 * * Export a js object / variable
 * * Organize and comment your services as functions.
 */
const axios = require("axios"); // https://www.npmjs.com/package/axios <-- Axios docs
const apiURL = `${location.origin}/api/v1/`;
module.exports = {
  /* Diferent methods from the testService. */
  testServices: {
    /**
     * GET method that allows you to test.
     * @param {object} parameters
     * @param {string} parameter.example Example of a key from the parammeters
     * @param {int} parameter.exampleId Example of a key from the parameters
     * @response axios promise
     * */
    get: (parameters) => axios.get(apiURL + "test"),
    /**
     * POST method that allows you to test.
     * @param {object} parameters
     * @param {string} parameter.example Example of a key from the parammeters
     * @param {int} parameter.exampleId Example of a key from the parameters
     * @response axios promise
     * */
    post: (parameters) => axios.post(apiURL + "test"),
    /**
     * PUT method that allows you to test.
     * @param {object} parameters
     * @param {string} parameter.example Example of a key from the parammeters
     * @param {int} parameter.exampleId Example of a key from the parameters
     * @response axios promise
     * */
    put: (parameters) => axios.put(apiURL + "test"),
  },
};
