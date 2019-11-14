<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>
      <?php

      $parse = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
      $bike_array = $parse->parse();

      ?>
      <?php foreach ($bike_array as $args) : ?>

        <?php $bike = new Bicycle($args); ?>
        <tr>
          <td><?= h($bike->brand); ?> </td>
          <td><?= h($bike->model); ?></td>
          <td><?= h($bike->year); ?></td>
          <td><?= h($bike->category); ?></td>
          <td><?= h($bike->gender); ?></td>
          <td><?= h($bike->color); ?></td>
          <td><?= h($bike->get_weight_kg()) . ' / ' . h($bike->get_weight_lbs()); ?></td>
          <td><?= h($bike->condition()); ?></td>
          <td><?= h($bike->price); ?></td>
        </tr>
      <? endforeach; ?>


    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>