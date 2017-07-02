<div class="widget">
    <h1>Todays Dailies</h1>
    <?php
        $missions = getDaily(Date("Y/m/d"));
        foreach ($missions as $key => $value) {
            echo "<strong>".$key . "</strong>: " . $value . "<br>";
        }
    ?>
</div>
<div class="widget">
    <h1>Timers</h1>
    <p class="errintime"></p>
    <p class="localtime"></p>
    <p class="servertime"></p>
    <p class="pricetime"></p>
</div>
<!-- <div class="widget">
    <h1>Raids</h1>
    <table>
        <tbody>
            <tr>
                <td>10:00 & 23:00</td>
                <td>Giant Sandworm</td>
            </tr>
            <tr>
                <td>10:30 & 17:00</td>
                <td>Desert Dragon</td>
            </tr>
            <tr>
                <td>11:00 & 19:00</td>
                <td>Black Dragon</td>
            </tr>
            <tr>
                <td>11:30 & 19:30</td>
                <td>White Dragon</td>
            </tr>
            <tr>
                <td>12:00 & 13:00</td>
                <td>Ifrit</td>
            </tr>
            <tr>
                <td>12:00 & 16:00</td>
                <td>Mammoth</td>
            </tr>
            <tr>
                <td>13:30 & 17:30</td>
                <td>Yeti</td>
            </tr>
            <tr>
                <td>14:00 & 20:00</td>
                <td>Giant Lion</td>
            </tr>
            <tr>
                <td>15:00 & 19:00</td>
                <td>Prarie Dragon</td>
            </tr>
            <tr>
                <td>15:00 & 18:00</td>
                <td>Giant Alligator</td>
            </tr>
            <tr>
                <td>16:00 & 21:00</td>
                <td>Red Dragon</td>
            </tr>
        </tbody>
    </table>
</div> -->

<div class="widget">
    <h1>Raids 2.0</h1>
    <table>
        <thead>
            <th></th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
            <th>14</th>
            <th>15</th>
            <th>16</th>
            <th>17</th>
            <th>18</th>
            <th>19</th>
            <th>20</th>
            <th>21</th>
            <th>22</th>
            <th>23</th>
        </thead>

        <tbody>
            <tr class="raid">
                <td>Giant Sandworm</td>
                <td class="10" id="time"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23" id="time"></td>
            </tr>

            <tr class="raid">
                <td>Desert Dragon</td>
                <td class="10" id="time"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17" id="time"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Black Dragon</td>
                <td class="10"></td>
                <td class="11" id="time"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19" id="time"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>


            <tr class="raid">
                <td>White Dragon</td>
                <td class="10"></td>
                <td class="11" id="time"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19" id="time"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Ifrit</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12" id="time"></td>
                <td class="13" id="time"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Mammoth</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12" id="time"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16" id="time"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Yeti</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13" id="time"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17" id="time"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Giant Lion</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14" id="time"></td>
                <td class="15"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20" id="time"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Prarie Dragon</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15" id="time"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19" id="time"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Giant Alligator</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15" id="time"></td>
                <td class="16"></td>
                <td class="17"></td>
                <td class="18" id="time"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>

            <tr class="raid">
                <td>Red Dragon</td>
                <td class="10"></td>
                <td class="11"></td>
                <td class="12"></td>
                <td class="13"></td>
                <td class="14"></td>
                <td class="15"></td>
                <td class="16" id="time"></td>
                <td class="17"></td>
                <td class="18"></td>
                <td class="19"></td>
                <td class="20"></td>
                <td class="21" id="time"></td>
                <td class="22"></td>
                <td class="23"></td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>Spawn Time <div class="spawn"></li>
        <li>Currently Spawned <div class="overlap"></li>
        <li>Current Server Time <div class="time"></li>
        <li>&nbsp;</li>
        <li>Please note mobs may spawn up to 1 hour after time listed due to server lag!</li>
    </ul>
</div>


<div class="widget">
    <h1>Discord</h1>
    <div class="discord">
        <ul>
            <?php
                $url = 'https://discordapp.com/api/guilds/330471759801221121/widget.json';
                $content = json_decode(file_get_contents($url));
                $userCount = 0;
                foreach ($content->channels as $channel) {
                    echo "<li><strong>".$channel->name . "</strong></li>";
                    echo "<ul>";
                    foreach ($content->members as $user) {
                        if(isset($user->channel_id) && $user->channel_id == $channel->id) {
                            echo isset($user->nick) ? "<li><div class='$user->status'></div>".$user->nick . "</li>" : "<li>".$user->username . "</li>";
                        }
                    }
                    echo "</ul>";
                }

                foreach ($content->members as $user) {
                    $userCount++;
                }
                echo "<li>&nbsp;</li>";
                echo "<li>There are $userCount users online.</li>";
                echo "<li><a href='$content->instant_invite'>Come join the chat!</a>";
            ?>
        </ul>
    </div>
</div>
