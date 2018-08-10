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
          <source class="project-img" srcset="../assets/images/<?php echo $project['cover'] ?>.webp" type="image/webp"/>
          <source class="project-img" srcset="../assets/images/<?php echo $project['cover'] ?>.jpg"/>
          <img class="project-img" src="../assets/images/<?php echo $project['cover'] ?>.jpg" alt="<?php echo $project['title'] ?>"/>
      </picture>  
      </article>
    </a>
  <?php endforeach; ?>
</section>
