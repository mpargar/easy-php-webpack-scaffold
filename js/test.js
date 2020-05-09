/**
 * Test JS file, this file is included on your test.php view.
 */
const { testServices } = require("./utils/services"); // This is how you import data.
/* Axios HTTP request examples */
testServices
  .post()
  .then((response) => {
    console.log("POST REQUEST: ", response);
  })
  .catch((error) => {
    console.log(error);
  });
testServices
  .get()
  .then((response) => {
    console.log("GET REQUEST: ", response);
  })
  .catch((error) => {
    console.log(error);
  });
testServices
  .put()
  .then((response) => {})
  .catch((error) => {
    console.error("ITS AN ERROR : ( ", error);
  });
