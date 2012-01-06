<h1>New Class List</h1>

<p>Hello, and welcome! Please enter the list of names in your class below. Seperate each name with a new line. Make a new line by pressing the Enter key.</p>

<div class="border center">
  <form method="post" action="<?php echo url_for('list_save'); ?>">

    <?php echo $form; ?>

    <p><input type="image" src="<?php echo url_for('/images/save&print.gif'); ?>" /></p>

  </form>
</div>

<h1>Recent Class Lists</h1>

<ul>
  <?php foreach ($recentLists as $list): ?>
    <li><?php echo link_to($list, 'list_edit', $list); ?> (edited on <?php echo $list->getFormattedDate(); ?>)</li>
  <?php endforeach ?>
</ul>