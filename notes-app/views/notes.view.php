<?php require("partials/head.php") ?>
<?php require("partials/nav.php") ?>
<?php require("partials/banner.php") ?>

  <main>
    <div class="mx-auto px-4 sm:px-6 lg:px-8 py-6 max-w-7xl">
      <?php foreach ($notes as $note) : ?>
        <li><?= $note['title'] ?></li>
      <?php endforeach; ?>
    </div>
  </main>

<?php require("partials/foot.php") ?>
