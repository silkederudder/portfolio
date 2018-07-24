<section class="section-projects">
  <h2 class="subtitle hide">Projects</h2>
  <?php foreach ($projects as $key => $project): ?>
    <a href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>" class="project-link">
      <article class="project-item">
        <h3 class="project-title"><?php echo $project['title'] ?></h3>
        <!-- image here -->
      </article>
    </a>
  <?php endforeach; ?>
</section>
