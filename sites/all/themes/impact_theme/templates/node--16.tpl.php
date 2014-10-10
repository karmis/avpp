
      <article <?php print $content_attributes; ?>>
        <?php
          // Hide comments and links now so that we can render them later.
          hide($content['comments']);
          hide($content['links']);
          // print render($content);
        ?>
        <?php print views_embed_view('events', 'page', $node->nid); ?>
      </article>

      

