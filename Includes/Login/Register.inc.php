<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/includes/MSSQLConnectionClass.php';
include_once $path . '/Config.php';
$conn = new MSSQLConnectionClass('192.185.6.35', 'hanoncs_securelogin');

$error_msg = "";

if (isset($_POST['username'], $_POST['email'], $_POST['p'])) {
    // Sanitize and validate the data passed in
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }

    $password = filter_input(INPUT_POST, 'p', FILTER_SANITIZE_STRING);
    if (strlen($password) != 128) {
        // The hashed pwd should be 128 characters long.
        // If it's not, something really odd has happened
        $error_msg .= '<p class="error">Invalid password configuration.</p>';
    }

    // Username validity and password validity have been checked client side.
    // This should should be adequate as nobody gains any advantage from
    // breaking these rules.
    //

    $sql = "SELECT Top(1) id FROM hanoncs_SecureLogin.Hanoncs_Hanoncs.members WHERE email = '".$email."'";
    $stmt = $conn->ExecuteScalar($sql);

    // check existing email
    if ($stmt > 0) {
        // A user with this email address already exists
        $error_msg .= '<p class="error">A user with this email address already exists.</p>';

    }





    // check existing username
    $sql = "SELECT Top(1) id FROM hanoncs_SecureLogin.Hanoncs_Hanoncs.members WHERE username = '".$username."'";
    $stmt = $conn->ExecuteScalar($sql);
    if ($stmt > 0) {
        // A user with this username already exists
        $error_msg .= '<p class="error">A user with this username already exists</p>';

    }


    // TODO:
    // We'll also have to account for the situation where the user doesn't have
    // rights to do registration, by checking what type of user is attempting to
    // perform the operation.

    if (empty($error_msg)) {
        // Create a random salt
        //$random_salt = hash('sha512', uniqid(openssl_random_pseudo_bytes(16), TRUE)); // Did not work
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

        // Create salted password
        $password = hash('sha512', $password . $random_salt);

        // Insert the new user into the database
        $stmt = $conn->Insert("INSERT INTO hanoncs_SecureLogin.Hanoncs_Hanoncs.members (username, email, password, salt) VALUES ('$username', '$email', '$password', '$random_salt')");

        // Execute the prepared query.
        if(!$stmt) {
            header('Location: ../../loginerror.php?err=Registration failure: INSERT');
        }
        else
        {
            //frees up the statement
            sqlsrv_free_stmt($stmt );
            header('Location: ./registersuccess.php');
        }




    }
}