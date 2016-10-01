<?php 
    /**
     * Viewing the hall of fame.
     *
     * Included by index.php when $_GET['hof'] is set.
     */
    
    //Load HOF
    if(is_file($hofFile)) {
        $hof = unserialize(file_get_contents($hofFile));
    } else {
        $hof = [];
    }
?>
<div id="header">
    Hall of Fame
</div>
<div id="listing-wrapper">
    <div class="listing">
        <div id="king">
            <p>The King of <?php  echo($title); ?> is:</p>
            <?php  echo(createPlayerWidget(current($hof)['id'], 28, '<img class="crown" src="img/fatcow/crown_gold.png"/>')); ?>
        </div>
        <p>
            Crown score ranking:<br/>
            The crown score is calculated using the medals a player holds.<br/>
            A gold medal is worth <?php  echo($goldMedalScore); ?> points, a silver medal <?php  echo($silverMedalScore); ?> points
            and a bronze medal <?php  echo($bronzeMedalScore . ($bronzeMedalScore > 1 ? ' points' : ' point')); ?>.
        </p>
        <table class="listing">
            <colgroup>
                <col style="width: 10%"/>
                <col style="width: 45%"/>
                <col style="width: 10%"/>
                <col style="width: 10%"/>
                <col style="width: 10%"/>
                <col style="width: 15%"/>
            </colgroup>
            <tbody>
                <tr>
                    <th>Rank</th>
                    <th>Player</th>
                    <th><img src="img/fatcow/medal_award_bronze.png"/></th>
                    <th><img src="img/fatcow/medal_award_silver.png"/></th>
                    <th><img src="img/fatcow/medal_award_gold.png"/></th>
                    <th>Crown Score</th>
                </tr>
                <?php 
                    $i = 0;
                    foreach($hof as $id => $e) {
                        ?>
                        <tr>
                            <td class="rank <?php  echo("place$i crown$i"); ?>"><?php  echo($i + 1); ?></td>
                            <td class="player <?php  echo("place$i"); ?>"><?php  echo(createPlayerWidget($e['id'], 24)); ?></td>
                            <td class="center score-bronze <?php  echo("place$i"); ?>"><?php  echo(safeGet('bronze', $e, 0)); ?></td>
                            <td class="center score-silver <?php  echo("place$i"); ?>"><?php  echo(safeGet('silver', $e, 0)); ?></td>
                            <td class="center score-gold <?php  echo("place$i"); ?>"><?php  echo(safeGet('gold', $e, 0)); ?></td>
                            <td class="center score <?php  echo("place$i"); ?>"><?php  echo(safeGet('score', $e, 0)); ?></td>
                        </tr>
                        <?php 
                        $i++;
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
