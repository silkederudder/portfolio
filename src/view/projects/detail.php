<a class="link" href="index.php?page=overview">< All projects</a>
<section class="section-detail">
  <h2 class="subtitle"><?php echo $project['title'] ?></h2>
  <img class="project-detail-img" src="assets/images/project-img.jpg" alt="Project image of <?php echo $project['title'] ?>" width="3598" height="2303"/>
  <div class="detail-info">
    <dl class="info-list">
      <dt class="term">Team</dt>
      <dd class="text definition"><?php echo $project['team'] ?></dd>
      <dt class="term">Client</dt>
      <dd class="text definition"><?php echo $project['client'] ?></dd>
      <dt class="term">Technologies</dt>
      <dd class="text definition"><?php echo $project['technologies'] ?></dd>
      <dt class="term">In action</dt>
      <dd class="text definition"><a class="link" target="_blank" href="<?php echo $project['url'] ?>">Check it out</a></dd>
    </dl>
  </div>
  <div class="brief">
    <h3 class="heading">Brief</h3>
    <p class="text"><?php echo $project['brief'] ?></p>
  </div>
  </div>
  <div class="concept">
  <h3 class="heading">Progress &amp; concept</h3>
  <p class="text"><?php echo $project['concept'] ?></p>
  </div>
  <div class="visuals">
    <h3 class="heading">Visuals</h3>
  </div>
</section>
