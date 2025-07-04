<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/input.css">
    <link rel="stylesheet" href="css/output.css">
    <link rel="icon" type="image/x-icon" href="img/favicon-icon.png">
    <title>Michiel Nijenhuis</title>
</head>
<body class="font-inter text-white bg-background">
    <!-- <nav class="bg-background border-b border-border-custom h-[100px] flex flex-row justify-around items-center"> -->
    <!--     <a href="index.html" class="h-10"><img class="h-full" src="img/MN_logo.png" alt="Michiel Nijenhuis logo"></a> -->
    <!--     <div class="flex gap-5"> -->
    <!--         <a href="" class="text-white font-extrabold text-lg">HOME</a>  -->
    <!--         <a href="index.html#about_me" class="text-white font-extrabold text-lg">ABOUT ME</a>  -->
    <!--         <a href="" class="text-white font-extrabold text-lg">PROJECTS</a>  -->
    <!--         <a href="" class="text-white font-extrabold text-lg">CONTACT</a>  -->
    <!--     </div> -->
    <!-- </nav> -->
    <nav class="w-full border-b border-border-custom fixed top-0 bg-background/20 backdrop-blur-sm z-50" id="navbar">
      <div class="px-4 relative mx-auto flex max-w-screen-lg flex-col py-4 sm:flex-row sm:items-center sm:justify-between">
        <a href="index.php" class="h-10"><img class="h-full" src="img/MN_logo.png" alt="Michiel Nijenhuis logo"></a>
        <input class="peer hidden" type="checkbox" id="navbar-open" />
        <label class="absolute right-0 mt-2 mr-3 cursor-pointer text-xl sm:hidden" for="navbar-open">
          <span class="sr-only">Toggle Navigation</span>
          <img class="w-5" src="img/HamburgerIcon.png" alt="Hamburgen icon">
        </label>
        <nav aria-label="Header Navigation" class="peer-checked:block hidden pl-2 py-6 sm:block sm:py-0">
          <ul class="flex flex-col sm:flex-row">
            <li class=""><a class="font-bold nav-link transition-all duration-200 ease-out px-4" href="index.php#home">HOME</a></li>
            <li class=""><a class="font-bold nav-link transition-all duration-200 ease-out px-4" href="index.php#about_me">ABOUT ME</a></li>
            <li class=""><a class="font-bold nav-link transition-all duration-200 ease-out px-4" href="projects.php">PROJECTS</a></li>
            <li class=""><a class="font-bold nav-link transition-all duration-200 ease-out px-4" href="index.php#contact">CONTACT</a></li>
          </ul>
        </nav>
      </div>
    </nav>

    <div class="h-[73px]" id="home"></div>
