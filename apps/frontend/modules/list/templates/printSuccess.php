<?php decorate_with('print'); ?>
<a href="javascript:window.print();" class="print-button"><?php echo image_tag('/images/print.gif', array('style'=>'z-index:1000; position: absolute')); ?></a>
<div class="landscape">
  <table class="students">
    <?php foreach ($students as $student): ?>
      <?php if (!$student) continue; ?>
      <tr>
        <?php for ($i=0; $i<100; $i++): ?>
          <td><?php echo $student; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endforeach ?>
  </table>

  <p>&nbsp;</p>

  <table class="students">
    <?php foreach ($students as $student): ?>
      <?php if (!$student) continue; ?>
      <tr>
        <?php for ($i=0; $i<100; $i++): ?>
          <td><?php echo $student; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endforeach ?>
  </table>
</div>