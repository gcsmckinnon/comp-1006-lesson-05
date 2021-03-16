<?php

  var_dump($_POST);

  // Validating empty fields
  $required_fields = [
    'first_name',
    'last_name',
    'address_1',
    'city',
    'province',
    'country',
    'postal_code',
    'email',
    'country_code',
    'area_code',
    'phone_number'
  ];

  foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
      echo "<br>The {$field} cannot be empty";
      exit;
    }
  }

  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo "<br>The email isn't in a valid format. Please correct it.<br>";
    exit;
  }
  // validation is ok
  
  // Sanitization
  foreach ($required_fields as $field) {
    $_POST[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING);
  }
  $_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  
  // echo $_POST['first_name'];
  // sanitization is meh

  // Normalization
  foreach ($required_fields as $field) {
    if ($field === "email") continue;

    $_POST[$field] = strtolower($_POST[$field]);
    $_POST[$field] = ucwords($_POST[$field]);
  }

  var_dump($_POST);

  // Connect and insert into our DB
  include('_connect.php');
  $conn = connect();

  $sql = "INSERT INTO contacts (
    first_name,
    last_name,
    email,
    country_code,
    area_code,
    phone_number,
    address_1,
    address_2,
    city,
    province,
    country,
    postal_code
  ) VALUES (
    :first_name,
    :last_name,
    :email,
    :country_code,
    :area_code,
    :phone_number,
    :address_1,
    :address_2,
    :city,
    :province,
    :country,
    :postal_code
  )";

  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
  $stmt->bindParam(':country_code', $_POST['country_code'], PDO::PARAM_STR);
  $stmt->bindParam(':area_code', $_POST['area_code'], PDO::PARAM_STR);
  $stmt->bindParam(':phone_number', $_POST['phone_number'], PDO::PARAM_STR);
  $stmt->bindParam(':address_1', $_POST['address_1'], PDO::PARAM_STR);
  $stmt->bindParam(':address_2', $_POST['address_2'], PDO::PARAM_STR);
  $stmt->bindParam(':city', $_POST['city'], PDO::PARAM_STR);
  $stmt->bindParam(':province', $_POST['province'], PDO::PARAM_STR);
  $stmt->bindParam(':country', $_POST['country'], PDO::PARAM_STR);
  $stmt->bindParam(':postal_code', $_POST['postal_code'], PDO::PARAM_STR);

  $stmt->execute();

  if ($stmt->errorCode() !== "00000") {
    echo "There was an issue inserting the row.";
    var_dump($stmt->errorInfo());
  } else {
    echo "The row was inserted successfully";
  }