<?php
include 'top.php';
$RallyWins = array(
    array("2017", "Subaru Rally Team", "Travis Pastrana", "Robbie Durant", "117"),
    array("2018", "Subaru Rally Team", "David Higgins", "Craig Drew", "106"),
    array("2019", "Subaru Motorsports USA", "David Higgins", "Craig Drew", "114"),
    array("2020", "McKenna Motorsports", "Barry Mckenna", "Leon Jordan", "83"),
    array("2021", "Subaru Motorsports USA", "Travis Pastrana", "Rhianon Gelsomino", "122"),

);
?>
<main>
    <h1>Rally And Rally Cross</h1>
    <section class="rally-begin">

        <figure class="fig-curve">
            <img alt="" src="images/old_rally.jpg" class="img-curve">
            <figcaption>Subaru's S5-S6 WRC In Action <cite><a href="https://dirtfish.com/rally/wrc/your-favorite-world-rally-car-2-subaru-impreza-s5-s6-wrc/" target="_blank">[Photo by Mcklein]</a></cite> </figcaption>
        </figure>

        <h2>The Beginning</h2>
        <p>Subaru World Rally Team and Rally Champsion was the beginning of the rally legends. The now highly iconic Blue and Gold livery was first used on these cars. At the start of their rally carrers, in the 1980s, they were playing catch up to all those who were already winning events. The Legacy RS is what started the legend of Colin McRae, and what propelled Subaru's rally and fanbase.</p>

        <h3>Finally Winners</h3>
        <p>It took Subaru a decade until they released their Group A Subaru Legacy RS in the 1990 season. This would be the car that the blue and gold livery was to be used on first. It wasn't until 1995 that Subau won their first Constructors Championship and Colin McRae taking home his first Driver's Championship after winnig RAC Rally of Great Britain. This is where the success finally started for the world rally program for Subaru and it what started their legacy.</p>

        <h3>The End Of The Line</h3>
        <p>With Subaru's success, they wanted to keep the results, but with competion so fierce and the nature of rallying, they weren't guranteeted anything. After 2001, Subaru not getting the results they wanted. They were placing second or third in the manufactor's Championship but could not take first. This trend followed until 2008 when Subaru withdrawed from WRC.</p>

    </section>


    <section class="ara-rally">
        <figure class="fig-curve">
            <img alt="" src="images/rally_cars.jpg" class="img-curve">
            <figcaption>The Subaru's Rally And Rallycross Cars Together <cite><a href="https://secure-akns.subaru.com/content/media/mp_hero_880/LOU_9725_w.jpg" target="_blank">[Photo By Subaru]</a></cite> </figcaption>
        </figure>

        <h2>The America Rally Association Legends</h2>
        <p>In 2005, Subaru of America partnered with Vermont Sports Car (VSC) and ever since then, VSC has been in charge of the Rally program in America. Now known the team known Subaru Motorsports USA has been in the fight for the American Rally Association events, winning 14 out of 17 rally championships. Those 14 season wins have not had been without challenge. During the beginning of Subaru's rally hunt, they faced competion in what would the the Mitsubishi Lancer Evolution (EVO). The EVO and the STI were at the top of the Rally mountatin, constantly battling for the title of best rally car mainly in the WRC but also in the ARA. This pushed Subaru as a brand to overcome the EVO in both stock production and rallying. The EVO is what propelled Subaru to make the STI constant impovements and helped Subaru Motorsports USA overcome the difficutls not only of each rally, but of each competitor as well. </p>

        <p>As the EVO stopped production with the EVO 10, this did not mean the the rivalry was over. Mainly still run the EVOs in rally but over the years more rivals have come to challenge the STI in rally such as the Ford Focus RS.</p>

        <p>But Subaru's main compettion was not just the cars, but also the drivers in them. Every rally was not over until it was over as the nature of rallying is chaos and things can turn in a moment wether be a flat tire, or the crash. This allowed others who were highly skilled in their own right to take the lead and potentially win the championship</p>

    </section>

    <section class="ara-drivers">
        <figure class="fig-curve">
            <img alt="" src="images/pastrana_car.jpg" class="img-curve">
            <figcaption>Pastrana's Record Breaking Climb On MT. Washington <cite><a href="https://www.motor1.com/photo/6052357/travis-pastrana-breaks-mt.-washington-hill-climb-record-again/" target="_blank">[Photo by Motor1]</a></cite> </figcaption>
        </figure>

        <h2>Drivers</h2>

        <p>As much as rally is about the cars, its also about the drivers. There is one name that has stuck out for the American Rally Association drivers, David Higgins. Joining the rally team in 2011, he came from a winnig background of rally in the British championships. He won 5 consquective ARA championships from 2011-2016 and one more in 2018. Higgins was unmatched as in 2015 he went through the ARA season undefeated. Without Higgins, Subaru's rally team would not have gotten so much success, especially with the caliber of rivals including one Barry Mckenna and Ken Block who always put up a fight and teammates as well as Travis Pastrana is the one who stole the championships away in the 2017 season. Higgins was inducted into the OFF-ROAD Motorsports Hall Of Fame in 2019 Following his championship win.</p>

        <p>However current drivers are always changing. The driver who came and replaced Higgins is Travis Pastrana. Pastrana who has a background in X-Games and has worked with Subaru rally's team before, joined Subaru Motorsports USA as a secondary driver along side Higgins in 2017 and competed alongside him during the ARA seasons and winning the championship. However for the 2019 season Higgins took it. Pastrana currently is the lead Subaru rally drvier, who is also co-creator of the Nitro Rally Cross series and competes with the rally cross team.
        </p>

        <p>The other current driver is Brandon Semenuk who also competed in the X-Games and has a background in rallying. He joined the rally team in 2020 and has been competing against Pastrana and Mckenna for the rally championship.</p>


    </section>

    <section class="rallycross">
        <h2>The Rally Cross Legacy</h2>
        <h3>Last <?php print count($RallyWins, 0); ?> ARA Rally Driver Championships Winners</h3>
        <table>
            <tr>
                <th>Year</th>
                <th>Team</th>
                <th>Driver</th>
                <th>Co-Driver</th>
                <th>Total Points</th>
            </tr>
            <?php
            foreach ($RallyWins as $RallyWin) {
                print '<tr>';
                print '<td>' . $RallyWin[0] . '</td>';
                print '<td>' . $RallyWin[1] . '</td>';
                print '<td>' . $RallyWin[2] . '</td>';
                print '<td>' . $RallyWin[3] . '</td>';
                print '<td>' . $RallyWin[4] . '</td>';
                print '</tr>';
                print PHP_EOL;
            }
            ?>

            <tr>
                <td colspan="2">Sources:</td>
                <td colspan="3"><a href="https://www.americanrallyassociation.org/" target="_blank">American Rally Association</a></td>
            </tr>
        </table>

        <p>Subaru has been dominant over the decade and Subaru Of America wanted to pursue more. Looking at the past 5 years, Subaru has taken 4 out of the 5 championships in the ARA with many more before that.</p>

        <figure class="fig-curve">
            <img alt="" src="images/rallycross_jump.jpg" class="img-curve">
            <figcaption> Subaru's Rallycross Car Mid-Air After A Jump <cite><a href="https://www.conceptcarz.com/article-image/43405,134124/subaru-motorsports-usa-2021-nitro-rallycross-lineup.aspx" target="_blank">[ConceptCars Photo Taken By Subaru]</a></cite> </figcaption>
        </figure>

        <h3>The Start Of Rallycross</h3>
        <p>In the midst of Subaru's rally success, Subaru of USA wanted to explore rally cross in the Global Rallycross, however they were a little late to the game. In 2013 they announced they were going to get into rally cross. However it was an entirely new playing field to them as instead of regular rally where they raced against each other for best times, rally cross they raced besides each other and included jumps as well. Subaru was behind and it wasnt until the 2014 season when they got on the podium for the first time. But then using the new 2015 models they fell behind again and didn't start finding success until the 2017 season. In 2018 Global Rallycross ended and ARX Rallycross started in 2019. They came in 2nd for the championship. However they ended up not continuing, after all of Subaru's work all seemed promissing and paying off, it seemed like that was the end. </p>

        <h3>Nitro Rally</h3>
        <p>Nitro Rallycross (RX) was the perfect solution for Subaru and all the other rally cross competitors. With the help of Pastrana, the first rally cross event seemed promising with the track that pushed the limits, with a 50 foot jump that all drivers had to take once. Subaru did not win, and their top driver Scott Speed had an injury in such that lost them their ARX championship. Then in 2019 Nitro RX took over, Subaru was seeing results but not what they wanted. It was all about winning the championship. In 2021 season, Subaru took the title that they longed for and became Rally Cross champions, off the win of Pastrana who also that year won the ARA championship.</p>
    </section>

    <section class="wins-future">

        <h2>Launch Control</h2>
        <p>Subaru of America started the documentation and journey of the rally team and VSC starting in 2013. This was to show that there was more than just fast cars that goes on and in hopes connect the fanbase more to what goes on with the sport and behind the scenes. Launch Control is available for all those to watch on YouTube and shows all the ups and downs they have had over their journey.</p>


        <h2>Future Of Rally And Rallycross</h2>
        <p>There is no decided future on rally and rally cross, especially as we move towards electric vehicles. It is not certain how this change will effect these sports and if Subaru's team will run the STI when it is developed or stick with the new WRX. There is no promise that ARA will continue hosting rally events or the Nitro RX will continue. For the 2023 season everything is confirmed and will happen, as the Subaru Team will most likely run the new WRX and possibly the Older one as well, there might be more challenges and possible more rivals ahead.</p>


        <h3>More information</h3>
        <p> If you are intrested in rally or rallycross current news, check out these websites.</p>

        <ul>
            <li><a href="https://www.americanrallyassociation.org/" target="_blank">American Rally Association</a></li>
            <li><a href="https://www.nitrorallycross.com/" target="_blank">Nitro RX</a></li>
            <li><a href="https://www.subaru.com/enthusiasts/rally.html" target="_blank">Subaru</a></li>
            <li><a href="https://vtcar.com/" target="_blank">VSC</a></li>
            <li><a href="https://dirtfish.com/rally/wrc/subarus-top-wrc-winners/" target="_blank">DirtFish Rally</a></li>
        </ul>
    </section>

</main>
<?php
include 'footer.php';
?>