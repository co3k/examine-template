<?php $this->extend('layout.php') ?>

Hello, <?php echo $name; ?>!

<?php $this->set('title', sprintf('%s\'s TopPage', $name)); ?>

<?php $this->start('profile'); ?>
<dl>
  <dt>Name</dt>
  <dd><?php echo $name ?></dd>
  <dt>Favorite Food</dt>
  <dd><ul>
    <?php foreach ($food as $item): ?>
      <li><?php echo $item ?></li>
    <?php endforeach; ?>
  </ul></dd>
  <dt>Favorite Drink</dt>
  <dd><ul>
    <?php foreach ($drink as $item): ?>
      <li><?php echo $item ?></li>
    <?php endforeach; ?>
  </ul></dd>
</dl>
<?php $this->stop(); ?>
