<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-wrap">
        <header class="top-line">
            <a class="brand" href="index.php">Registration</a>
            <span class="small-label">Registration</span>
        </header>

        <section class="signup-card">
            <div class="card-heading">
                <p class="eyebrow">Registration</p>
                <p>Enter your details to continue.</p>
            </div>

            <form action="register_process.php" method="post">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" for="fname">First name</label>
                        <input class="form-control" id="fname" name="fname" type="text" autocomplete="given-name" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="lname">Last name</label>
                        <input class="form-control" id="lname" name="lname" type="text" autocomplete="family-name" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="email" autocomplete="email" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="password">Password</label>
                        <div class="password-line">
                            <input class="form-control" id="password" name="password" type="password" minlength="5" maxlength="20" autocomplete="new-password" required>
                            <button class="password-button" type="button" data-password="password">Show</button>
                        </div>
                        <div class="form-text">Use 5–20 characters with uppercase, lowercase, and a number.</div>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="cpassword">Confirm password</label>
                        <div class="password-line">
                            <input class="form-control" id="cpassword" name="cpassword" type="password" minlength="5" maxlength="20" autocomplete="new-password" required>
                            <button class="password-button" type="button" data-password="cpassword">Show</button>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="gender">Gender</label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">Select one</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="birthday">Birthday</label>
                        <input class="form-control" id="birthday" name="birthday" type="date" required>
                    </div>

                    <div class="col-12">
                        <label class="form-label" for="course">Course</label>
                        <select class="form-select" id="course" name="course" required>
                            <option value="">Select your course</option>
                            <option value="Bachelor of Information Technology">BSIT — Bachelor of Information Technology</option>
                            <option value="Bachelor of Education">BSED — Bachelor of Education</option>
                            <option value="Criminology">BSCRIM — Criminology</option>
                            <option value="Bachelor of Computer Science">BSCS — Bachelor of Computer Science</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-purple w-100" type="submit">Check my details</button>
                    </div>
                </div>
            </form>
        </section>

        <p class="page-note">Simple registration form.</p>
    </main>

    <script>
        const passwordButtons = document.querySelectorAll("[data-password]");

        passwordButtons.forEach((button) => {
            button.addEventListener("click", () => {
                const passwordField = document.getElementById(button.dataset.password);
                const isVisible = passwordField.type === "text";

                passwordField.type = isVisible ? "password" : "text";
                button.textContent = isVisible ? "Show" : "Hide";
            });
        });
    </script>
</body>
</html>
