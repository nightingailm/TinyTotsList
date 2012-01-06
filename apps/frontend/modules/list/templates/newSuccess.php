<h1>New Class List</h1>

<p>Hello, and welcome! Please enter the list of names in your class below. Seperate each name with a new line.</p>

<form method="post" action="<?php echo url_for('list_save'); ?>">

  <?php echo $form; ?>

  <p><input type="submit" value="Save &amp; Print!" /></p>

</form>
