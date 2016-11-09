<?php
/**
 * Configuration of stats to be tracked.
 *
 * NOTE: The icons referred to in this file cannot be
 * included in the repository for legal reasons.
 *
 * Please replace them with your own.
 */

function cmToDistance($cm) {
    if($cm > 100000) {
        return number_format($cm / 100000, 1) . 'km';
    } else if($cm > 100) {
        return (int)($cm / 100) . 'm';
    } else {
        return $cm . 'cm';
    }
}

function ticksToSeconds($ticks) {
    return $ticks / 20;
}

function ticksToTime($ticks) {
    $seconds = (int)ticksToSeconds($ticks);

    $minutes = (int)($seconds / 60);
    $seconds %= 60;

    $hours = (int)($minutes / 60);
    $minutes %= 60;

    if($hours > 0) {
        return sprintf("%d:%02d h", $hours, $minutes);
    } else if($minutes > 0) {
        return sprintf("%d:%02d min", $minutes, $seconds);
    } else {
        return "$seconds s";
    }
}

function breakToolProvider($json) {
    $sum =
         safeGet('stat.breakItem.minecraft.fishing_rod', $json, 0) +
         safeGet('stat.breakItem.minecraft.flint_and_steel', $json, 0) +
         safeGet('stat.breakItem.minecraft.shears', $json, 0) +
         safeGet('stat.breakItem.minecraft.wooden_axe', $json, 0) +
         safeGet('stat.breakItem.minecraft.wooden_hoe', $json, 0) +
         safeGet('stat.breakItem.minecraft.wooden_pickaxe', $json, 0) +
         safeGet('stat.breakItem.minecraft.wooden_shovel', $json, 0) +
         safeGet('stat.breakItem.minecraft.stone_axe', $json, 0) +
         safeGet('stat.breakItem.minecraft.stone_hoe', $json, 0) +
         safeGet('stat.breakItem.minecraft.stone_pickaxe', $json, 0) +
         safeGet('stat.breakItem.minecraft.stone_shovel', $json, 0) +
         safeGet('stat.breakItem.minecraft.iron_axe', $json, 0) +
         safeGet('stat.breakItem.minecraft.iron_hoe', $json, 0) +
         safeGet('stat.breakItem.minecraft.iron_pickaxe', $json, 0) +
         safeGet('stat.breakItem.minecraft.iron_shovel', $json, 0) +
         safeGet('stat.breakItem.minecraft.golden_axe', $json, 0) +
         safeGet('stat.breakItem.minecraft.golden_hoe', $json, 0) +
         safeGet('stat.breakItem.minecraft.golden_pickaxe', $json, 0) +
         safeGet('stat.breakItem.minecraft.golden_shovel', $json, 0) +
         safeGet('stat.breakItem.minecraft.diamond_axe', $json, 0) +
         safeGet('stat.breakItem.minecraft.diamond_hoe', $json, 0) +
         safeGet('stat.breakItem.minecraft.diamond_pickaxe', $json, 0) +
         safeGet('stat.breakItem.minecraft.diamond_shovel', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function craftArmorProvider($json) {
    $sum =
         safeGet('stat.craftItem.minecraft.leather_helmet', $json, 0) +
         safeGet('stat.craftItem.minecraft.leather_chestplate', $json, 0) +
         safeGet('stat.craftItem.minecraft.leather_leggings', $json, 0) +
         safeGet('stat.craftItem.minecraft.leather_boots', $json, 0) +
         safeGet('stat.craftItem.minecraft.chainmail_helmet', $json, 0) +
         safeGet('stat.craftItem.minecraft.chainmail_chestplate', $json, 0) +
         safeGet('stat.craftItem.minecraft.chainmail_leggings', $json, 0) +
         safeGet('stat.craftItem.minecraft.chainmail_boots', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_helmet', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_chestplate', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_leggings', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_boots', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_helmet', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_chestplate', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_leggings', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_boots', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_helmet', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_chestplate', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_leggings', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_boots', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function craftToolProvider($json) {
    $sum =
         safeGet('stat.craftItem.minecraft.fishing_rod', $json, 0) +
         safeGet('stat.craftItem.minecraft.flint_and_steel', $json, 0) +
         safeGet('stat.craftItem.minecraft.shears', $json, 0) +
         safeGet('stat.craftItem.minecraft.wooden_axe', $json, 0) +
         safeGet('stat.craftItem.minecraft.wooden_hoe', $json, 0) +
         safeGet('stat.craftItem.minecraft.wooden_pickaxe', $json, 0) +
         safeGet('stat.craftItem.minecraft.wooden_shovel', $json, 0) +
         safeGet('stat.craftItem.minecraft.stone_axe', $json, 0) +
         safeGet('stat.craftItem.minecraft.stone_hoe', $json, 0) +
         safeGet('stat.craftItem.minecraft.stone_pickaxe', $json, 0) +
         safeGet('stat.craftItem.minecraft.stone_shovel', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_axe', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_hoe', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_pickaxe', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_shovel', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_axe', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_hoe', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_pickaxe', $json, 0) +
         safeGet('stat.craftItem.minecraft.golden_shovel', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_axe', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_hoe', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_pickaxe', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_shovel', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function craftMineralBlockProvider($json) {
    $sum =
         safeGet('stat.craftItem.minecraft.coal_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.diamond_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.emerald_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.gold_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.iron_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.lapis_block', $json, 0) +
         safeGet('stat.craftItem.minecraft.redstone_block', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatMeatProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.cooked_chicken', $json, 0) +
         safeGet('stat.useItem.minecraft.chicken', $json, 0) +
         safeGet('stat.useItem.minecraft.cooked_beef', $json, 0) +
         safeGet('stat.useItem.minecraft.beef', $json, 0) +
         safeGet('stat.useItem.minecraft.cooked_mutton', $json, 0) +
         safeGet('stat.useItem.minecraft.mutton', $json, 0) +
         safeGet('stat.useItem.minecraft.cooked_porkchop', $json, 0) +
         safeGet('stat.useItem.minecraft.porkchop', $json, 0) +
         safeGet('stat.useItem.minecraft.cooked_rabbit', $json, 0) +
         safeGet('stat.useItem.minecraft.rabbit', $json, 0) +
         safeGet('stat.useItem.minecraft.rabbit_stew', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatRawMeatProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.chicken', $json, 0) +
         safeGet('stat.useItem.minecraft.beef', $json, 0) +
         safeGet('stat.useItem.minecraft.mutton', $json, 0) +
         safeGet('stat.useItem.minecraft.porkchop', $json, 0) +
         safeGet('stat.useItem.minecraft.rabbit', $json, 0) +
         safeGet('stat.useItem.minecraft.fish', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatVeggiesProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.apple', $json, 0) +
         safeGet('stat.useItem.minecraft.baked_potato', $json, 0) +
         safeGet('stat.useItem.minecraft.break', $json, 0) +
         safeGet('stat.useItem.minecraft.beef', $json, 0) +
         safeGet('stat.useItem.minecraft.cake', $json, 0) +
         safeGet('stat.useItem.minecraft.carrot', $json, 0) +
         safeGet('stat.useItem.minecraft.cookie', $json, 0) +
         safeGet('stat.useItem.minecraft.golden_apple', $json, 0) +
         safeGet('stat.useItem.minecraft.golden_carrot', $json, 0) +
         safeGet('stat.useItem.minecraft.melon', $json, 0) +
         safeGet('stat.useItem.minecraft.mushroom_stew', $json, 0) +
         safeGet('stat.useItem.minecraft.potato', $json, 0) +
         safeGet('stat.useItem.minecraft.pumpkin_pie', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatFishProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.cooked_fish', $json, 0) +
         safeGet('stat.useItem.minecraft.fish', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatStewProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.mushroom_stew', $json, 0) +
         safeGet('stat.useItem.minecraft.rabbit_stew', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function eatCrapProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.rotten_flesh', $json, 0) +
         safeGet('stat.useItem.minecraft.spider_eye', $json, 0) +
         safeGet('stat.useItem.minecraft.poisonous_potato', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function exploreBiomesProvider($json) {
    $sum = count($json['achievement.exploreAllBiomes']['progress']);
    return ($sum > 0) ? $sum : FALSE;
}

function mineDirtProvider($json) {
    $sum =
         safeGet('stat.mineBlock.minecraft.dirt', $json, 0) +
         safeGet('stat.mineBlock.minecraft.gravel', $json, 0) +
         safeGet('stat.mineBlock.minecraft.sand', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function placeGlassProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.glass', $json, 0) +
         safeGet('stat.useItem.minecraft.glass_pane', $json, 0) +
         safeGet('stat.useItem.minecraft.stained_glass', $json, 0) +
         safeGet('stat.useItem.minecraft.stained_glass_pane', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function placePistonProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.piston', $json, 0) +
         safeGet('stat.useItem.minecraft.sticky_piston', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function placePlantProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.sapling', $json, 0) +
         safeGet('stat.useItem.minecraft.yellow_flower', $json, 0) +
         safeGet('stat.useItem.minecraft.red_flower', $json, 0) +
         safeGet('stat.useItem.minecraft.double_plant', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function placeRedstoneProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.redstone', $json, 0) +
         safeGet('stat.useItem.minecraft.stone_button', $json, 0) +
         safeGet('stat.useItem.minecraft.wooden_button', $json, 0) +
         safeGet('stat.useItem.minecraft.daylight_detector', $json, 0) +
         safeGet('stat.useItem.minecraft.daylight_detector_inverted', $json, 0) +
         safeGet('stat.useItem.minecraft.detector_rail', $json, 0) +
         safeGet('stat.useItem.minecraft.lever', $json, 0) +
         safeGet('stat.useItem.minecraft.stone_pressure_plate', $json, 0) +
         safeGet('stat.useItem.minecraft.wooden_pressure_plate', $json, 0) +
         safeGet('stat.useItem.minecraft.light_weighted_pressure_plate', $json, 0) +
         safeGet('stat.useItem.minecraft.heavy_weighted_pressure_plate', $json, 0) +
         safeGet('stat.useItem.minecraft.redstone_torch', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function placeTrapProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.trapped_chest', $json, 0) +
         safeGet('stat.useItem.minecraft.tripwire_hook', $json, 0) +
         safeGet('stat.useItem.minecraft.tripwire', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function plowDirtProvider($json) {
    $sum =
         safeGet('stat.useItem.minecraft.wooden_hoe', $json, 0) +
         safeGet('stat.useItem.minecraft.stone_hoe', $json, 0) +
         safeGet('stat.useItem.minecraft.iron_hoe', $json, 0) +
         safeGet('stat.useItem.minecraft.golden_hoe', $json, 0) +
         safeGet('stat.useItem.minecraft.diamond_hoe', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function useNoteblockProvider($json) {
    $sum =
         safeGet('stat.noteblockPlayed', $json, 0) +
         safeGet('stat.noteblockTuned', $json, 0);

    return ($sum > 0) ? $sum : FALSE;
}

function getMinePlaceDiff($json, $block) {
    return max(0, safeGet("stat.mineBlock.$block", $json, 0) - safeGet("stat.useItem.$block", $json, 0));
}

function getWeightedMinePlaceDiff($json, $block, $weight) {
    return $weight * getMinePlaceDiff($json, $block);
}

function getWeightedMinePlaceDiffCmp($json, $block, $weight, $compare) {
    $d = getWeightedMinePlaceDiff($json, $block, $weight);
    if($d > 0) {
        foreach($compare as $x) {
            if($x['has'] < $x['shouldHave']) {
                $d *= $d;
            }
        }
    }

    return $d;
}

function suspectAdd(&$details, $key, $score) {
    if($score > 0) {
        if(array_key_exists($key, $details)) {
            $details[$key] += $score;
        } else {
            $details[$key] = $score;
        }
    }

    return $score;
}

function suspectProvider($json) {
    $score = 0;
    $details = [];

    $playTime = ticksToSeconds(safeGet('stat.playOneMinute', $json, 0));
    $shortPlayTime = 14400; //4 hours in considered short

    //acquire some data
    $diamonds = safeGet('achievement.diamonds', $json, 0);
    $obsMined = safeGet('stat.mineBlock.minecraft.obsidian', $json, 0);
    $enderEyes = safeGet('stat.craftItem.minecraft.ender_eye', $json, 0);
    $blazeRods = safeGet('achievement.blazeRod', $json, 0);
    $iron = safeGet('achievement.acquireIron', $json, 0);
    $stone = safeGet('stat.mineBlock.minecraft.stone', $json, 0);
    $wood = safeGet('achievement.mineWood', $json, 0);


    $score += suspectAdd($details, 'Beacons', getWeightedMinePlaceDiffCmp($json, 'minecraft.beacon', 25, [
        ['has' => safeGet('achievement.killWither', $json, 0), 'shouldHave' => 1],
    ]));

    $score += suspectAdd($details, 'Enchanting Tables', getWeightedMinePlaceDiffCmp($json, 'minecraft.enchanting_table', 15, [
        ['has' => $obsMined, 'shouldHave' => 4]
    ]));

    $score += suspectAdd($details, 'Ender Chests', getWeightedMinePlaceDiffCmp($json, 'minecraft.ender_chest', 15, [
        ['has' => $enderEyes, 'shouldHave' => 1],
    ]));

    $score += suspectAdd($details, 'Brewing Stands', getWeightedMinePlaceDiffCmp($json, 'minecraft.brewing_stand', 15, [
        ['has' => $blazeRods, 'shouldHave' => 1]
    ]));

    $score += suspectAdd($details, 'Anvils', getWeightedMinePlaceDiffCmp($json, 'minecraft.anvil', 15, [
        ['has' => $iron, 'shouldHave' => 31]
    ]));

    $score += suspectAdd($details, 'Chests', getWeightedMinePlaceDiffCmp($json, 'minecraft.chest', 8, [
        ['has' => $wood, 'shouldHave' => 3]
    ]));

    $score += suspectAdd($details, 'Furnaces', getWeightedMinePlaceDiffCmp($json, 'minecraft.furnace', 1, [
        ['has' => $stone, 'shouldHave' => 9]
    ]));

    //Destroyed more build blocks than ever placed
    $score += suspectAdd($details, 'Glass', getWeightedMinePlaceDiff($json, 'minecraft.stained_glass', 5)) +
            suspectAdd($details, 'Glass', getWeightedMinePlaceDiff($json, 'minecraft.stained_glass_pane', 5)) +
            suspectAdd($details, 'Glass', getWeightedMinePlaceDiff($json, 'minecraft.glass', 5)) +
            suspectAdd($details, 'Glass', getWeightedMinePlaceDiff($json, 'minecraft.glass_pane', 5)) +
            suspectAdd($details, 'Rails', getWeightedMinePlaceDiff($json, 'minecraft.golden_rail', 5)) +
            suspectAdd($details, 'Brick Blocks', getWeightedMinePlaceDiff($json, 'minecraft.brick_block', 3)) +
            suspectAdd($details, 'Quartz Blocks', getWeightedMinePlaceDiff($json, 'minecraft.quartz_block', 3)) +
            suspectAdd($details, 'Ladders', getWeightedMinePlaceDiff($json, 'minecraft.ladder', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.dark_oak_fence', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.spruce_fence', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.birch_fence', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.jungle_fence', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.acacia_fence', 3)) +
            suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.cobblestone_wall', 3));

    //Destroyed more blocks than ever played after a SHORT playing time
    if($playTime < $shortPlayTime) {
        $score += suspectAdd($details, 'Rails', getWeightedMinePlaceDiff($json, 'minecraft.rail', 8)) +           //found in mineshafts
                suspectAdd($details, 'Bookshelves', getWeightedMinePlaceDiff($json, 'minecraft.bookshelf', 8)) + //found in strongholds
                suspectAdd($details, 'Fences', getWeightedMinePlaceDiff($json, 'minecraft.fence', 3)) +         //found in mineshafts
                suspectAdd($details, 'Planks', getWeightedMinePlaceDiff($json, 'minecraft.planks', 2)) +        //found in mineshafts
                suspectAdd($details, 'Torches', getWeightedMinePlaceDiff($json, 'minecraft.torch', 1));         //found in MANY places

        $score += suspectAdd($details, 'Lava Buckets', 25 * safeGet('stat.useItem.minecraft.lava_bucket', $json, 0));
        $score += suspectAdd($details, 'TNT', 25 * safeGet('stat.craftItem.minecraft.tnt', $json, 0));
        $score += suspectAdd($details, 'Fire', 10 * safeGet('stat.useItem.minecraft.flint_and_steel', $json, 0));
    }

    //Increase suspicion according to lava buckets emptied, TNT crafted and fires started
    if($score > 100 && $playTime >= $shortPlayTime) {
        $score += suspectAdd($details, 'Lava Buckets', 10 * safeGet('stat.useItem.minecraft.lava_bucket', $json, 0));
        $score += suspectAdd($details, 'TNT', 10 * safeGet('stat.craftItem.minecraft.tnt', $json, 0));
        $score += suspectAdd($details, 'Fire', 5 * safeGet('stat.useItem.minecraft.flint_and_steel', $json, 0));
    }

    //Scale suspicion score for low play times
    $score = (int)($score * suspectAdd($details, 'Playtime Factor', min(300, max(1, $shortPlayTime / max(1, $playTime)))));

    return ($score > 100) ? ['score' => $score, 'details' => $details] : FALSE;
}

function suspectDisplay($suspect) {
    return $suspect['score'];
}

$stats = [
    'achievement.buildSword' => [
        'award' => 'Ferreiro',
        'desc'  => 'Espadas crafttadas',
        'icon'  => 'items/stone_sword.png',
    ],
    'achievement.diamondsToYou' => [
        'award' => 'Comunista',
        'desc'  => 'Diamantes dropados para outros',
        'icon'  => 'items/diamond.png',
    ],
    'achievement.ghast' => [
        'award' => 'Prove o proprio veneno',
        'desc'  => 'Ghasts mortos com sua propria bola de fogo',
        'icon'  => 'items/fireball.png',
    ],
    'achievement.mineWood' => [
        'award' => 'Lenhador',
        'desc'  => 'Madeiras quebradas',
        'icon'  => 'blocks/log_oak_top.png',
    ],
    'achievement.openInventory' => [
        'award' => 'Onde que eu coloquei...?',
        'desc'  => 'Vezes que abriu o inventario',
        'icon'  => 'gui/inventory.png',
    ],
    'achievement.portal' => [
        'award' => 'Multiworld',
        'desc'  => 'Número de usos de portal',
        'icon'  => 'blocks/portal.png',
    ],
    'custom.breakTool' => [
        'award' => 'Quebrou :(',
        'desc'  => 'Ferramentas quebradas',
        'icon'  => 'items/stick.png',
        'provider' => 'breakToolProvider',
    ],
    'custom.craftArmor' => [
        'award' => 'Armoreiro',
        'desc'  => 'Armaduras craftadas',
        'icon'  => 'items/diamond_chestplate.png',
        'provider' => 'craftArmorProvider',
    ],
    'custom.craftTool' => [
        'award' => 'Oficina',
        'desc'  => 'Ferramentas craftadas',
        'icon'  => 'blocks/crafting_table_front.png',
        'provider' => 'craftToolProvider',
    ],
    'custom.craftMineralBlock' => [
        'award' => 'Compressor',
        'desc'  => 'Blocos de minerio craftados',
        'icon'  => 'blocks/emerald_block.png',
        'provider' => 'craftMineralBlockProvider',
    ],
    'custom.eatMeat' => [
        'award' => 'Carne na mesa',
        'desc'  => 'Carnes comidas',
        'icon'  => 'items/beef_cooked.png',
        'provider' => 'eatMeatProvider',
    ],
    'custom.eatRawMeat' => [
        'award' => 'Quem tem pressa...',
        'desc'  => 'Carnes cruas comidas',
        'icon'  => 'items/beef_raw.png',
        'provider' => 'eatRawMeatProvider',
    ],
    'custom.eatStew' => [
        'award' => 'Comedor de Sopa',
        'desc'  => 'Sopas comidas',
        'icon'  => 'items/mushroom_stew.png',
        'provider' => 'eatStewProvider',
    ],
    'custom.eatFish' => [
        'award' => 'Peixes!',
        'desc'  => 'Peixes comidos',
        'icon'  => 'items/fish_cod_cooked.png',
        'provider' => 'eatFishProvider',
    ],
    'custom.eatVeggies' => [
        'award' => 'Vegetariano',
        'desc'  => 'Itens vegetarianos comidos',
        'icon'  => 'items/apple.png',
        'provider' => 'eatVeggiesProvider',
    ],
    'custom.eatCrap' => [
        'award' => 'Nojento',
        'desc'  => 'Itens podres comidos',
        'icon'  => 'items/rotten_flesh.png',
        'provider' => 'eatCrapProvider',
    ],
    'custom.exploreBiomes' => [
        'award' => 'Explorador',
        'desc'  => 'Diferentes biomas explorados',
        'icon'  => 'items/map_filled.png',
        'provider' => 'exploreBiomesProvider',
    ],
    'custom.mineDirt' => [
        'award' => 'Escavador',
        'desc'  => 'Terra, areia e cascalho "minerados"',
        'icon'  => 'items/stone_shovel.png',
        'provider' => 'mineDirtProvider',
    ],
    'custom.placeGlass' => [
        'award' => 'Vidracaria',
        'desc'  => 'Vidros colocados',
        'icon'  => 'blocks/glass.png',
        'provider' => 'placeGlassProvider',
    ],
    'custom.placePiston' => [
        'award' => 'Mecanico',
        'desc'  => 'Pistoes colocados',
        'icon'  => 'blocks/piston_side.png',
        'provider' => 'placePistonProvider',
    ],
    'custom.placePlant' => [
        'award' => 'Ecologico',
        'desc'  => 'Arvores e flores plantadas',
        'icon'  => 'blocks/sapling_oak.png',
        'provider' => 'placePlantProvider',
    ],
    'custom.placeRedstone' => [
        'award' => 'Redstoner',
        'desc'  => 'Itens de redstone colocados',
        'icon'  => 'items/redstone_dust.png',
        'provider' => 'placeRedstoneProvider',
    ],
    /* This award doesn't mean much, because placing trap chests is a common way to save space */
       'custom.placeTrap' => [
       'award' => 'Trap',
       'desc'  => 'Itens de trap colocados',
       'icon'  => 'blocks/trip_wire_source.png',
       'provider' => 'placeTrapProvider',
       ], 
    'custom.plowDirt' => [
        'award' => 'Fazendeiro',
        'desc'  => 'Blocos de terra arados',
        'icon'  => 'items/diamond_hoe.png',
        'provider' => 'plowDirtProvider',
    ],
    'custom.suspect' => [
        'award' => 'Suspeito!',
        'desc'  => 'Voce nao quer essa estatistica',
        'icon'  => 'items/barrier.png',
        'provider' => 'suspectProvider',
        'displayFunc' => 'suspectDisplay',
    ],
    'custom.useNoteblock' => [
        'award' => 'Musico',
        'desc'  => 'Blocos de nota tocados',
        'icon'  => 'blocks/noteblock.png',
        'provider' => 'useNoteblockProvider',
    ],
    'stat.animalsBred' => [
        'award' => 'Pecuarista',
        'desc'  => 'Animais alimentados',
        'icon'  => 'items/wheat.png',
    ],
    'stat.boatOneCm' => [
        'award' => 'Marinheiro',
        'desc'  => 'Distancia nadada em um bote',
        'icon'  => 'items/boat.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.chestOpened' => [
        'award' => 'Armazenador',
        'desc'  => 'Baus abertos',
        'icon'  => 'blocks/chest.png',
    ],
    'stat.climbOneCm' => [
        'award' => 'Escalador',
        'desc'  => 'Blocos de escada subidos',
        'icon'  => 'blocks/ladder.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.craftItem.minecraft.beacon' => [
        'award' => 'Raio de luz',
        'desc'  => 'Beacons craftados',
        'icon'  => 'blocks/beacon.png',
    ],
    'stat.craftItem.minecraft.bookshelf' => [
        'award' => 'Bibliotecario',
        'desc'  => 'Estantes craftadas',
        'icon'  => 'blocks/bookshelf.png',
    ],
    'stat.craftItem.minecraft.brick_block' => [
        'award' => 'Pedreiro',
        'desc'  => 'Blocos de tijolo craftados',
        'icon'  => 'blocks/brick.png',
    ],
    'stat.craftItem.minecraft.cake' => [
        'award' => 'Confeiteiro',
        'desc'  => 'Bolos feitos',
        'icon'  => 'items/cake.png',
    ],
    'stat.craftItem.minecraft.clock' => [
        'award' => 'Que horas sao?',
        'desc'  => 'Relogios craftados',
        'icon'  => 'items/clock.png',
    ],
    'stat.craftItem.minecraft.compass' => [
        'award' => 'Onde e que eu to?',
        'desc'  => 'Bussolas craftadas',
        'icon'  => 'items/compass.png',
    ],
    'stat.craftItem.minecraft.ender_chest' => [
        'award' => 'Me rouba agora!',
        'desc'  => 'EnderChest craftados',
        'icon'  => 'blocks/ender_chest.png',
    ],
    'stat.craftItem.minecraft.lit_pumpkin' => [
        'award' => 'Aboboras Luminosas',
        'desc'  => 'Aboboras Luminosas craftadas',
        'icon'  => 'blocks/pumpkin_face_on.png',
    ],
    'stat.craftItem.minecraft.netherbrick' => [
        'award' => 'Construtor do Nether',
        'desc'  => 'Tijolos do nether feitos',
        'icon'  => 'items/netherbrick.png',
    ],
    'stat.craftItem.minecraft.paper' => [
        'award' => 'Papeleiro',
        'desc'  => 'Papeis produzidos',
        'icon'  => 'items/paper.png',
    ],
    /* don't want to promote TNT */
       'stat.craftItem.minecraft.tnt' => [
       'award' => 'Mas intencoes',
       'desc'  => 'TNTs craftadas',
       'icon'  => 'blocks/tnt_side.png',
       ],
    
    'stat.craftItem.minecraft.sponge' => [
        'award' => 'Bob Esponja',
        'desc'  => 'Esponjas secas',
        'icon'  => 'blocks/sponge.png',
    ],
    'stat.craftItem.minecraft.wool' => [
        'award' => 'Ovelhas!',
        'desc'  => 'Las obtidas',
        'icon'  => 'blocks/wool_colored_white.png',
    ],
    'stat.crouchOneCm' => [
        'award' => 'Agaixado',
        'desc'  => 'Distancia agaixada',
        'icon'  => 'gui/eye.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.damageDealt' => [
        'award' => 'Matador',
        'desc'  => 'Coracoes de dano tomados',
        'icon'  => 'gui/sword_bloody.png',
    ],
    'stat.damageTaken' => [
        'award' => 'Masoquista',
        'desc'  => 'Coracoes de dano recebido',
        'icon'  => 'gui/heart_black.png',
    ],
    'stat.deaths' => [
        'award' => 'Vida Extra',
        'desc'  => 'Numero de mortes',
        'icon'  => 'gui/heart.png',
    ],
    'stat.diveOneCm' => [
        'award' => 'Mergulhador',
        'desc'  => 'Distancia mergulhada',
        'icon'  => 'gui/depth_strider.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.drop' => [
        'award' => 'Tchau!',
        'desc'  => 'Itens dropados',
        'icon'  => 'gui/destroy.png',
    ],
    'stat.fishCaught' => [
        'award' => 'Pescador',
        'desc'  => 'Peixes pegos',
        'icon'  => 'items/fish_cod_raw.png',
    ],
    'stat.flowerPotted' => [
        'award' => 'Floricultor',
        'desc'  => 'Flores envasadas',
        'icon'  => 'blocks/flower_rose.png',
    ],
    'stat.horseOneCm' => [
        'award' => 'Cavaleiro',
        'desc'  => 'Distancia andada a cavalo',
        'icon'  => 'items/saddle.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.jump' => [
        'award' => 'Coelinho',
        'desc'  => 'Vezes que pulou',
        'icon'  => 'gui/bunny.png',
    ],
    'stat.junkFished' => [
        'award' => 'Quem sabe um Pescador',
        'desc'  => 'Itens lixo pescados',
        'icon'  => 'items/bowl.png',
    ],
    'stat.entityKilledBy.Creeper' => [
        'award' => 'Explodido',
        'desc'  => 'Vezes morto por um Creeper',
        'icon'  => 'minecraft-wiki/mobs/CreeperFace.png',
    ],
    'stat.entityKilledBy.Zombie' => [
        'award' => 'Infectado',
        'desc'  => 'Vezes que morreu para um zumbi',
        'icon'  => 'minecraft-wiki/mobs/ZombieVillagerHead.png',
    ],
    'stat.killEntity.Bat' => [
        'award' => 'Anti-Morcego',
        'desc'  => 'Morcegos mortos',
        'icon'  => 'minecraft-wiki/mobs/BatFace.png',
    ],
    'stat.killEntity.Blaze' => [
        'award' => 'Exterminador do Nether',
        'desc'  => 'Blazes mortos',
        'icon'  => 'minecraft-wiki/mobs/Blaze_Face.png',
    ],
    'stat.killEntity.Chicken' => [
        'award' => 'Galinhada',
        'desc'  => 'Galinhas Mortas',
        'icon'  => 'items/chicken_cooked.png',
    ],
    'stat.killEntity.Cow' => [
        'award' => 'Matador de Vacas',
        'desc'  => 'Vacas mortas',
        'icon'  => 'items/leather.png',
    ],
    'stat.killEntity.Creeper' => [
        'award' => 'Shhh...',
        'desc'  => 'Creepers mortos',
        'icon'  => 'items/gunpowder.png',
    ],
    'stat.killEntity.Enderman' => [
        'award' => 'Matador de Enderman',
        'desc'  => 'Endermen mortos',
        'icon'  => 'minecraft-wiki/mobs/EndermanFace.png',
    ],
    /* not working: https://bugs.mojang.com/browse/MC-33710
       'stat.killEntity.Endermite' => [
       'award' => 'Endermite Ender',
       'desc'  => 'Endermites killed',
       'icon'  => 'minecraft-wiki/mobs/64px-EndermiteFace.png',
       ],
    */
    'stat.killEntity.EntityHorse' => [
        'award' => 'Odeio Cavalos',
        'desc'  => 'Cavalos Mortos',
        'icon'  => 'minecraft-wiki/mobs/HorseHead.png',
    ],
    'stat.killEntity.Ghast' => [
        'award' => 'Lagrimas de crocodilo',
        'desc'  => 'Ghasts mortos',
        'icon'  => 'items/ghast_tear.png',
    ],
    'stat.killEntity.Guardian' => [
        'award' => 'Matador de Guardian',
        'desc'  => 'Guardians mortos',
        'icon'  => 'minecraft-wiki/mobs/64px-GuardianFace.png',
    ],
    'stat.killEntity.LavaSlime' => [
        'award' => 'Creme de Magma',
        'desc'  => 'Magma Cubes mortos',
        'icon'  => 'items/magma_cream.png',
    ],
    'stat.killEntity.MushroomCow' => [
        'award' => 'Matei uma vaca cogumelo!',
        'desc'  => 'Vacas cogumelo mortas',
        'icon'  => 'minecraft-wiki/mobs/MooshroomFace.png',
    ],
    'stat.killEntity.Ozelot' => [
        'award' => 'Gatinho Mau!',
        'desc'  => 'Ocelots / gatos mortos',
        'icon'  => 'minecraft-wiki/mobs/OcelotFace.png',
    ],
    'stat.killEntity.Pig' => [
        'award' => 'Bacon!',
        'desc'  => 'Porcos mortos',
        'icon'  => 'items/porkchop_raw.png',
    ],
    'stat.killEntity.PigZombie' => [
        'award' => 'Contra o Nether',
        'desc'  => 'Zombie Pigmen mortos',
        'icon'  => 'minecraft-wiki/mobs/ZombiePigmanFace.png',
    ],
    'stat.killEntity.Rabbit' => [
        'award' => 'Matador de Coelhos :(',
        'desc'  => 'Coelhos Mortos',
        'icon'  => 'minecraft-wiki/mobs/Rabbiticon.png',
    ],
    'stat.killEntity.Sheep' => [
        'award' => 'Odeia Ovelhas',
        'desc'  => 'Ovelhas mortas',
        'icon'  => 'minecraft-wiki/mobs/SheepFace.png',
    ],
    'stat.killEntity.Silverfish' => [
        'award' => 'Pequeno desagradavel...',
        'desc'  => 'Silverfish mortos',
        'icon'  => 'minecraft-wiki/mobs/SilverfishFace.png',
    ],
    'stat.killEntity.Skeleton' => [
        'award' => 'Coletor de Osso',
        'desc'  => 'Esqueletos mortos',
        'icon'  => 'minecraft-wiki/mobs/SkeletonFace.png',
    ],
    /* not working: https://bugs.mojang.com/browse/MC-33710
       'stat.killEntity.SnowGolem' => [
       'award' => 'Snowman Melter',
       'desc'  => 'Snow Golems killed',
       'icon'  => 'minecraft-wiki/mobs/Snowgolemhead.png',
       ],
    */
    'stat.killEntity.Slime' => [
        'award' => 'Slime!',
        'desc'  => 'Slimes mortos',
        'icon'  => 'minecraft-wiki/mobs/SlimeFace.png',
    ],
    'stat.killEntity.Spider' => [
        'award' => 'Aracnofobia',
        'desc'  => 'Aranhas mortas',
        'icon'  => 'minecraft-wiki/mobs/SpiderFace.png',
    ],
    'stat.killEntity.Squid' => [
        'award' => 'Sergio Moro',
        'desc'  => 'Lulas mortas',
        'icon'  => 'minecraft-wiki/mobs/Squidface.png',
    ],
    'stat.killEntity.Villager' => [
        'award' => 'Bullying',
        'desc'  => 'Villagers mortos',
        'icon'  => 'minecraft-wiki/mobs/Villagerhead.png',
    ],
    /* not working: https://bugs.mojang.com/browse/MC-33710
       'stat.killEntity.VillagerGolem' => [
       'award' => 'Defense down!',
       'desc'  => 'Iron Golems killed',
       'icon'  => 'minecraft-wiki/mobs/Vg_face.png',
       ],
    */
    'stat.killEntity.Witch' => [
        'award' => 'Cacador de Bruxas',
        'desc'  => 'Bruxas mortas',
        'icon'  => 'minecraft-wiki/mobs/Witchface2.png',
    ],
    'stat.killEntity.Wolf' => [
        'award' => 'Caozinho Mal!',
        'desc'  => 'Lobos/caes mortos',
        'icon'  => 'minecraft-wiki/mobs/WolfFace.png',
    ],
    'stat.killEntity.Zombie' => [
        'award' => 'The Walking Dead',
        'desc'  => 'Zumbis mortos',
        'icon'  => 'minecraft-wiki/mobs/ZombieFace.png',
    ],
    'stat.itemEnchanted' => [
        'award' => 'Encantador',
        'desc'  => 'Itens encantados',
        'icon'  => 'blocks/enchanting_table_top.png',
    ],
    'stat.mineBlock.minecraft.cactus' => [
        'award' => 'Cacto! Cacto!',
        'desc'  => 'Cactos coletados',
        'icon'  => 'blocks/cactus_side.png',
    ],
    'stat.mineBlock.minecraft.coal_ore' => [
        'award' => 'Ouro Negro',
        'desc'  => 'Carvao minerado',
        'icon'  => 'blocks/coal_ore.png',
    ],
    'stat.mineBlock.minecraft.diamond_ore' => [
        'award' => 'Capitalista',
        'desc'  => 'Diamante minerado',
        'icon'  => 'blocks/diamond_ore.png',
    ],
    'stat.mineBlock.minecraft.emerald_ore' => [
        'award' => 'Minerador da montanha',
        'desc'  => 'Esmeralda minerada',
        'icon'  => 'blocks/emerald_ore.png',
    ],
    'stat.mineBlock.minecraft.gold_ore' => [
        'award' => 'Corrida do Ouro',
        'desc'  => 'Ouro Minerado',
        'icon'  => 'blocks/gold_ore.png',
    ],
    'stat.mineBlock.minecraft.ice' => [
        'award' => 'Gelo!',
        'desc'  => 'Blocos de gelo destruidos',
        'icon'  => 'blocks/ice.png',
    ],
    'stat.mineBlock.minecraft.iron_ore' => [
        'award' => 'Coracao de Ferro',
        'desc'  => 'Ferro minerado',
        'icon'  => 'blocks/iron_ore.png',
    ],
    'stat.mineBlock.minecraft.lapis_ore' => [
        'award' => 'Lapis Lazuli?',
        'desc'  => 'Lapis Lazuli minerado',
        'icon'  => 'blocks/lapis_ore.png',
    ],
    'stat.mineBlock.minecraft.melon_block' => [
        'award' => 'Plantador de Melancia',
        'desc'  => 'Melancias conseguidss',
        'icon'  => 'blocks/melon_side.png',
    ],
    'stat.mineBlock.minecraft.netherrack' => [
        'award' => 'Terra do Nether',
        'desc'  => 'Netherrack minerada',
        'icon'  => 'blocks/netherrack.png',
    ],
    'stat.mineBlock.minecraft.obsidian' => [
        'award' => 'Minerador de Obsidian',
        'desc'  => 'Blocos de obsidian minerados',
        'icon'  => 'blocks/obsidian.png',
    ],
    'stat.mineBlock.minecraft.quartz_ore' => [
        'award' => 'Use o quartzo!',
        'desc'  => 'Quartzo minerado',
        'icon'  => 'blocks/quartz_ore.png',
    ],
    'stat.mineBlock.minecraft.redstone_ore' => [
        'award' => 'Red... o que?!',
        'desc'  => 'Redstone minerada',
        'icon'  => 'blocks/redstone_ore.png',
    ],
    'stat.mineBlock.minecraft.stone' => [
        'award' => 'Stone',
        'desc'  => 'Pedras mineradas',
        'icon'  => 'blocks/stone.png',
    ],
    'stat.mineBlock.minecraft.tallgrass' => [
        'award' => 'Grama',
        'desc'  => 'Gramas destruidas',
        'icon'  => 'blocks/tallgrass.png',
    ],
    'stat.mineBlock.minecraft.torch' => [
        'award' => 'O lado negro',
        'desc'  => 'Tochas destruidas',
        'icon'  => 'blocks/redstone_torch_off.png',
    ],
    'stat.mineBlock.minecraft.web' => [
        'award' => 'Que saco...',
        'desc'  => 'Teias de aranha removidas',
        'icon'  => 'blocks/web.png',
    ],
    'stat.minecartOneCm' => [
        'award' => 'Ferrovia',
        'desc'  => 'Distancia andada com minecraft',
        'icon'  => 'items/minecart_normal.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.pigOneCm' => [
        'award' => 'Porque eu consigo!',
        'desc'  => 'Distancia montada em um porco',
        'icon'  => 'items/carrot_on_a_stick.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.playOneMinute' => [
        'award' => 'Viciado',
        'desc'  => 'Tempo jogado no servidor',
        'icon'  => 'gui/connection.png',
        'displayFunc' => 'ticksToTime',
    ],
    'stat.recordPlayed' => [
        'award' => 'Discoteca',
        'desc'  => 'Musicas tocadas',
        'icon'  => 'items/record_13.png',
    ],
    'stat.sleepInBed' => [
        'award' => 'Que sono...',
        'desc'  => 'Vezes dormidas em uma cama',
        'icon'  => 'items/bed.png',
    ],
    'stat.sprintOneCm' => [
        'award' => 'Marathon Runner',
        'desc'  => 'Distance sprinted',
        'displayFunc' => 'cmToDistance',
        'icon'  => 'gui/speed.png',
    ],
    'stat.swimOneCm' => [
        'award' => 'Nadador',
        'desc'  => 'Distancia nadada',
        'icon'  => 'blocks/water_still.png',
        'displayFunc' => 'cmToDistance',
    ],
    /* What is this even good for?
       'stat.talkedToVillager' => [
       'award' => 'Negotiator',
       'desc'  => 'Villagers talked to',
       ],
    */
    'stat.timeSinceDeath' => [
        'award' => 'Sobrevivente',
        'desc'  => 'Tempo vivo apos a ultima morte',
        'icon'  => 'gui/resistance.png',
        'displayFunc' => 'ticksToTime',
    ],
    /*'stat.tradedWithVillager' => [
        'award' => 'Come',
        'desc'  => 'Villager trades completed',
        'icon'  => 'items/emerald.png',
    ], */
    /*'stat.trappedChestTriggered' => [
        'award' => 'Klutz',
        'desc'  => 'Trapped chests triggered',
        'icon'  => 'blocks/trapped_chest.png',
    ],*/
    'stat.treasureFished' => [
        'award' => 'Tesouro',
        'desc'  => 'Tesouros pescados',
        'icon'  => 'items/gold_ingot.png',
    ],
    'stat.useItem.minecraft.banner' => [
        'award' => 'Propaganda',
        'desc'  => 'Banners colocados',
        'icon'  => 'items/banner.png',
    ],
    'stat.useItem.minecraft.bow' => [
        'award' => 'Arqueiro',
        'desc'  => 'Flechas atiradas',
        'icon'  => 'items/bow_standby.png',
    ],
    'stat.useItem.minecraft.cookie' => [
        'award' => 'Bolacha ou Biscoito?',
        'desc'  => 'Cookies comidos',
        'icon'  => 'items/cookie.png',
    ],
    'stat.useItem.minecraft.dirt' => [
        'award' => 'Terra',
        'desc'  => 'Terras colocadas',
        'icon'  => 'blocks/dirt.png',
    ],
    'stat.useItem.minecraft.egg' => [
        'award' => 'Pega!',
        'desc'  => 'Ovos jogados',
        'icon'  => 'items/egg.png',
    ],
    'stat.useItem.minecraft.ender_eye' => [
        'award' => 'Procurador de Stronghold',
        'desc'  => 'Olhos do ender jogados',
        'icon'  => 'items/ender_eye.png',
    ],
    'stat.useItem.minecraft.ender_pearl' => [
        'award' => 'Teleportador',
        'desc'  => 'Ender perolas jogadas',
        'icon'  => 'items/ender_pearl.png',
    ],
    'stat.useItem.minecraft.fireworks' => [
        'award' => 'Feliz ano novo!',
        'desc'  => 'Foguetes lançados',
        'icon'  => 'items/fireworks.png',
    ],
    'stat.useItem.minecraft.flint_and_steel' => [
        'award' => 'Maniaco por Fogo',
        'desc'  => 'Fogos iniciados',
        'icon'  => 'blocks/fire.png',
    ],
    /*'stat.useItem.minecraft.iron_bars' => [
        'award' => 'Jailer',
        'desc'  => 'Iron Bars placed',
        'icon'  => 'blocks/iron_bars.png',
    ],*/
    'stat.useItem.minecraft.item_frame' => [
        'award' => 'Exposicao',
        'desc'  => 'Item frames colocados',
        'icon'  => 'items/item_frame.png',
    ],
    'stat.useItem.minecraft.lava_bucket' => [
        'award' => 'Lava...',
        'desc'  => 'Baldes de lava esvaziados',
        'icon'  => 'items/bucket_lava.png',
    ],
    'stat.useItem.minecraft.milk_bucket' => [
        'award' => 'Legal... Bem loco...',
        'desc'  => 'Leites bebidos',
        'icon'  => 'items/bucket_milk.png',
    ],
    'stat.useItem.minecraft.nether_wart' => [
        'award' => 'Fazendeiro do Nether',
        'desc'  => 'Fungos do nether plantados',
        'icon'  => 'blocks/nether_wart_stage_2.png',
    ],
    'stat.useItem.minecraft.potion' => [
        'award' => 'Alquimista',
        'desc'  => 'Pocoes usadas',
        'icon'  => 'items/potion_bottle_empty.png',
    ],
    'stat.useItem.minecraft.rail' => [
        'award' => 'Ferroviario',
        'desc'  => 'Trilhos colocados',
        'icon'  => 'blocks/rail_normal.png',
    ],
    'stat.useItem.minecraft.sea_lantern' => [
        'award' => 'Morador do Mar',
        'desc'  => 'Lanternas do Mar colocadas',
        'icon'  => 'blocks/sea_lantern.png',
    ],
    'stat.useItem.minecraft.shears' => [
        'award' => 'Cortador',
        'desc'  => 'Uso de tesouras',
        'icon'  => 'items/shears.png',
    ],
    'stat.useItem.minecraft.sign' => [
        'award' => 'Leiame.txt',
        'desc'  => 'Placas colocadas',
        'icon'  => 'items/sign.png',
    ],
    'stat.useItem.minecraft.snowball' => [
        'award' => 'Luta de bola de neve!',
        'desc'  => 'Bolas de neve jogadas',
        'icon'  => 'items/snowball.png',
    ],
    'stat.useItem.minecraft.torch' => [
        'award' => 'Iluminado',
        'desc'  => 'Tochas colocadas',
        'icon'  => 'blocks/torch_on.png',
    ],
    'stat.useItem.minecraft.water_bucket' => [
        'award' => 'Molhado!',
        'desc'  => 'Baldes de agua esvaziados',
        'icon'  => 'items/bucket_water.png',
    ],
    'stat.useItem.minecraft.writable_book' => [
        'award' => 'Escritos',
        'desc'  => 'Livros escritos',
        'icon'  => 'items/book_writable.png',
    ],
    'stat.walkOneCm' => [
        'award' => 'Viajante',
        'desc'  => 'Distancia andada',
        'icon'  => 'items/iron_boots.png',
        'displayFunc' => 'cmToDistance',
    ],
	'stat.aviateOneCm' => [
        'award' => 'Elytra!',
        'desc'  => 'Distancia voada com Elytra',
        'icon'  => 'items/elytra.png',
        'displayFunc' => 'cmToDistance',
    ],
];
?>
