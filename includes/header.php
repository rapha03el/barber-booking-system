<?php 
//start session, would be needed if I track logged-in users
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Barber Booking System</title>
        <link rel="stylesheet" href="assets/css/styles.css">
    </head>

    <body>
        <!-- Navigation Bar -->
         <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="index.php">Heritage ✂️uts</a>
                </div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/services.php">Services</a></li>
                    <li><a href="pages/booking.php">Book Now</a></li>
                    <li><a href="pages/cancel.php">Cancel / Reschedule</a></li>
                    <li><a href="admin/login.php">Admin</a></li>
                </ul>
            </nav>
         </header>

         <!-- Page Content Starts Here -->
          <main>
    </body>