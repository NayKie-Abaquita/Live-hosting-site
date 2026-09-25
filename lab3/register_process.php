<?php
$fname = $_POST['fname'] ?? '';
$lname = $_POST['lname'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['cpassword'] ?? '';
$gender = $_POST['gender'] ?? '';
$birthday = $_POST['birthday'] ?? '';
$course = $_POST['course'] ?? '';

$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[A-Za-z0-9]{5,20}$/';
$pageTitle = 'Course Signup';
$message = '';

if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($confirmPassword) || empty($gender) || empty($birthday) || empty($course)) {
    $pageTitle = 'Missing details';
    $message = 'Please fill in all the fields.';
} elseif (!preg_match($pattern, $password)) {
    $pageTitle = 'Check your password';
    $message = 'Use 5–20 characters with uppercase, lowercase, and a number.';
} elseif ($password !== $confirmPassword) {
    $pageTitle = 'Passwords do not match';
    $message = 'Please check the confirmation password.';
} else {
    $pageTitle = 'Form checked';
    $message = 'Your details passed the checks.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup Result</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class="page-wrap">
        <header class="top-line">
            <a class="brand" href="index.php">Course Signup</a>
            <span class="small-label">Signup Result</span>
        </header>

        <section class="signup-card">
            <p class="eyebrow">Course Signup</p>
            <h1><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></h1>
            <p class="result-text"><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></p>
            <a class="btn btn-purple w-100" href="register.php">Back to signup</a>
        </section>

        <p class="page-note">Simple course registration for students.</p>
    </main>
</body>
</html>
