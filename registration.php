<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Event Management System</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Event Management System</h1>

        <!-- Toggle Buttons -->
        <div class="text-center toggle-btns">
            <button class="btn btn-primary" id="organizer-btn">Organizer</button>
            <button class="btn btn-primary" id="attendee-btn">Attendee</button>
        </div>

        <!-- Organizer Form -->
        <div id="organizer-form" class="form-container">
            <?php include 'organizer_form.php'; ?>
        </div>

        <!-- Attendee Form -->
        <div id="attendee-form" class="form-container" style="display: none;">
            <?php include 'attendee_form.php'; ?>
        </div>


    </div>

    <script>
        // Toggle visibility of forms and open login modal
        document.getElementById('organizer-btn').addEventListener('click', function () {
            document.getElementById('organizer-form').style.display = 'block';
            document.getElementById('attendee-form').style.display = 'none';
            document.getElementById('login-modal').style.display = 'block'; // Show login modal
        });

        document.getElementById('attendee-btn').addEventListener('click', function () {
            document.getElementById('organizer-form').style.display = 'none';
            document.getElementById('attendee-form').style.display = 'block';
            document.getElementById('login-modal').style.display = 'block'; // Show login modal
        });

        // Modal Close Logic
        const loginModal = document.getElementById('login-modal');
        const modalClose = document.querySelector('.modal-close');

        if (modalClose) {
            modalClose.addEventListener('click', function () {
                loginModal.style.display = 'none';
            });
        }

        window.addEventListener('click', function (e) {
            if (e.target === loginModal) {
                loginModal.style.display = 'none';
            }
        });
    </script>
</body>
</html>
