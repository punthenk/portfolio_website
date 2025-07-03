<?php
@include_once(__DIR__."/src/Database/Database.php");
@include_once(__DIR__."/template/head.inc.php");

Database::query( "
    SELECT 
        p.id AS project_id,
        p.title,
        p.description,
        p.github_link,
        p.image,
        t.name AS tag_name,
        t.color AS tag_color
    FROM projects p
    LEFT JOIN project_tags pt ON p.id = pt.project_id
    LEFT JOIN tags t ON pt.tag_id = t.id
    ORDER BY p.id
");
$results = Database::getAll();

$projects = [];

foreach ($results as $row) {
    $id = $row->project_id;

    if (!isset($projects[$id])) {
        // Maak een object voor elk project
        $project = new stdClass();
        $project->title = $row->title;
        $project->description = $row->description;
        $project->github_link = $row->github_link;
        $project->image = $row->image;
        $project->tags = [];

        $projects[$id] = $project;
    }

    if (!empty($row->tag_name)) {
        $tag = new stdClass();
        $tag->name = $row->tag_name;
        $tag->color = $row->tag_color;
        $projects[$id]->tags[] = $tag;
    }
}

?>
    <div class="w-full bg-background p-5 sm:p-15">
        <h2 class="text-4xl font-bold scroll-mt-20" id="projects">PROJECTS</h2>
        <p class="m-5">In this page I show some of my projects that I made, some are larger than others but I like them. Lets take a look!</p>
    </div>

    <div class="w-full bg-bg-grey p-5 sm:p-15 grid [grid-template-columns:repeat(auto-fit,minmax(300px,1fr))] gap-10 items-stretch">
        <div class="hidden bg-jscustom bg-phpcustom bg-csscustom bg-htmlcustom bg-tlwcustom bg-csharpcustom bg-sqlcustom"></div>

        <?php foreach ($projects as $project): ?>
        <!-- BEGIN -->
        <div class="max-w-[400px] w-full h-full flex flex-col border border-border-custom rounded-lg hover:shadow-xl/25 hover:shadow-pink-50 transition-all hover:-translate-y-1 group">
            <div class="bg-bg-grey w-full h-[300px] rounded-t-lg p-5 flex flex-row justify-center items-center">
                <img src="<?= $project->image ?>" class="rounded-lg group-hover:scale-105 transition-all duration-300">
            </div>
            <div class="bg-background flex flex-grow flex-col justify-between rounded-b-lg p-5 w-full min-h-6/12">
            <h2 class="text-2xl font-bold mb-2"><?= $project->title ?></h2> 
                <p><?= $project->description ?></p>
                <hr class="border-border-custom my-5">
                <div class="flex flex-row gap-2 font-semibold">
                <?php foreach ($project->tags as $tag): ?>
                    <div class="bg-<?=$tag->color?> <?php if($tag->color === "jscustom") {echo "text-black";} ?> p-2 rounded-lg"><span><?= htmlspecialchars($tag->name) ?></span></div> 
                <?php endforeach; ?>
                </div>
                <hr class="border-border-custom my-5">
                <a href="<?= $project->github_link ?>" target="_blank" class="font-jetbrains underline">$ git view project</a>
            </div> 
        </div>
        <!-- END -->
        <?php endforeach; ?>

    </div>

<?php
@include_once(__DIR__."/template/foot.inc.php");
