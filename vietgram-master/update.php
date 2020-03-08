<?php
session_start();
include('koneksi.php');
    $new_name = $_POST['name'];
    $new_username = $_POST['username'];
    $new_website = $_POST['website'];
    $new_bio = $_POST['bio'];
    $new_email = $_POST['email'];
    $new_phone = $_POST['number_phone'];
    $new_gender = $_POST['gender'];
    // echo $new_bio;
    // di assign null biar bisa di ganti
    $queryUpdate = "UPDATE profile SET name = '".$new_name."', username = '".$new_username."', 
                    bio = '".$new_bio."', email = '".$new_email."', 
                    number_phone = '".$new_phone."', gender = '".$new_gender."', 
                    website = '".$new_website."' WHERE username = '".$_SESSION['username']."'";
    // echo $queryUpdate;
    if(mysqli_query($koneksi,$queryUpdate))
    {
        $_SESSION["name"] = $new_name;
        $_SESSION["username"] = $new_username;
        $_SESSION["website"] = $new_website;
        $_SESSION["bio"] = $new_bio;
        $_SESSION["email"] = $new_email;
        $_SESSION["number_phone"] = $new_phone;
        $_SESSION["gender"] = $new_gender;
        
        header("location:feed.php");
    } 

    else 
    {
        // echo "error";
         header("location:edit-profile.php");
    }
?>