<section class="section-projects">
  <h2 class="subtitle hide">Projects</h2>
  <?php foreach ($projects as $key => $project): ?>
    <a href="index.php?page=detail&amp;id=<?php echo $project['id']; ?>" class="project-link">
      <article class="project-item">
        <h3 class="project-title"><?php echo $project['title'] ?></h3>
        <p class="more">+</p>
        <img class="project-img" src="assets/images/project-img.jpg" alt="Project image of <?php echo $project['title'] ?>" width="3598" height="2303"/>
      </article>
    </a>
  <?php endforeach; ?>
</section>
