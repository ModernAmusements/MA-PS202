<?php

/**
 * Templates render the content of your pages.
 *   <?php snippet('intro') ?> 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`.
 * This template lists all all the subpages of the `notes` page with their title date sorted by date and links to each subpage.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>
<div id="filter">
  <div class="barba-container one left" data-namespace="index-page">
    <main id="index">

      <nav class="categories">
        <button class="categories-title">
          <span>Filter </span>
            <svg version="1.1" width="11px" height="11px" viewBox="0 0 11 11"
                xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                <g transform="translate(-80 -112)">
                <g transform="translate(40 109)">
                <g transform="translate(40 3)">
                <circle cx="5.5" cy="5.5" r="5.5" fill="#000" />
                <rect class="vertical" id="a" x="5" y="2" width="1" height="7" fill="#fff" />
                <rect transform="translate(5.5 5.5) rotate(90) translate(-5.5 -5.5)" x="5" y="2"
                      width="1" height="7" fill="#fff" />
                </g>
                </g>
                </g>
                </g>
            </svg>
        </button>
        <!-- (FILTER) ---------------------------------------------------------------Filter---->
        <ul>
          <li class="category-li active">
            <button class="button category-button" data-slug="all">
              All</button>
          </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Film">
              Film</button>
            </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Documentary">
              Documentary</button>
            </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Advertising">
              Advertising</button>
            </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Animation">
              Animation</button>
            </li>
          <li class="category-li">
            <button class="button category-button" data-slug="Experiments">
              Experiments</button>
            </li>
        </ul>
      </nav>
      <div class="post-legend">
        <p>Title</p>
        <p>Client</p>
        <p>Field</p>
        <p class="right">Year</p>
      </div>
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note) : ?>
        <article class="post" data-categories="<?= $tags = implode(' ', $note->tags()->split(','));?> all">
          <div class="post-header">
            <!-- (TITLE) ------------------------------------->
            <h3>
            <a href="<?= $note->url() ?>"><?= $note->title() ?></a>
            </h3>
            <!-- (CLIENT) ------------------------------------->
            <h4><?= $note->client()->kt() ?></h4>
            <!-- (FIELD) ------------------------------------->
            <?php foreach ($note->tags()->kt() as $tag): ?>
              <h4><?= $tag ?></h4>
            <?php endforeach ?>
            <!-- (YEAR) ------------------------------------->
              <p class="right"><time><?= $note->date()->toDate('Y') ?>
            </time></p>
          </div>
        </article>
      <?php endforeach ?>
    </main>
  </div>
</div>

<?php snippet('footer') ?>