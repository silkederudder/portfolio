<a class="link back" href="<?php echo $siteUrlRoot;?>">← All projects</a>
<section class="section-detail">
  <h2 class="subtitle subtitle-detail"><?php echo $project['title'] ?></h2>
    <picture class="project-detail-img">
      <source class="project-detail-img" srcset="../assets/images/<?php echo $project['cover'] ?>.webp" type="image/webp"/>
      <source class="project-detail-img" srcset="../assets/images/<?php echo $project['cover'] ?>.jpg"/>

      <img class="project-detail-img" src="assets/images/<?php echo $project['cover'] ?>.jpg" alt="<?php echo $project['title'] ?>"/>
    </picture>
  <article class="detail-info">
  <h3 class="hide">Project info</h3>
    <dl class="info-list">
      <dt class="term">Team</dt>
      <dd class="text definition"><?php echo $project['team'] ?></dd>
      <dt class="term">Client</dt>
      <dd class="text definition"><?php echo $project['client'] ?></dd>
      <dt class="term">Technologies</dt>
      <dd class="text definition"><?php echo $project['technologies'] ?></dd>
      <?php if (!empty($project['url'])): ?>
        <dt class="term">Online</dt>
        <dd class="text definition"><a class="link" target="_blank" href="<?php echo $project['url'] ?>">Check it out</a></dd>
      <?php endif; ?>
    </dl>
  </article>
  <article class="brief">
    <h3 class="heading">Brief</h3>
    <?php echo $project['brief'] ?>
  </article>
  <article class="concept">
    <h3 class="heading">Progress &amp; concept</h3>
    <?php echo $project['concept'] ?>
  </article>
  <?php if (!empty($visuals)): ?>
    <article class="visuals">
      <h3 class="heading">Visuals</h3>
        <div class="visuals-container">
          <?php foreach ($visuals as $key => $visual): ?>
          <picture>
            <source class="visual" srcset="../assets/images/<?php echo $visual['image'] ?>.webp" type="image/webp"/>
            <source class="visual" srcset="../assets/images/<?php echo $visual['image'] ?>.jpg"/>
            <img class="visual" src="../assets/images/<?php echo $visual['image'] ?>.jpg" alt="<?php echo $project['title'] ?>"/>
          </picture>
          <?php endforeach; ?>
        </div>
    </article>
  <?php endif; ?>
  <?php if (!empty($project['video'])): ?>
    <article class="video">
      <h3 class="heading">Case movie</h3>
      <video width="1920" height="1080" controls>
        <source src="/assets/video/<?php echo $project['video']?>.mp4" type="video/mp4"/>
      </video>    
    </article>
  <?php endif; ?>
</section>
