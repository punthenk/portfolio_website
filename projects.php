<?php
@include_once(__DIR__."/template/head.inc.php");
?>
    <div class="w-full bg-background p-5 sm:p-15">
        <h2 class="text-4xl font-bold scroll-mt-20" id="projects">PROJECTS</h2>
        <p class="m-5">In this page I show some of my best projects or some project that show my potential. Lets see them!</p>
    </div>

    <div class="w-full bg-bg-grey p-5 grid [grid-template-columns:repeat(auto-fit,minmax(300px,1fr))] gap-10">

        <!-- BEGIN -->
        <div class="max-w-[400px] w-full border border-border-custom rounded-lg">
            <div class="bg-white w-full h-[300px] rounded-t-lg"></div>
            <div class="bg-background rounded-b-lg p-5">
                <h2 class="text-2xl font-bold mb-2">Vleesie</h2> 
                <p>Vleesie is a website I made in php. This was my first php project and I learned a lot from this project. </p>
                <hr class="border-border-custom my-5">
                <div class="flex flex-row gap-2 font-semibold">
                    <div class="bg-phpcustom p-2 rounded-lg"><span>PHP</span></div> 
                    <div class="bg-jscustom p-2 rounded-lg text-black"><span>JS</span></div> 
                    <div class="bg-csscustom p-2 rounded-lg"><span>CSS</span></div> 
                </div>
                <hr class="border-border-custom my-5">
                <a href="https://github.com/punthenk" target="_blank" class="font-jetbrains underline">$ git view project</a>
            </div> 
        </div>
        <!-- END -->

    </div>

<?php
@include_once(__DIR__."/template/foot.inc.php");
