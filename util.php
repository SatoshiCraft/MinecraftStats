<?php
/**
 * Utilities
 */
function findStat($id) {
    global $stats;

    if(array_key_exists($id, $stats)) {
        return $stats[$id];
    } else {
        return FALSE;
    }
}

function findPlayersByName($search) {
    global $players; //call me electro

    //Turn search phrase into regex pattern
    $pattern = '/.*' . str_replace('*', '.*', $search) . '.*/i';

    //linear search!!
    $found = [];
    foreach($players as $uuid => $p) {
        if(preg_match($pattern,  $p['name'])) {
            $found[] = $uuid;
        }
    }

    return $found;
}

function formatDate($t) {
    return date('d/m/Y - H:i', $t);
}

function compareStatAwardNames($a, $b) {
    return strcasecmp($a['award'], $b['award']);
}

function sortStatsByAwardName() {
    global $stats;
    uasort($stats, 'compareStatAwardNames');
}

function getStatIcon($stat) {
    global $awardIconDir, $defaultIcon;

    if(isset($stat['icon'])) {
        return "$awardIconDir/" . $stat['icon'];
    } else {
        return "$awardIconDir/$defaultIcon";
    }
}

function getStatDisplayValue($stat, $value) {
    if(isset($stat['displayFunc'])) {
        return call_user_func($stat['displayFunc'], $value);
    } else {
        return $value;
    }
}

function getPlayerName($uuid) {
    global $players;

    if(array_key_exists($uuid, $players)) {
        return $players[$uuid]['name'];
    } else {
        return $uuid;
    }
}

function uuidHash($uuid) {
    $sub = [];
    $uuid = str_replace('-', '', $uuid);

    for($i=0; $i<4; $i++){
        $sub[$i] = intval('0x'.substr($uuid, $i*8, 8) + 0, 16);
    }

    return ($sub[0] ^ $sub[1]) ^ ($sub[2] ^ $sub[3]);
}

function getDefaultSkinGender($uuid) {
    return abs(uuidHash($uuid) % 2);
}

function getPlayerSkin($uuid) {
    global $players;

    $urlName = urlencode($players[$uuid]['name']);
    return "https://mcapi.ca/avatar/2d/$urlName";

}

function getPlayerLastOnline($uuid) {
    global $players;

    if(array_key_exists($uuid, $players)) {
        return $players[$uuid]['date'];
    } else {
        return 0;
    }
}

function isInactive($last) {
    global $inactiveTime;

    return time() - $last >= $inactiveTime;
}

function isPlayerInactive($uuid) {
    return isInactive(getPlayerLastOnline($uuid));
}

function getStatProgressForPlayer($statId, $json) {
    global $stats;

    $stat = findStat($statId);
    if($stat) {
        if(isset($stat['provider'])) {
            $value = call_user_func($stat['provider'], $json);
            return $value;
        } else if(array_key_exists($statId, $json)) {
            return $json[$statId];
        }
    }

    return FALSE;
}

function createPlayerWidget($uuid, $size, $inject = '') {
    if($uuid !== FALSE) {
        return
        '<span class="player '
      . (isPlayerInactive($uuid) ? 'inactive' : '') .
        '">' .
        '<img src="' . getPlayerSkin($uuid) . '" width="' . $size . '" height="'.$size.'"/>' .
        "<a href='?player=$uuid'>" .
        getPlayerName($uuid) .
        '</a>' .
        $inject .
        '</span>';
    } else {
        return '<div class="player-nobody"><div>Ninguem</div></div>';
    }
}

function isPlayerListStat($id) {
    return ($id == 'stat.playOneMinute');
}

function safeGet($key, $arr, $def) {
    if(array_key_exists($key, $arr)) {
        return $arr[$key];
    } else {
        return $def;
    }
}

function safeInc($key, &$arr, $inc) {
    if(array_key_exists($key, $arr)) {
        $arr[$key] += $inc;
    } else {
        $arr[$key] = $inc;
    }
}
?>
