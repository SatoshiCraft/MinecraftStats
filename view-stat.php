<?php
/**
 * Viewing a specific stat.
 *
 * Included by index.php when $_GET['stat'] is set.
 */
$viewStatId = $_GET['stat'];
if (isset($stats[$viewStatId])) {
    $viewStat = $stats[$viewStatId];

    //Load ranking
    $rankingFile = "$statDataDir/".$viewStatId;
    if (is_file($rankingFile)) {
        $viewStat['ranking'] = unserialize(file_get_contents($rankingFile));
    } else {
        $viewStat['ranking'] = [];
    }

    $isPlayerList = isPlayerListStat($viewStatId);

    //Paging
    $ranking = $viewStat['ranking'];

    $numItems = count($ranking);
    $numPages = (int) (count($ranking) / $itemsPerPage) + 1;

    if (isset($_GET['all'])) {
        $page = 'all';
        $start = 0;
        $num = $numItems;
    } else {
        $page = 1;
        if (isset($_GET['page'])) {
            $page = (int) $_GET['page'];
        }

        $start = ($page - 1) * $itemsPerPage;
        $num = $itemsPerPage;
    }
} else {
    die('Unknown stat.');
}
?>

<div id="header">
  <span class="icon"><img src="<?php echo getStatIcon($viewStat); ?>"/></span>
  <?php echo $viewStat['award']; ?>
</div>
<div id="listing-wrapper">
  <div class="listing">
    <p>Ranking para a medalha <?php echo $viewStat['award']?> (<?php echo $viewStat['desc']?>):</p>
    <table class="page">
      <colgroup>
        <col style="width: 20%"/>
        <col style="width: 60%"/>
        <col style="width: 20%"/>
      </colgroup>
      <tbody><tr>
        <td class="left">
          <?php if ($page == 'all' || $page > 1): ?>
            <a href="?stat=<?php echo $viewStatId; ?>">&lt;&lt; Primeira</a>
            <?php  if ($page != 'all'): ?>
              | <a href="?stat=<?php echo $viewStatId; ?>&page=<?php echo $page - 1; ?>">&lt; Anterior</a>
            <?php endif; ?>
          <?php endif; ?>
        </td>
        <td class="center">
          <?php if ($numItems == 0): ?>
            Sem players.
          <?php elseif ($page == 'all'): ?>
            Mostrando todos os <?php echo $numItems; ?> players.
          <?php else : ?>
            Mostrando os <?php echo $start + 1; ?> - <?php echo min($start + $num, $numItems); ?> de <?php echo $numItems; ?>.
            <?php if ($numPages > 1): ?>
              (<a href="?stat=<?php echo $viewStatId; ?>&all">mostrar todos</a>)
            <?php endif; ?>
          <?php endif; ?>
        </td>
        <td class="right">
          <?php if ($page == 'all' || $page < $numPages): ?>
            <?php if ($page != 'all'): ?>
              <a href="?stat=<?php echo $viewStatId; ?>&page=<?php echo $page + 1; ?>">Proxima &gt;</a> |
            <?php endif; ?>
            <a href="?stat=<?php echo $viewStatId; ?>&page=<?php echo $numPages; ?>">Ultima &gt;&gt;</a>
          <?php endif; ?>
        </td>
      </tr></tbody>
    </table>
    <table class="listing">
      <tbody>
        <tr>
          <th>Rank</th>
          <th>Jogador</th>
          <th><?php echo $viewStat['desc']?></th>
          <?php if ($isPlayerList): ?>
            <th>Ultima vez online</th>
          <?php endif; ?>
        </tr>
        <?php for ($k = 0; $k < $num && ($start + $k) < $numItems; ++$k):
        $i = $start + $k;
        $e = $ranking[$i]; ?>
          <tr>
            <td class="rank <?php echo "place$i medal$i"; ?>"><?php echo $i + 1; ?></td>
            <td class="player <?php echo "place$i"; ?>"><?php echo createPlayerWidget($e['id'], 24); ?></td>
            <td class="score <?php echo "place$i"; ?>"><?php echo getStatDisplayValue($viewStat, $e['score']); ?></td>
            <?php if($isPlayerList):
            $lastOnline = getPlayerLastOnline($e['id']); ?>
              <td class="date <?php echo isPlayerInactive($e['id'])?'inactive':''; ?>"
                  <?php echo "place$i"; ?>"><?php echo formatDate($lastOnline); ?></td>
              <?php endif; ?>
          </tr>
        <?php endfor; ?>
      </tbody>
    </table>
  </div>
</div>
