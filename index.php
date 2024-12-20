<?php
$cvGenerated = false;
$name = $email = $phone = $skills = "";
$education = $experience = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $cvGenerated = true;
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    $education = array_map(null, $_POST['degree'], $_POST['institution'], $_POST['edu_date'], $_POST['marks']);
    $experience = array_map(null, $_POST['job_title'], $_POST['company'], $_POST['work_date']);
    $skills = htmlspecialchars($_POST['skills']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Builder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Create Your CV</h1>
    <?php include 'form.html'; ?>

    <?php if ($cvGenerated): ?>
        <div class="cv-template">
            <h2 align="center"><?php echo $name; ?></h2>
            <h3>Contacts</h3>
            <p>Email: <?php echo $email; ?></p>
            <p>Phone: <?php echo $phone; ?></p>
            <hr class="section-divider">

            <h3>Education</h3>
            <ul>
                <?php foreach ($education as $edu) : ?>
                    <li><?php echo $edu[0] . " from " . $edu[1] . " (" . $edu[2] . ") - Marks: " . $edu[3]; ?></li>
                <?php endforeach; ?>
            </ul>
            <hr class="section-divider">

            <h3>Work Experience</h3>
            <ul>
                <?php foreach ($experience as $exp) : ?>
                    <li><?php echo $exp[0] . " at " . $exp[1] . " (" . $exp[2] . ")"; ?></li>
                <?php endforeach; ?>
            </ul>
            <hr class="section-divider">

            <h3>Skills</h3>
            <p><?php echo nl2br($skills); ?></p>
        </div>
    <?php endif; ?>
</div>
<script src="script.js"></script>
</body>
</html>

