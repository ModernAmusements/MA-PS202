<section class="blog-article-content">
  <div class="col-1">
    <?php if ($data->headingC1()->isNotEmpty()): ?>
    <p class="sub-heading"><?= $data->headingC1() ?></p>
    <?php endif ?>
    <h1 class="heading"><?= $data->textC1()->kt() ?></h1>
  </div>
  <div class="col-2">
    <?php if ($data->headingC2()->isNotEmpty()): ?>
    <p class="sub-heading"><?= $data->headingC2() ?></p>
    <?php endif ?>
    <h1 class="heading"><?= $data->textC2()->kt() ?></h1>
  </div>
  <div class="col-3">
    <?php if ($data->headingC3()->isNotEmpty()): ?>
    <p class="sub-heading"><?= $data->headingC3() ?></p>
    <?php endif ?>

    <?php if ($imageBuilder = $data->imageBuilder()->toFile()): ?>
      <img class="lazy" data-src="<?= $imageBuilder->url() ?>" alt="<?= $data->imageBuilderAlt() ?>" />
    <?php endif ?>

    <?php if ($data->textC3()->isNotEmpty()): ?>
    <p class="archive-text"><?= $data->textC3() ?></p>
    <?php endif ?>
  </div>
</section>
