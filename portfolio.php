<?php
// Get data safely
$name = htmlspecialchars($_GET['name'] ?? '');
$profession = htmlspecialchars($_GET['profession'] ?? '');
$about = htmlspecialchars($_GET['about'] ?? '');
$skills = isset($_GET['skills']) ? explode(",", $_GET['skills']) : [];
$projects = isset($_GET['projects']) ? explode(",", $_GET['projects']) : [];

$education = htmlspecialchars($_GET['education'] ?? '');
$certificates = isset($_GET['certificates']) ? explode(",", $_GET['certificates']) : [];

$profileImage = $_GET['profileImage'] ?? '';
$projectImage = $_GET['projectImage'] ?? '';
$certificateImage = $_GET['certificate'] ?? '';

$style = $_GET['style'] ?? 'light';
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $name; ?>'s Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="<?php echo $style; ?>">

<div class="portfolio">

    <!-- HEADER SECTION -->
    <div class="header">
        <?php if($profileImage != ""): ?>
            <img src="<?php echo $profileImage; ?>" class="profile-img">
        <?php endif; ?>

        <div>
            <h1><?php echo $name; ?></h1>
            <h2><?php echo $profession; ?></h2>
        </div>
    </div>

    <!-- ABOUT -->
    <section>
        <h3>About Me</h3>
        <p><?php echo $about; ?></p>
    </section>

    <!-- SKILLS -->
    <?php if(!empty($skills)): ?>
    <section>
        <h3>Skills</h3>
        <ul>
            <?php foreach($skills as $skill): ?>
                <li><?php echo htmlspecialchars(trim($skill)); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    <?php endif; ?>

    <!-- PROJECTS -->
    <?php if(!empty($projects)): ?>
    <section>
        <h3>Projects</h3>
        <ul>
            <?php foreach($projects as $project): ?>
                <li><?php echo htmlspecialchars(trim($project)); ?></li>
            <?php endforeach; ?>
        </ul>

        <?php if($projectImage != ""): ?>
            <h4>Project Preview</h4>
            <img src="<?php echo $projectImage; ?>" class="project-img">
        <?php endif; ?>
    </section>
    <?php endif; ?>

    <!-- EDUCATION -->
    <?php if($education != ""): ?>
    <section>
        <h3>Education</h3>
        <p><?php echo $education; ?></p>
    </section>
    <?php endif; ?>

    <!-- CERTIFICATES -->
    <?php if($certificates != ""): ?>
    <section>
        <h3>Certificates</h3>
        <ul>
            <?php foreach($certificates as $certificate): ?>
                <li><?php echo htmlspecialchars(trim($certificate)); ?></li>
            <?php endforeach; ?>
        </ul>

        <?php if($certificateImage != ""): ?>
            <h4>Certifications</h4>
            <img src="<?php echo $certificateImage; ?>" class="certify">
        <?php endif; ?>
    </section>
    <?php endif; ?>

    <!-- BUTTONS -->
    <div class="actions">
        <button onclick="toggleTheme()">Toggle Theme</button>
        <button onclick="window.location.href='user.html'">Create New</button>
    </div>

</div>

<script src="script.js"></script>

<script>
function toggleTheme() {
    document.body.classList.toggle("dark");
    document.body.classList.toggle("light");
}
</script>

</body>
</html>
