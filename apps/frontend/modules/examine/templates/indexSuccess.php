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

<form action="<?php echo url_for('examine/index?loader='.$sf_request->getParameter('loader', 'php')) ?>" method="post">
<textarea name="body">
<?php echo $sf_request->getParameter('body', '<p>example</p>'); ?>
</textarea>
<input type="submit" value="Send" />
</form>

<?php echo $this->render('request_'.$sf_request->getParameter('loader', 'php').':body', $sf_data->getRawValue()) ?>

