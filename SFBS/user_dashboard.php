<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Dashboard Layout */
        body {
            display: flex;
            height: 100vh;
            background-color: #f4f4f9;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #ecf0f1;
        }

        .sidebar a {
            text-decoration: none;
            color: #ecf0f1;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            display: block;
            text-align: center;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        /* Main Content */
        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: #34495e;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            border-radius: 5px;
        }
        .container {
            text-align: center;
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
        }
        .container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>User Dashboard</h2>
        <a href="book_ground.php">🏟️ Booking Ground</a>
        <a href="payment.html">Payment</a>
        <a href="booking_history.php">Booking History</a>
        <a href="logout.php">🚪 Logout</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            Welcome to the Sports Facility Booking System
        </div>
        <div class="container">
        <p style="margin-top: 20px; text-align: center;">Wanna Play!! Click "Booking Ground" to book a sports ground.</p>
        <img src="pic2.jpg" alt="Sports Facility">
        </div>
        
    </div>
</body>
</html>
