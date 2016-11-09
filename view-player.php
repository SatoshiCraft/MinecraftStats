<?php
/**
 * Viewing a specific player.
 *
 * Included by index.php when $_GET['player'] is set.
 */
$playerId = $_GET["player"];
if(isset($players[$playerId])) {
    $player = $players[$playerId];

    //Load player stats
    $dataFile = "$playerDataDir/$playerId";
    if(is_file($dataFile)) {
        $pstats = unserialize(file_get_contents($dataFile));
    } else {
        $pstats = [];
    }

    $inactive = isPlayerInactive($playerId);

} else {
    die("Unknown player.");
}
?>
<div id="header">
  <?php echo(createPlayerWidget($playerId, 64)); ?>
  <?php if(!isset($me)): ?>
    <form action="index.php?player=<?php echo($playerId); ?>" method="post">
    </form>
  <?php endif; ?>
</div>
<div id="listing-wrapper">
  <div class="listing">
    <p class="date">Ultima vez online: <?php echo(formatDate(getPlayerLastOnline($playerId))); ?></p>
    <?php if($inactive): ?>
      <p class="inactive">Esse player esta inativo a mais de <?php echo((int)($inactiveTime / 86400)); ?> dias.</p>
    <?php else: ?>
      <p>Medalhas ganhas por <?php echo(getPlayerName($playerId)); ?>:</p>
      <?php
      //Count medals
      $gold = 0;
      $silver = 0;
      $bronze = 0;

      foreach($pstats as $id => $data) {
          switch($data['rank']) {
              case 0:
                  $gold++;
                  break;

              case 1:
                  $silver++;
                  break;

              case 2:
                  $bronze++;
                  break;
          }
      }
      ?>
      <table class="medals">
        <colgroup>
          <col style="width:50%;"/>
          <col style="width:50%;"/>
        </colgroup>
        <tbody>
          <tr class="tablem">
            <td class="medal"><img src="img/fatcow/medal_award_gold.png"/></td>
            <td class="count"><?php echo($gold); ?></td>
          </tr>
          <tr class="tablem">
            <td class="medal"><img src="img/fatcow/medal_award_silver.png"/></td>
            <td class="count"><?php echo($silver); ?></td>
          </tr>
          <tr class="tablem">
            <td class="medal"><img src="img/fatcow/medal_award_bronze.png"/></td>
            <td class="count"><?php echo($bronze); ?></td>
          </tr>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
  <hr/>
  <div class="listing">
    <p>Estatisticas por medalhas (<a href="?raw=<?php echo($playerId); ?>">veja dados brutos</a>):</p>
    <table class="listing">
      <colgroup>
        <col style="width:40%;"/>
        <col style="width:15%;"/>
        <col style="width:35%;"/>
        <col style="width:10%;"/>
      </colgroup>
      <tbody>
        <tr>
          <th>Estatistica</th>
          <th>Pontos</th>
          <th>Medalha</th>
          <th>Rank</th>
        </tr>
        <?php sortStatsByAwardName(); ?>
        <?php foreach($stats as $id => $stat): ?>
          <?php
          if(array_key_exists($id, $pstats)) {
              $score = getStatDisplayValue($stat, $pstats[$id]['score']);

              if(isset($pstats[$id]['rank'])) {
                  $rank = $pstats[$id]['rank'];
              } else {
                  unset($rank);
              }
          } else {
              unset($score);
              unset($rank);
          }
          ?>
          <tr>
            <td class="stat">
              <?php echo($stat['desc']); ?>:
            </td>
            <td class="score">
              <?php echo(isset($score) ? $score : '&mdash;'); ?>
            </td>
            <td class="award <?php if(isset($rank)) { echo("place$rank"); } ?>"><span class="icon">
              <img src="<?php echo(getStatIcon($stat)); ?>"/></span> <a href="?stat=<?php echo($id); ?>"><?php echo($stat['award']); ?></a>
            </td>
            <td class="rank <?php if(isset($rank)) { echo("place$rank medal$rank"); } ?>">
              <?php if(isset($rank)): ?>
                <?php echo('#' . ($rank + 1)); ?>
              <?php else: ?>
                <?php echo('&mdash;'); ?>
              <?php endif; ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
