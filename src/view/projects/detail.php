<a class="link back" href="<?php echo $siteUrlRoot;?>">← All projects</a>
<section class="section-detail">
  <h2 class="subtitle subtitle-detail"><?php echo $project['title'] ?></h2>
          <picture class="project-detail-img">
          <source class="project-detail-img" media="(min-width: 1680px)" srcset="assets/images/<?php echo $project['cover'] ?>_1920.webp" type="image/webp"/>
          <source class="project-detail-img" media="(min-width: 1680px)" srcset="assets/images/<?php echo $project['cover'] ?>_1920.jpg"/>
          <source class="project-detail-img" media="(min-width: 1220px)" srcset="assets/images/<?php echo $project['cover'] ?>_1440.webp" type="image/webp"/>
          <source class="project-detail-img" media="(min-width: 1220px)" srcset="assets/images/<?php echo $project['cover'] ?>_1440.jpg"/>
          <source class="project-detail-img" media="(min-width: 884px)" srcset="assets/images/<?php echo $project['cover'] ?>_1000.webp" type="image/webp"/>
          <source class="project-detail-img" media="(min-width: 884px)" srcset="assets/images/<?php echo $project['cover'] ?>_1000.jpg"/>
          <source class="project-detail-img" media="(min-width: 620px)" srcset="assets/images/<?php echo $project['cover'] ?>_760.webp" type="image/webp"/>
          <source class="project-detail-img" media="(min-width: 620px)" srcset="assets/images/<?php echo $project['cover'] ?>_760.jpg"/>
          <source class="project-detail-img" media="(min-width: 400px)" srcset="assets/images/<?php echo $project['cover'] ?>_480.webp" type="image/webp"/>
          <source class="project-detail-img" media="(min-width: 400px)" srcset="assets/images/<?php echo $project['cover'] ?>_480.jpg"/>
          <source class="project-detail-img" media="(max-width: 399px)" srcset="assets/images/<?php echo $project['cover'] ?>_320.webp" type="image/webp"/>
          <source class="project-detail-img" media="(max-width: 399px)" srcset="assets/images/<?php echo $project['cover'] ?>_320.jpg"/>

          <img
            sizes="(max-width: 319px) 90vw,
            (min-width: 320px) 90vw,
            (min-width: 1200px) 65vw"
            class="project-detail-img"
            srcset="
            assets/images/<?php echo $project['cover'] ?>_320.jpg 320w,
            assets/images/<?php echo $project['cover'] ?>_480.jpg 480w,
            assets/images/<?php echo $project['cover'] ?>_760.jpg 760w,
            assets/images/<?php echo $project['cover'] ?>_1000.jpg 1000w,
            assets/images/<?php echo $project['cover'] ?>_1440.jpg 1440w,
            assets/images/<?php echo $project['cover'] ?>_1920.jpg 1920w"
            src="assets/images/<?php echo $project['cover'] ?>_1920.jpg"
            alt="<?php echo $project['title'] ?>"/>
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
  <article class="visuals">
    <h3 class="heading">Visuals</h3>
  </article>
</section>
