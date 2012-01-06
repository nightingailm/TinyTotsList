<h1>Welcome to Barbara's Tiny Tots!</h1>
<p>This site was made for Barbara by her loving future son-in-law. It was also designed by her daughter :). Use this site to make pages of name lists.</p>
<p>Type in your user name or email address and password to login and start.</p>

<div class="border center">
  <form method="post" action="<?php echo url_for('sf_guard_signin'); ?>">
    <?php echo $form; ?>

    <p class="center"><input type="image" src="<?php echo url_for('/images/sign-in.gif'); ?>" value="Signin"/></p>
  </form>
</div>