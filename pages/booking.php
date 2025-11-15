<?php include 'includes/header.php'; ?>
<?php include 'includes/db.php'; ?>

<h1>Book Your Appointments</h1>

<!-- Booking form -->
 <form id="bookingForm" action="../handlers/handle_booking.php" method="post">
    <!-- Customer Info -->
    <label for="name">Full Name:</label>
    <input type="text" id="name" name="customer_name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="customer_email" required>

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="customer_phone" required>

    <!-- Service Selection -->
    <label for="service">Select Service:</label>
    <select id="service" name="service_id" required>
        <option value="">-- Choose a service --</option>
        <?php
        // Fetch services from the database
        $services = $conn->query("SELECT * FROM services");
        while($row = $services->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']} ({$row['duration_minutes']} min) - \${$row['price']}</option>";
        }
        ?>
    </select>

    <!-- Barber Selection -->
    <label for="barber">Select Barber:</label>
    <select id="barber" name="barber_id" required>
        <option value="">-- Choose a barber --</option>
        <?php
        // Fetch barbers from the database
        $barbers = $conn->query("SELECT * FROM barbers");
        while($row = $barbers->fetch_assoc()) {
            echo "<option value='{$row['id']}'>{$row['name']}</option>";
        }
        ?>
    </select>

    <!-- Appointment Date and Time -->
    <label for="date">Select Date:</label>
    <input type="date" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">

    <label for="time">Select Time Slot:</label>
    <select name="time_slot" id="time" required>
        <option value="">--Select a date first --</option>
    </select>

    <button type="submit">Book Appointment</button>

 </form>

 <script src="../assets/js/booking.js"></script>
<?php include 'includes/footer.php'; ?>