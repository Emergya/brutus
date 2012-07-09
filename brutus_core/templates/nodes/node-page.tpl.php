<article role="article" id="article-node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <section class="node-inner">
    <header>
      <?php if (!$page): ?>
        <h2 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>

      <?php print $picture; ?>

      <?php if ($submitted): ?>
        <span class="submitted"><?php print $submitted; ?></span>
      <?php endif; ?>

      <?php if ($node_top && !$teaser): ?>
        <section class="node-top">
          <?php print $node_top; ?>
        </section><!-- /node-top -->
      <?php endif; ?>
    </header>
    <section class="content">
      <?php print $content; ?>
    </section>
    <footer>
      <?php if ($terms): ?>
        <div class="taxonomy"><?php print $terms; ?></div>
      <?php endif;?>

      <?php if ($links): ?> 
        <div class="links"> <?php print $links; ?></div>
      <?php endif; ?>

      <?php if ($node_bottom && !$teaser): ?>
        <section class="node-bottom">
          <?php print $node_bottom; ?>
        </section><!-- /node-bottom -->
      <?php endif; ?>
    </footer>
  </section> <!-- /node-inner -->
</article> <!-- /node-->
