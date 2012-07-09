<article role="article" id="article-block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php print $block_classes . ' ' . $block_zebra ?>">
  <section class="block-inner">
    <header>
      <?php if (!empty($block->subject)): ?>
        <h3 class="title block-title"><?php print $block->subject; ?></h3>
      <?php endif; ?>
    </header>
    <article class="content">
      <?php print $block->content; ?>
    </article>
    <footer>
      <?php print $edit_links; ?>
    </footer>
  </section> <!-- /block-inner -->
</article> <!-- /block -->
