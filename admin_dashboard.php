<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Wonder Sri Lanka</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Admin Panel Wrapper Start -->
    <div class="admin-panel">
        
        <!-- Sidebar Start -->
        <aside class="sidebar">
            <div class="sidebar-logo">
                <h3>Admin Panel</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="admin_destination.php"><i class="fa fa-map-marker"></i> Manage Destinations</a></li>
                <li><a href="#"><i class="fa fa-users"></i> User Management</a></li>
                <li><a href="#"><i class="fa fa-calendar"></i> Bookings</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> Messages</a></li>
                <li><a href="#"><i class="fa fa-file-text"></i> Blog Management</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </aside>
        <!-- Sidebar End -->
         
        <!-- Main Content Start -->
        <main class="main-content">
            <header class="admin-header">
                <h2>Welcome, Admin!</h2>
                <div class="header-right">
                    <a href="#"><i class="fa fa-bell"></i> Notifications</a>
                    <a href="#"><i class="fa fa-user"></i> Profile</a>
                </div>
            </header>

            <!-- Dashboard Widgets -->
            <section class="dashboard">
                <div class="dashboard-widgets">
                    <div class="widget">
                        <h3>Destinations</h3>
                        <p>25 Destinations</p>
                        <i class="fa fa-map-marker widget-icon"></i>
                    </div>
                    <div class="widget">
                        <h3>Users</h3>
                        <p>150 Users</p>
                        <i class="fa fa-users widget-icon"></i>
                    </div>
                    <div class="widget">
                        <h3>Bookings</h3>
                        <p>42 Bookings</p>
                        <i class="fa fa-calendar widget-icon"></i>
                    </div>
                    <div class="widget">
                        <h3>Messages</h3>
                        <p>8 New Messages</p>
                        <i class="fa fa-comments widget-icon"></i>
                    </div>
                </div>
            </section>

            <!-- Content Management Section -->
            <section class="content-management">
                <h3>Recent Activity</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Activity</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New destination added: Sigiriya</td>
                            <td>2024-11-12</td>
                            <td><span class="status complete">Complete</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>New user registered</td>
                            <td>2024-11-11</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Booking updated: #12345</td>
                            <td>2024-11-10</td>
                            <td><span class="status in-progress">In Progress</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </main>
        <!-- Main Content End -->

    </div>
    <!-- Admin Panel Wrapper End -->

</body>
</html>
