<?php
    date_default_timezone_set('America/Los_Angeles');
    $date = date("Y/m/d");
    $date = strtotime($date);

    if (date('H') > 7) {
        $date = strtotime("+1 day", $date);
    }
?>
    <table>
        <thead>
            <th>Date</th>
            <th>Tail Daily</th>
            <th>Tail VIP</th>
            <th>Tara Daily</th>
            <th>Tara VIP</th>
        </thead>
        <tbody>
            <?php
                $dates = [date( 'Y/m/d', strtotime( 'monday this week' ) ),
                date( 'Y/m/d', strtotime( 'tuesday this week' ) ),
                date( 'Y/m/d', strtotime( 'wednesday this week' ) ),
                date( 'Y/m/d', strtotime( 'thursday this week' ) ),
                date( 'Y/m/d', strtotime( 'friday this week' ) ),
                date( 'Y/m/d', strtotime( 'saturday this week' ) ),
                date( 'Y/m/d', strtotime( 'sunday this week' ) )];
                foreach ($dates as $date) {
                    $dailies = getDaily($date);
                ?>
                    <tr>
                    <td title="<?=$date?>" <?=$date==date("Y/m/d")?'bgcolor="#ff6600"':''?>><?=date("l",strtotime($date))?></td>
                    <td <?=$date==date("Y/m/d")?'bgcolor="#ff6600"':''?>><a href="http://wiki.mabinogiworld.com/view/<?=$dailies[0]?>#Rewards"><?=$dailies['Taillteann']?></a></td>
                    <td <?=$date==date("Y/m/d")?'bgcolor="#ff6600"':''?>><a href="http://wiki.mabinogiworld.com/view/<?=$dailies[2]?>#Rewards"><?=$dailies['Taillteann VIP']?></a></td>
                    <td <?=$date==date("Y/m/d")?'bgcolor="#ff6600"':''?>><a href="http://wiki.mabinogiworld.com/view/<?=$dailies[1]?>#Rewards"><?=$dailies['Tara']?></a></td>
                    <td <?=$date==date("Y/m/d")?'bgcolor="#ff6600"':''?>><a href="http://wiki.mabinogiworld.com/view/<?=$dailies[3]?>#Rewards"><?=$dailies['Tara VIP']?></a></td>
                    </tr>
                <?php
                }
            ?>
        </tbody>
    </table>
    * Daily Shadow Missions are refreshed in <p class="refreshTime"></p>.

<script>
var countDownDate = new Date("<?=$date?> 07:00:00").getTime();
</script>
