<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
<h1>Welcome to Dashboard</h1>
    <nav>
        <a href="#home">Home</a>
        <a href="#events">Events</a>
        <a href="#upcoming-events">Upcoming Events</a>
        <a href="#manage-events">Manage Events</a>
        <a href="#contact-us">Contact Us</a>
    </nav>
</header>

<section id="home">
    <h2>Home</h2>
    <p>This is the home section of the dashboard. You can navigate to other sections using the menu above.</p>
</section>

<section id="events">
    <h2>Events</h2>
    <p>Here you can see all the events listed on the platform.</p>
</section>

<section id="upcoming-events">
    <h2>Upcoming Events</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Event 1</h5>
            <p class="card-text">This is the party for time traveler by stephan - hawking and you are not invited</p>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Event 2</h5>
            <p class="card-text">The Glitch in matrix no one came to this event because time travel is not possible yet</p>
        </div>
    </div>
</section>

<section id="manage-events">
    <h2>Manage Events</h2>
    <p>You can manage your events from this section. Add, edit, or delete events as needed.</p>
</section>

<section id="contact-us">
    <h2>Contact Us</h2>
    <p>For any inquiries, please contact us at <a href="mailto:support@example.com">support@example.com</a>.</p>
</section>
<!--logout Button --> 
<!-- this is button -->
<form action="logout.php" method="POST" style="text-align: right; margin-top: 20px;">
    <button type="submit" style="background-color: #dc3545; color: #fff; padding: 10px 15px; border: none; border-radius: 5px; cursor: pointer;" >Logout</button>
</form>

<footer>
    <p>&copy; 2024 Event Management System. All Rights Reserved.</p>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>