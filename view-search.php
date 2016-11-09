<?php
/**
 * Viewing search results.
 *
 * Included by index.php when $searchResults contains more than one item.
 */

//Load HOF
if(is_file($hofFile)) {
    $hof = unserialize(file_get_contents($hofFile));
} else {
    $hof = [];
}
?>
<div id="header">
  Pesquisa
</div>
<div id="listing-wrapper">
  <div class="listing">
    <div>
      Sua pesquisa por <span id="searchterm"><?php  echo(htmlspecialchars($search)); ?></span> achou <?php  echo(count($searchResults)); ?> resultados:
    </div>
    <div id="searchresults-wrapper">
      <div id="searchresults">
        <?php foreach($searchResults as $uuid): ?>
          <div class="searchresult">
            <?php  echo(createPlayerWidget($uuid, 16)); ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
