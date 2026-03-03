<?php

$name = $_POST['name'];
$profession = $_POST['profession'];
$about = $_POST['about'];
$skills = $_POST['skills'];
$projects = $_POST['projects'];
$education = $_POST['education'];
$certificates = $_POST['certificates'];

$profileImagePath = "";
$project_childrenImagePath = "";

// ===== PROFILE IMAGE =====
if(isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] == 0){

    $profileName = time() . "_" . basename($_FILES["profile_image"]["name"]);
    $profileImagePath = "uploads/" . $profileName;

    move_uploaded_file($_FILES["profile_image"]["tmp_name"], $profileImagePath);
}

// ===== PROJECT IMAGE =====
if(isset($_FILES['project_image']) && $_FILES['project_image']['error'] == 0){

    $projectName = time() . "_" . basename($_FILES["project_image"]["name"]);
    $projectImagePath = "uploads/" . $projectName;

    move_uploaded_file($_FILES["project_image"]["tmp_name"], $projectImagePath);
}

header("Location: portfolio.php?" . http_build_query([
    'name' => $name,
    'profession' => $profession,
    'about' => $about,
    'skills' => $skills,
    'projects' => $projects,
    'education' => $education,
    'certificates' => $certificates,
    'profileImage' => $profileImagePath ?? "",
    'projectImage' => $projectImagePath ?? ""
]));

exit();
?>