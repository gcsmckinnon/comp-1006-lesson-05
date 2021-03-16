<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Validation, Sanitization, and Normalization</title>
  </head>

  <body>
    <div class="container">
      <header class="jumbotron my-5">
        <h1 class="display-4">Validation, Sanitization, and Normalization</h1>
        <p class="lead">Stopping your user from screwing up your application...</p>
        <hr class="my-4">
        <p>
          <strong class="text-danger">Validation</strong> tells you if the data is valid.
          <br><strong class="text-warning">Sanitization</strong> ensures the data is pure.
          <br><strong class="text-success">Normalization</strong> guarantees the data is in the right format.
        </p>
      </header>

      <section class="mb-5">
        <form action="./insert.php" method="post" novalidate>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="first_name">First Name:</label>
                <input class="form-control" type="text" name="first_name" required placeholder="Herman">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input class="form-control" type="text" name="last_name" required placeholder="Munster">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="herman.munster@mockingbird.com" required>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label for="tel">Phone:</label>
                <div class="row">
                  <div class="col-3">
                    <input class="form-control" type="tel" name="country_code" placeholder="+1" required>
                  </div>

                  <div class="col-4">
                    <input class="form-control" type="tel" name="area_code" placeholder="555" required>
                  </div>

                  <div class="col-5">
                    <input class="form-control" type="tel" name="phone_number" placeholder="555-5555" required>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="address_1">Address Line 1:</label>
                <input class="form-control" type="text" name="address_1" placeholder="1313 Mockingbird Lane" required>
              </div>

              <div class="form-group">
                <label for="address_2">Address Line 2:</label>
                <input class="form-control" type="text" name="address_2" placeholder="Unit #42">
              </div>
            </div>

            <div class="col">
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="city">City:</label>
                    <input class="form-control" type="text" name="city" placeholder="Mockingbird Heights" required>
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="province">Province/State:</label>
                    <input class="form-control" type="text" name="province" placeholder="California" required>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="country">Country:</label>
                    <input class="form-control" type="text" name="country" placeholder="United States" required>
                  </div>
                </div>

                <div class="col">
                  <div class="form-group">
                    <label for="postal_code">Postal/Zip Code:</label>
                    <input class="form-control" type="text" name="postal_code" placeholder="13131" required>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group form-check">
            <input class="form-check-input" type="checkbox" name="opt_in" value="yes">
            <label class="form-check-label" for="opt_in">Subscribe to our newsletter?</label>
          </div>

          <button class="btn btn-primary" type="submit">Sign Up</button>
          <button class="btn btn-light text-danger ml-3" type="reset">Reset</button>
        </form>
      </section>
    </div>
  </body>
</html>