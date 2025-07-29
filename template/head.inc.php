<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <title>Michiel Nijenhuis</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio of Michiel Nijenhuis, a developer with passion in programming.">
    <meta name="keywords" content="Michiel Nijenhuis, webdeveloper, software developer, portfolio, HTML, CSS, Tailwind, JavaScript, php, portfolio website">
    <meta name="author" content="Michiel Nijenhuis">

    <link rel="stylesheet" href="css/output.css">
    <link rel="icon" type="image/x-icon" href="img/icons/favicon.ico">
</head>

<body class="font-inter text-white bg-background">
    <nav class="w-full border-b border-border-custom fixed top-0 bg-background/20 backdrop-blur-sm z-50" id="navbar">
        <div class="px-4 relative flex max-w-screen-lg mx-auto flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
            <a href="index.php#home" class="h-10 w-max shrink-0"><img class="h-10 w-auto" src="img/MN_logo.png"
                alt="Michiel Nijenhuis logo"></a>
            <input class="peer hidden" type="checkbox" id="navbar-open" />
            <label class="absolute right-0 mt-2 mr-4 cursor-pointer text-xl sm:hidden z-50" for="navbar-open">
                <span class="sr-only">Toggle Navigation</span>
                <img class="w-7" src="img/HamburgerIcon.png" alt="Hamburgen icon">
            </label>
            <div class="transition-max-height duration-500 ease-linear overflow-hidden max-h-0 peer-checked:max-h-96">
                <nav aria-label="Header Navigation" class="pl-2 py-6 sm:block sm:py-0">
                    <ul class="flex flex-col sm:flex-row text-xl">
                        <li class="my-2"><a class="nav-link block w-full font-bold nav-link transition-all duration-200 ease-out px-4 mobile-link"
                            href="index.php#about_me">ABOUT ME</a></li>
                        <li class="my-2"><a class="nav-link block w-full font-bold nav-link transition-all duration-200 ease-out px-4 mobile-link"
                            href="index.php#contact">CONTACT</a></li>
                        <li class="my-2"><a class="nav-link block w-full font-bold nav-link transition-all duration-200 ease-out px-4 mobile-link"
                               href="projects.php">PROJECTS</a></li>
                    </ul>
                </nav>
            </div>
            <div class="hidden sm:flex w-max font-bold text-lg">
                <a href="index.php#about_me" class="w-max px-4 transition-all duration-200 ease-out nav-link">ABOUT ME</a>
                <a href="index.php#contact" class="w-max px-4 transition-all duration-200 ease-out nav-link">CONTACT</a>
                <a href="projects.php" id="project" class="w-max px-4 transition-all duration-200 ease-out nav-link">PROJECTS</a>
            </div>
        </div>
    </nav>

    <div class="h-[73px]" id="<?php if($_SERVER['PHP_SELF'] === "/projects.php") {echo "project" ;} else {echo "home" ;} ?>"></div>
