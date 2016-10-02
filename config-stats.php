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
        'award' => 'Blacksmith',
        'desc'  => 'Swords crafted',
        'icon'  => 'items/stone_sword.png',
    ],
    'achievement.diamondsToYou' => [
        'award' => 'Communist',
        'desc'  => 'Diamonds tossed to others',
        'icon'  => 'items/diamond.png',
    ],
    'achievement.ghast' => [
        'award' => 'Minecraft Open',
        'desc'  => 'Ghasts killed with own fireball',
        'icon'  => 'items/fireball.png',
    ],
    'achievement.mineWood' => [
        'award' => 'Woodcutter',
        'desc'  => 'Wood cut',
        'icon'  => 'blocks/log_oak_top.png',
    ],
    'achievement.openInventory' => [
        'award' => 'Where did I put...?',
        'desc'  => 'Times the inventory was opened',
        'icon'  => 'gui/inventory.png',
    ],
    'achievement.portal' => [
        'award' => 'Multiworld',
        'desc'  => 'Number of portal uses',
        'icon'  => 'blocks/portal.png',
    ],
    'custom.breakTool' => [
        'award' => 'Wastrel',
        'desc'  => 'Tools broken',
        'icon'  => 'items/stick.png',
        'provider' => 'breakToolProvider',
    ],
    'custom.craftArmor' => [
        'award' => 'Armorer',
        'desc'  => 'Pieces of armor crafted',
        'icon'  => 'items/diamond_chestplate.png',
        'provider' => 'craftArmorProvider',
    ],
    'custom.craftTool' => [
        'award' => 'Workshop',
        'desc'  => 'Tools crafted',
        'icon'  => 'blocks/crafting_table_front.png',
        'provider' => 'craftToolProvider',
    ],
    'custom.craftMineralBlock' => [
        'award' => 'Compressor',
        'desc'  => 'Mineral blocks crafted',
        'icon'  => 'blocks/emerald_block.png',
        'provider' => 'craftMineralBlockProvider',
    ],
    'custom.eatMeat' => [
        'award' => 'Meat on the Table',
        'desc'  => 'Meat items eaten',
        'icon'  => 'items/beef_cooked.png',
        'provider' => 'eatMeatProvider',
    ],
    'custom.eatRawMeat' => [
        'award' => 'Raw Eater',
        'desc'  => 'Raw meat items eaten',
        'icon'  => 'items/beef_raw.png',
        'provider' => 'eatRawMeatProvider',
    ],
    'custom.eatStew' => [
        'award' => 'Soupy Kaspar',
        'desc'  => 'Stews eaten',
        'icon'  => 'items/mushroom_stew.png',
        'provider' => 'eatStewProvider',
    ],
    'custom.eatFish' => [
        'award' => 'Fish Gourmet',
        'desc'  => 'Fish eaten',
        'icon'  => 'items/fish_cod_cooked.png',
        'provider' => 'eatFishProvider',
    ],
    'custom.eatVeggies' => [
        'award' => 'Vegetarian',
        'desc'  => 'Veggie items eaten',
        'icon'  => 'items/apple.png',
        'provider' => 'eatVeggiesProvider',
    ],
    'custom.eatCrap' => [
        'award' => 'Bottom Feeder',
        'desc'  => 'Crap items eaten',
        'icon'  => 'items/rotten_flesh.png',
        'provider' => 'eatCrapProvider',
    ],
    'custom.exploreBiomes' => [
        'award' => 'Explorer',
        'desc'  => 'Different biomes explored',
        'icon'  => 'items/map_filled.png',
        'provider' => 'exploreBiomesProvider',
    ],
    'custom.mineDirt' => [
        'award' => 'Excavator',
        'desc'  => 'Dirt, sand and gravel "mined"',
        'icon'  => 'items/stone_shovel.png',
        'provider' => 'mineDirtProvider',
    ],
    'custom.placeGlass' => [
        'award' => 'Glassworker',
        'desc'  => 'Glass placed',
        'icon'  => 'blocks/glass.png',
        'provider' => 'placeGlassProvider',
    ],
    'custom.placePiston' => [
        'award' => 'Mechanic',
        'desc'  => 'Pistons placed',
        'icon'  => 'blocks/piston_side.png',
        'provider' => 'placePistonProvider',
    ],
    'custom.placePlant' => [
        'award' => 'Green Thumb',
        'desc'  => 'Saplings and flowers planted',
        'icon'  => 'blocks/sapling_oak.png',
        'provider' => 'placePlantProvider',
    ],
    'custom.placeRedstone' => [
        'award' => 'Electrician',
        'desc'  => 'Redstone items placed',
        'icon'  => 'items/redstone_dust.png',
        'provider' => 'placeRedstoneProvider',
    ],
    /* This award doesn't mean much, because placing trap chests is a common way to save space
       'custom.placeTrap' => [
       'award' => 'Prankster',
       'desc'  => 'Trap items placed',
       'icon'  => 'blocks/trip_wire_source.png',
       'provider' => 'placeTrapProvider',
       ], */
    'custom.plowDirt' => [
        'award' => 'Farmer',
        'desc'  => 'Ground blocks plowed',
        'icon'  => 'items/diamond_hoe.png',
        'provider' => 'plowDirtProvider',
    ],
    'custom.suspect' => [
        'award' => 'Suspect',
        'desc'  => 'You don\'t want this award',
        'icon'  => 'items/barrier.png',
        'provider' => 'suspectProvider',
        'displayFunc' => 'suspectDisplay',
    ],
    'custom.useNoteblock' => [
        'award' => 'Musician',
        'desc'  => 'Note blocks played/tuned',
        'icon'  => 'blocks/noteblock.png',
        'provider' => 'useNoteblockProvider',
    ],
    'stat.animalsBred' => [
        'award' => 'Animal Lover',
        'desc'  => 'Animals bred',
        'icon'  => 'items/wheat.png',
    ],
    'stat.boatOneCm' => [
        'award' => 'Sailor',
        'desc'  => 'Distance gone by boat',
        'icon'  => 'items/boat.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.chestOpened' => [
        'award' => 'Warehouser',
        'desc'  => 'Chests opened',
        'icon'  => 'blocks/chest.png',
    ],
    'stat.climbOneCm' => [
        'award' => 'Climber',
        'desc'  => 'Distance climbed',
        'icon'  => 'blocks/ladder.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.craftItem.minecraft.beacon' => [
        'award' => 'Ray of Light',
        'desc'  => 'Beacons crafted',
        'icon'  => 'blocks/beacon.png',
    ],
    'stat.craftItem.minecraft.bookshelf' => [
        'award' => 'Librarian',
        'desc'  => 'Bookshelves crafted',
        'icon'  => 'blocks/bookshelf.png',
    ],
    'stat.craftItem.minecraft.brick_block' => [
        'award' => 'Brickhead',
        'desc'  => 'Brick blocks crafted',
        'icon'  => 'blocks/brick.png',
    ],
    'stat.craftItem.minecraft.cake' => [
        'award' => 'Liar',
        'desc'  => 'Cakes made',
        'icon'  => 'items/cake.png',
    ],
    'stat.craftItem.minecraft.clock' => [
        'award' => 'What time is it?',
        'desc'  => 'Clocks crafted',
        'icon'  => 'items/clock.png',
    ],
    'stat.craftItem.minecraft.compass' => [
        'award' => 'Where am I?',
        'desc'  => 'Compasses crafted',
        'icon'  => 'items/compass.png',
    ],
    'stat.craftItem.minecraft.ender_chest' => [
        'award' => 'Grief This!',
        'desc'  => 'Ender Chests crafted',
        'icon'  => 'blocks/ender_chest.png',
    ],
    'stat.craftItem.minecraft.lit_pumpkin' => [
        'award' => 'Trick or Treat!',
        'desc'  => 'Jack o\'Lanterns crafted',
        'icon'  => 'blocks/pumpkin_face_on.png',
    ],
    'stat.craftItem.minecraft.netherbrick' => [
        'award' => 'Nether Constructor',
        'desc'  => 'Nether Bricks made',
        'icon'  => 'items/netherbrick.png',
    ],
    'stat.craftItem.minecraft.paper' => [
        'award' => 'Paper Champion',
        'desc'  => 'Paper produced',
        'icon'  => 'items/paper.png',
    ],
    /* don't want to promote TNT
       'stat.craftItem.minecraft.tnt' => [
       'award' => 'Bad Intentions',
       'desc'  => 'TNT crafted',
       'icon'  => 'blocks/tnt_side.png',
       ],
    */
    'stat.craftItem.minecraft.sponge' => [
        'award' => 'Spongebob',
        'desc'  => 'Sponges dried',
        'icon'  => 'blocks/sponge.png',
    ],
    'stat.craftItem.minecraft.wool' => [
        'award' => 'Clothier',
        'desc'  => 'Wool crafted or dyed',
        'icon'  => 'blocks/wool_colored_white.png',
    ],
    'stat.crouchOneCm' => [
        'award' => 'Sneaker',
        'desc'  => 'Distance crouched',
        'icon'  => 'gui/eye.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.damageDealt' => [
        'award' => 'Berserker',
        'desc'  => 'Hearts of damage dealt',
        'icon'  => 'gui/sword_bloody.png',
    ],
    'stat.damageTaken' => [
        'award' => 'Masochist',
        'desc'  => 'Hearts of damage taken',
        'icon'  => 'gui/heart_black.png',
    ],
    'stat.deaths' => [
        'award' => 'Extra Life',
        'desc'  => 'Number of deaths',
        'icon'  => 'gui/heart.png',
    ],
    'stat.diveOneCm' => [
        'award' => 'Diver',
        'desc'  => 'Distance dived',
        'icon'  => 'gui/depth_strider.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.drop' => [
        'award' => 'Begone!',
        'desc'  => 'Items dropped',
        'icon'  => 'gui/destroy.png',
    ],
    'stat.fishCaught' => [
        'award' => 'Fisherman',
        'desc'  => 'Fish caught',
        'icon'  => 'items/fish_cod_raw.png',
    ],
    'stat.flowerPotted' => [
        'award' => 'Florist',
        'desc'  => 'Plants potted',
        'icon'  => 'blocks/flower_rose.png',
    ],
    'stat.horseOneCm' => [
        'award' => 'Rider',
        'desc'  => 'Distance ridden on horse',
        'icon'  => 'items/saddle.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.jump' => [
        'award' => 'Bunnyhopper',
        'desc'  => 'Times jumped',
        'icon'  => 'gui/bunny.png',
    ],
    'stat.junkFished' => [
        'award' => 'Wannabe Fisherman',
        'desc'  => 'Junk items fished',
        'icon'  => 'items/bowl.png',
    ],
    'stat.entityKilledBy.Creeper' => [
        'award' => 'Crept',
        'desc'  => 'Times killed by a creeper',
        'icon'  => 'minecraft-wiki/mobs/CreeperFace.png',
    ],
    'stat.entityKilledBy.Zombie' => [
        'award' => 'Infected',
        'desc'  => 'Times killed by a zombie',
        'icon'  => 'minecraft-wiki/mobs/ZombieVillagerHead.png',
    ],
    'stat.killEntity.Bat' => [
        'award' => 'Badman',
        'desc'  => 'Bats killed',
        'icon'  => 'minecraft-wiki/mobs/BatFace.png',
    ],
    'stat.killEntity.Blaze' => [
        'award' => 'Nether Extinguisher',
        'desc'  => 'Blazes killed',
        'icon'  => 'minecraft-wiki/mobs/Blaze_Face.png',
    ],
    'stat.killEntity.Chicken' => [
        'award' => 'KFC',
        'desc'  => 'Chickens killed',
        'icon'  => 'items/chicken_cooked.png',
    ],
    'stat.killEntity.Cow' => [
        'award' => 'Cow Tipper',
        'desc'  => 'Cows killed',
        'icon'  => 'items/leather.png',
    ],
    'stat.killEntity.Creeper' => [
        'award' => 'Creeper Creep',
        'desc'  => 'Creepers killed',
        'icon'  => 'items/gunpowder.png',
    ],
    'stat.killEntity.Enderman' => [
        'award' => 'Enderman Ender',
        'desc'  => 'Endermen killed',
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
        'award' => 'Horse Hater',
        'desc'  => 'Horses killed',
        'icon'  => 'minecraft-wiki/mobs/HorseHead.png',
    ],
    'stat.killEntity.Ghast' => [
        'award' => 'Tear Drinker',
        'desc'  => 'Ghasts killed',
        'icon'  => 'items/ghast_tear.png',
    ],
    'stat.killEntity.Guardian' => [
        'award' => 'Underwater Raider',
        'desc'  => 'Guardians killed',
        'icon'  => 'minecraft-wiki/mobs/64px-GuardianFace.png',
    ],
    'stat.killEntity.LavaSlime' => [
        'award' => 'Magma Cream',
        'desc'  => 'Magma Cubes killed',
        'icon'  => 'items/magma_cream.png',
    ],
    'stat.killEntity.MushroomCow' => [
        'award' => 'I Killed a Mooshroom!',
        'desc'  => 'Mooshrooms killed',
        'icon'  => 'minecraft-wiki/mobs/MooshroomFace.png',
    ],
    'stat.killEntity.Ozelot' => [
        'award' => 'Bad Kitty!',
        'desc'  => 'Ocelots / cats killed',
        'icon'  => 'minecraft-wiki/mobs/OcelotFace.png',
    ],
    'stat.killEntity.Pig' => [
        'award' => 'Bacon Lover',
        'desc'  => 'Pigs killed',
        'icon'  => 'items/porkchop_raw.png',
    ],
    'stat.killEntity.PigZombie' => [
        'award' => 'Against the Nether',
        'desc'  => 'Zombie Pigmen killed',
        'icon'  => 'minecraft-wiki/mobs/ZombiePigmanFace.png',
    ],
    'stat.killEntity.Rabbit' => [
        'award' => 'Bunny Killer :(',
        'desc'  => 'Rabbits killed',
        'icon'  => 'minecraft-wiki/mobs/Rabbiticon.png',
    ],
    'stat.killEntity.Sheep' => [
        'award' => 'Big Bad Wolf',
        'desc'  => 'Sheep killed',
        'icon'  => 'minecraft-wiki/mobs/SheepFace.png',
    ],
    'stat.killEntity.Silverfish' => [
        'award' => 'Nasty Little...',
        'desc'  => 'Silverfish killed',
        'icon'  => 'minecraft-wiki/mobs/SilverfishFace.png',
    ],
    'stat.killEntity.Skeleton' => [
        'award' => 'Bone Collector',
        'desc'  => 'Skeletons killed',
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
        'award' => 'Swamp Lurker',
        'desc'  => 'Slimes killed',
        'icon'  => 'minecraft-wiki/mobs/SlimeFace.png',
    ],
    'stat.killEntity.Spider' => [
        'award' => 'Arachnophobia',
        'desc'  => 'Spiders killed',
        'icon'  => 'minecraft-wiki/mobs/SpiderFace.png',
    ],
    'stat.killEntity.Squid' => [
        'award' => 'Pool Cleaner',
        'desc'  => 'Squids killed',
        'icon'  => 'minecraft-wiki/mobs/Squidface.png',
    ],
    'stat.killEntity.Villager' => [
        'award' => 'Bully',
        'desc'  => 'Villagers killed',
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
        'award' => 'Witch Hunter',
        'desc'  => 'Witches killed',
        'icon'  => 'minecraft-wiki/mobs/Witchface2.png',
    ],
    'stat.killEntity.Wolf' => [
        'award' => 'Bad Dog!',
        'desc'  => 'Wolves / dogs killed',
        'icon'  => 'minecraft-wiki/mobs/WolfFace.png',
    ],
    'stat.killEntity.Zombie' => [
        'award' => 'Zombie Grinder',
        'desc'  => 'Zombies killed',
        'icon'  => 'minecraft-wiki/mobs/ZombieFace.png',
    ],
    'stat.itemEnchanted' => [
        'award' => 'Enchanter',
        'desc'  => 'Items enchanted',
        'icon'  => 'blocks/enchanting_table_top.png',
    ],
    'stat.mineBlock.minecraft.cactus' => [
        'award' => 'Cactus Farmer',
        'desc'  => 'Cacti mined',
        'icon'  => 'blocks/cactus_side.png',
    ],
    'stat.mineBlock.minecraft.coal_ore' => [
        'award' => 'Black Gold',
        'desc'  => 'Coal ore blocks mined',
        'icon'  => 'blocks/coal_ore.png',
    ],
    'stat.mineBlock.minecraft.diamond_ore' => [
        'award' => 'Capitalist',
        'desc'  => 'Diamond ore blocks mined',
        'icon'  => 'blocks/diamond_ore.png',
    ],
    'stat.mineBlock.minecraft.emerald_ore' => [
        'award' => 'Mountain Miner',
        'desc'  => 'Emerald ore blocks mined',
        'icon'  => 'blocks/emerald_ore.png',
    ],
    'stat.mineBlock.minecraft.gold_ore' => [
        'award' => 'Gold Rush',
        'desc'  => 'Gold ore blocks mined',
        'icon'  => 'blocks/gold_ore.png',
    ],
    'stat.mineBlock.minecraft.ice' => [
        'award' => 'Ice Breaker',
        'desc'  => 'Ice blocks destroyed',
        'icon'  => 'blocks/ice.png',
    ],
    'stat.mineBlock.minecraft.iron_ore' => [
        'award' => 'Heart of Iron',
        'desc'  => 'Iron ore blocks mined',
        'icon'  => 'blocks/iron_ore.png',
    ],
    'stat.mineBlock.minecraft.lapis_ore' => [
        'award' => 'Enchanter\'s Gopher',
        'desc'  => 'Lapis Lazuli ore blocks mined',
        'icon'  => 'blocks/lapis_ore.png',
    ],
    'stat.mineBlock.minecraft.melon_block' => [
        'award' => 'Melon Helmet',
        'desc'  => 'Melons farmed',
        'icon'  => 'blocks/melon_side.png',
    ],
    'stat.mineBlock.minecraft.netherrack' => [
        'award' => 'Terraformer',
        'desc'  => 'Netherrack mined',
        'icon'  => 'blocks/netherrack.png',
    ],
    'stat.mineBlock.minecraft.obsidian' => [
        'award' => 'Obsidian Miner',
        'desc'  => 'Obsidian blocks mined',
        'icon'  => 'blocks/obsidian.png',
    ],
    'stat.mineBlock.minecraft.quartz_ore' => [
        'award' => 'Use the Quartz!',
        'desc'  => 'Nether Quartz ore blocks mined',
        'icon'  => 'blocks/quartz_ore.png',
    ],
    'stat.mineBlock.minecraft.redstone_ore' => [
        'award' => 'I Need This!',
        'desc'  => 'Redstone ore blocks mined',
        'icon'  => 'blocks/redstone_ore.png',
    ],
    'stat.mineBlock.minecraft.stone' => [
        'award' => 'Mason',
        'desc'  => 'Stone mined',
        'icon'  => 'blocks/stone.png',
    ],
    'stat.mineBlock.minecraft.tallgrass' => [
        'award' => 'Lawnmower',
        'desc'  => 'Tall grass block destroyed',
        'icon'  => 'blocks/tallgrass.png',
    ],
    'stat.mineBlock.minecraft.torch' => [
        'award' => 'The Darkside',
        'desc'  => 'Torches destroyed',
        'icon'  => 'blocks/redstone_torch_off.png',
    ],
    'stat.mineBlock.minecraft.web' => [
        'award' => 'God...Damnit...!!',
        'desc'  => 'Cobweb removed',
        'icon'  => 'blocks/web.png',
    ],
    'stat.minecartOneCm' => [
        'award' => 'Rail Rider',
        'desc'  => 'Distance gone by minecart',
        'icon'  => 'items/minecart_normal.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.pigOneCm' => [
        'award' => 'Because I Can',
        'desc'  => 'Distance ridden on a pig',
        'icon'  => 'items/carrot_on_a_stick.png',
        'displayFunc' => 'cmToDistance',
    ],
    'stat.playOneMinute' => [
        'award' => 'Addict',
        'desc'  => 'Time played on the server',
        'icon'  => 'gui/connection.png',
        'displayFunc' => 'ticksToTime',
    ],
    'stat.recordPlayed' => [
        'award' => 'Disc Jockey',
        'desc'  => 'Records played',
        'icon'  => 'items/record_13.png',
    ],
    'stat.sleepInBed' => [
        'award' => 'Sleepyhead',
        'desc'  => 'Times slept in bed',
        'icon'  => 'items/bed.png',
    ],
    'stat.sprintOneCm' => [
        'award' => 'Marathon Runner',
        'desc'  => 'Distance sprinted',
        'displayFunc' => 'cmToDistance',
        'icon'  => 'gui/speed.png',
    ],
    'stat.swimOneCm' => [
        'award' => 'Swimmer',
        'desc'  => 'Distance swum',
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
        'award' => 'Survivor',
        'desc'  => 'Time since last death',
        'icon'  => 'gui/resistance.png',
        'displayFunc' => 'ticksToTime',
    ],
    'stat.tradedWithVillager' => [
        'award' => 'Trader',
        'desc'  => 'Villager trades completed',
        'icon'  => 'items/emerald.png',
    ],
    'stat.trappedChestTriggered' => [
        'award' => 'Klutz',
        'desc'  => 'Trapped chests triggered',
        'icon'  => 'blocks/trapped_chest.png',
    ],
    'stat.treasureFished' => [
        'award' => 'Treasure Hunter',
        'desc'  => 'Treasures fished',
        'icon'  => 'items/gold_ingot.png',
    ],
    'stat.useItem.minecraft.banner' => [
        'award' => 'Propaganda',
        'desc'  => 'Banners placed',
        'icon'  => 'items/banner.png',
    ],
    'stat.useItem.minecraft.bow' => [
        'award' => 'Archer',
        'desc'  => 'Arrows shot',
        'icon'  => 'items/bow_standby.png',
    ],
    'stat.useItem.minecraft.cookie' => [
        'award' => 'Cookie Monster',
        'desc'  => 'Cookies eaten',
        'icon'  => 'items/cookie.png',
    ],
    'stat.useItem.minecraft.dirt' => [
        'award' => 'Dirtbag',
        'desc'  => 'Dirt placed',
        'icon'  => 'blocks/dirt.png',
    ],
    'stat.useItem.minecraft.egg' => [
        'award' => 'Catch!',
        'desc'  => 'Eggs thrown',
        'icon'  => 'items/egg.png',
    ],
    'stat.useItem.minecraft.ender_eye' => [
        'award' => 'Stronghold Seeker',
        'desc'  => 'Ender Eyes thrown',
        'icon'  => 'items/ender_eye.png',
    ],
    'stat.useItem.minecraft.ender_pearl' => [
        'award' => 'Translocator',
        'desc'  => 'Ender pearls thrown',
        'icon'  => 'items/ender_pearl.png',
    ],
    'stat.useItem.minecraft.fireworks' => [
        'award' => 'Happy New Year!',
        'desc'  => 'Fireworks launched',
        'icon'  => 'items/fireworks.png',
    ],
    'stat.useItem.minecraft.flint_and_steel' => [
        'award' => 'Pyromaniac',
        'desc'  => 'Fires started',
        'icon'  => 'blocks/fire.png',
    ],
    'stat.useItem.minecraft.iron_bars' => [
        'award' => 'Jailer',
        'desc'  => 'Iron Bars placed',
        'icon'  => 'blocks/iron_bars.png',
    ],
    'stat.useItem.minecraft.item_frame' => [
        'award' => 'Museum Owner',
        'desc'  => 'Item frames placed',
        'icon'  => 'items/item_frame.png',
    ],
    'stat.useItem.minecraft.lava_bucket' => [
        'award' => 'I\'m a Griefer!',
        'desc'  => 'Lava buckets emptied',
        'icon'  => 'items/bucket_lava.png',
    ],
    'stat.useItem.minecraft.milk_bucket' => [
        'award' => 'Milksop',
        'desc'  => 'Milk buckets drunk',
        'icon'  => 'items/bucket_milk.png',
    ],
    'stat.useItem.minecraft.nether_wart' => [
        'award' => 'Nether Farmer',
        'desc'  => 'Nether Warts planted',
        'icon'  => 'blocks/nether_wart_stage_2.png',
    ],
    'stat.useItem.minecraft.potion' => [
        'award' => 'Alchemist',
        'desc'  => 'Potions used',
        'icon'  => 'items/potion_bottle_empty.png',
    ],
    'stat.useItem.minecraft.rail' => [
        'award' => 'Railway Company',
        'desc'  => 'Rails placed',
        'icon'  => 'blocks/rail_normal.png',
    ],
    'stat.useItem.minecraft.sea_lantern' => [
        'award' => 'Seabed Inhabitant',
        'desc'  => 'Sea Lanterns placed',
        'icon'  => 'blocks/sea_lantern.png',
    ],
    'stat.useItem.minecraft.shears' => [
        'award' => 'Cutter',
        'desc'  => 'Shears used',
        'icon'  => 'items/shears.png',
    ],
    'stat.useItem.minecraft.sign' => [
        'award' => 'Readme.txt',
        'desc'  => 'Signs placed',
        'icon'  => 'items/sign.png',
    ],
    'stat.useItem.minecraft.snowball' => [
        'award' => 'Snowball Fight!',
        'desc'  => 'Snowballs thrown',
        'icon'  => 'items/snowball.png',
    ],
    'stat.useItem.minecraft.torch' => [
        'award' => 'Enlightened',
        'desc'  => 'Torches placed',
        'icon'  => 'blocks/torch_on.png',
    ],
    'stat.useItem.minecraft.water_bucket' => [
        'award' => 'Spring',
        'desc'  => 'Water buckets emptied',
        'icon'  => 'items/bucket_water.png',
    ],
    'stat.useItem.minecraft.writable_book' => [
        'award' => 'Bestseller',
        'desc'  => 'Books written',
        'icon'  => 'items/book_writable.png',
    ],
    'stat.walkOneCm' => [
        'award' => 'Traveler',
        'desc'  => 'Distance walked',
        'icon'  => 'items/iron_boots.png',
        'displayFunc' => 'cmToDistance',
    ],
];
?>
