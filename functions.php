<?php
include_once 'db/dbConfig.php'

function login($email, $password, $mysqli){
	if ($stmt = $mysqli->prepare("SELECT userID, email, password 
        FROM username WHERE email = ? LIMIT 1")) {
        $stmt->bind_param('s', $email);  // Bind "$email" to parameter.
        $stmt->execute();    // Execute the prepared query.
        $stmt->store_result();
 
        // get variables from result.
        $stmt->bind_result($db_userID, $db_email, $db_password,);
        $stmt->fetch();
 
        if ($stmt->num_rows == 1) {
                if ($db_password == $password) {
                    $_SESSION['username'] = $email;
                    $_SESSION['user_id'] = $user_ID;
                    $_SESSION['password'] = $db_password;
                    return true;
                } else {
                    return false;
                }
        } else {
            // No user exists.
            return false;
        }
    }
}

function login_check($mysqli) {
    // Check if all session variables are set 
    if (isset($_SESSION['user_id'], 
                        $_SESSION['username'])) {

        $user_id = $_SESSION['user_id'];
        $user_password = $_SESSION['password'];
 
        if ($stmt = $mysqli->prepare("SELECT password 
                                      FROM user 
                                      WHERE id = ? LIMIT 1")) {
            $stmt->execute();   // Execute the prepared query.
            $stmt->store_result();
 
            if ($stmt->num_rows == 1) {
                // If the user exists get variables from result.
                $stmt->bind_result($password);
                $stmt->fetch();
 
                if ($user_password == $password) {
                    // Logged In!!!! 
                    return true;
                } else {
                    // Not logged in 
                    return false;
                }
            } else {
                // Not logged in 
                return false;
            }
        } else {
            // Not logged in 
            return false;
        }
    } 
    else {
        // Not logged in 
        return false;
    }
}