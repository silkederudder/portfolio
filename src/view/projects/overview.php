<section class="section-quote">
  <h2 class="subtitle hide">Intro</h2>
  <blockquote class="quote-big">I’m Silke, a creative developer with an eye for design.</blockquote>
  <p class="intro-text">Currently looking for an awesome internship.</p>
</section>
<section class="section-projects">
  <h2 class="subtitle hide">Projects</h2>
  <?php foreach ($projects as $key => $project): ?>
    <a href="<?php echo $siteUrlRoot;?>project/<?php echo $project['id'];?>" class="project-link">
      <article class="project-item">
        <h3 class="project-title"><?php echo $project['title'] ?></h3>
        <p class="more">&#43;</p>
        <picture class="project-img">
          <source class="project-img" media="(min-width: 1680px)" srcset="assets/images/<?php echo $project['cover'] ?>_1920.webp" type="image/webp"/>
          <source class="project-img" media="(min-width: 1680px)" srcset="assets/images/<?php echo $project['cover'] ?>_1920.jpg"/>
          <source class="project-img" media="(min-width: 1220px)" srcset="assets/images/<?php echo $project['cover'] ?>_1440.webp" type="image/webp"/>
          <source class="project-img" media="(min-width: 1220px)" srcset="assets/images/<?php echo $project['cover'] ?>_1440.jpg"/>
          <source class="project-img" media="(min-width: 884px)" srcset="assets/images/<?php echo $project['cover'] ?>_1000.webp" type="image/webp"/>
          <source class="project-img" media="(min-width: 884px)" srcset="assets/images/<?php echo $project['cover'] ?>_1000.jpg"/>
          <source class="project-img" media="(min-width: 620px)" srcset="assets/images/<?php echo $project['cover'] ?>_760.webp" type="image/webp"/>
          <source class="project-img" media="(min-width: 620px)" srcset="assets/images/<?php echo $project['cover'] ?>_760.jpg"/>
          <source class="project-img" media="(min-width: 400px)" srcset="assets/images/<?php echo $project['cover'] ?>_480.webp" type="image/webp"/>
          <source class="project-img" media="(min-width: 400px)" srcset="assets/images/<?php echo $project['cover'] ?>_480.jpg"/>
          <source class="project-img" media="(max-width: 399px)" srcset="assets/images/<?php echo $project['cover'] ?>_320.webp" type="image/webp"/>
          <source class="project-img" media="(max-width: 399px)" srcset="assets/images/<?php echo $project['cover'] ?>_320.jpg"/>

          <img
            sizes="(max-width: 319px) 90vw,
            (min-width: 320px) 90vw,
            (min-width: 1200px) 44vw"
            class="project-img"
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
      </article>
    </a>
  <?php endforeach; ?>
</section>
