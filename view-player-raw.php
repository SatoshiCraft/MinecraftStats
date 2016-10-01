<?php 
    /**
     * Viewing raw data of a specific player.
     *
     * Included by index.php when $_GET['raw'] is set.
     */
    $playerId = $_GET["raw"];
    if(isset($players[$playerId])) {
        $player = $players[$playerId];

        //Load player JSON
        $jsonFile = "$rawDataDir/$playerId.json";
        if(is_file($jsonFile)) {
            $json = json_decode(file_get_contents($jsonFile), true);
        } else {
            die("No data file.");
        }
        
        //Load suspect score for player, if any
        $dataFile = "$playerDataDir/$playerId";
        if(is_file($dataFile)) {
            $pstats = unserialize(file_get_contents($dataFile));
            if(array_key_exists('custom.suspect', $pstats)) {
                $suspect = $pstats['custom.suspect']['score'];
            }
        }
    } else {
        die("Unknown player.");
    }
    
    $inactive = isPlayerInactive($playerId);
    
    //Count stats
    $blockStats = [];
    $otherStats = [];
    
    foreach($json as $key => $value) {
        if(strpos($key, 'stat.craftItem.') === 0) {
            $id = substr($key, 15);
            $blockStats[$id]['craft'] = $value;
        } else if(strpos($key, 'stat.useItem.') === 0) {
            $id = substr($key, 13);
            $blockStats[$id]['use'] = $value;
        } else if(strpos($key, 'stat.mineBlock.') === 0) {
            $id = substr($key, 15);
            $blockStats[$id]['mine'] = $value;
        } else if(strcmp($key, 'achievement.exploreAllBiomes') === 0) {
            $otherStats[$key] = implode(', ', $value['progress']);
        } else {
            $otherStats[$key] = $value;
        }
    }
    
    //Sort stats
    ksort($otherStats);
    ksort($blockStats);
?>
<div id="header">
    <?php  echo(createPlayerWidget($playerId, 64)); ?>
</div>
<div id="listing-wrapper">
    <div class="listing">
        <p class="date">Last online: <?php  echo(formatDate(getPlayerLastOnline($playerId))); ?></p>
        <?php 
            if($inactive) {
                ?>
                    <p class="inactive">This player has been inactive for over <?php  echo((int)($inactiveTime / 86400)); ?> days.</p>
                <?php 
            }
        ?>
        <p>Raw craft, use/place and mine/destroy statisitcs:</p>
        <table class="listing">
            <colgroup>
                <col style="width:40%;"/>
                <col style="width:20%;"/>
                <col style="width:20%;"/>
                <col style="width:20%;"/>
            </colgroup>
            <tbody>
                <tr>
                    <th>Item/Block ID</th>
                    <th>Crafted</th>
                    <th>Used/Placed</th>
                    <th>Mined/Destroyed</th>
                </tr>
                <?php 
                    foreach($blockStats as $id => $stats) {
                        ?>
                            <tr>
                            <td><?php  echo($id); ?></td>
                            <td><?php  echo(safeGet('craft', $stats, 0)); ?></td>
                            <td><?php  echo(safeGet('use', $stats, 0)); ?></td>
                            <td><?php  echo(safeGet('mine', $stats, 0)); ?></td>
                            </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>
        <hr />
        <p>Miscellaneous raw statistics:</p>
        <table class="listing">
            <colgroup>
                <col style="width:40%;"/>
                <col style="width:60%;"/>
            </colgroup>
            <tbody>
                <tr>
                    <th>Stat</th>
                    <th>Value</th>
                </tr>
                <?php 
                    foreach($otherStats as $key => $value) {
                        ?>
                            <tr>
                            <td><?php  echo($key); ?></td>
                            <td><?php  echo($value); ?></td>
                            </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>
        <?php 
            if(isset($suspect)) {
        ?>
            <p>Suspect score details:</p>
            <table class="listing">
                <colgroup>
                    <col style="width:40%;"/>
                    <col style="width:60%;"/>
                </colgroup>
                <tbody>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                    <?php 
                        foreach($suspect['details'] as $key => $value) {
                            ?>
                                <tr>
                                <td><?php  echo($key); ?></td>
                                <td><?php  echo(is_int($value) ? $value : number_format($value, 2)); ?></td>
                                </tr>
                            <?php 
                        }
                    ?>
                    <tr>
                        <td>Total</td>
                        <td><?php  echo((int)$suspect['score']); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php 
            }
        ?>
    </div>
</div>
