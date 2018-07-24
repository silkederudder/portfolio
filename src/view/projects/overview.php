<section class="section-projects">
<h2 class="subtitle">Projects</h2>
<?php foreach ($projects as $key => $project): ?>
    <a href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>" class="project-link">
      <ul class="project-item">
        <li class="project-title"><?php echo $project['title'] ?></li>
      </ul>
    </a>
  <?php endforeach; ?>
</section>
