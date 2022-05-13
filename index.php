<?php
include 'top.php';
?>
<main>
    <h1>The WRX STI</h1>

    <section class="sti-info">
        <figure class="fig-curve">
            <img alt="" src="images/subaru_line_up.JPG" class="img-curve">
            <figcaption>Three Subarus Lined Up <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/subaru_line_up.JPG"  target="_blank">[Photo by Justin Shafritz]</a></cite></figcaption>
        </figure>

        <h2>What is the WRX STI?</h2>
        <p>The WRX STI is a 310hp sport sedan that has been highly popularized by rally and through rally it has ganined it's fanbase and its name. The STI has been popularized in the US since 2002, what people call the bugeye generation due to how the front end looked. The WRX stands for 'World Rally eXperimental', hence why the WRX is populaized in rally. STI is the brand name of Subaru's sport racing divison - 'Subaru Tecnica International'. </p>

        <p>The WRX itself is a similar but yet different car from the STI. The WRX in older generations have the same engine known as the EJ motor, 4 cylinder boxer engine. However the wrx's usually got a smaller engine (2.0 liter) while the STI got the bigger one (2.5 liter). This has changed over the years, however once the 2015+ models came out this changed entirely. The STI's still carried the EJ257s while the WRX's carried the new 2.0 FA-DIT motor.</p>
    </section>

    <section class="wrx-vs-sti">

        <figure class="fig-curve">
            <img alt="" src="images/wrx_vs_sti.jpg" class="img-curve">
            <figcaption>Subaru's WRX And STI Side By Side <cite><a href="https://static1.hotcarsimages.com/wordpress/wp-content/uploads/2020/09/2019-subaru-wrx-and-wrx-sti-.jpg"  target="_blank">[Photo by hotcarsimages]</a></cite></figcaption>
        </figure>

        <h2>WRX VS STI?</h2>
        <p>The WRX vs STI debate has been the debate for many, and argubally still is today. This debate goes all the way back from when the STI was first introduced. Between the engine, transmission, suspension, brake, and interior components. Both which based off the impreza but built on, but made to their specific needs. And even within generations, there many differences.</p>

        <p>The last generation WRX STI, the 2015-2021 model, commonly known as the VA Generation or others have called Raptor Eye. This model has undergone many performance and body enhancements. These include the following:</p>
        <ul class="">
            <li>Several relibaliity issues in the engines in the 2017+ models</li>
            <li>Facelift (change in the front bumper) in the 2018+ models</li>
            <li>Rear Splat Changes in the 2018+ models</li>
            <li>Type RA block (change in the engine) in the 2019+ STI models</li>
            <li>Interior
                <ul>
                    <li>Radio in the 2015-2017 models for a more modern style</li>
                    <li>Steering wheel in the 2020+ models</li>
                    <li>Radio again in the 2020+ models</li>
                    <li>Side arm rest in the 2020+ models</li>
                </ul>
            </li>
        </ul>

    </section>

    <section class="why-sti">
        <figure class="fig-curve">
            <img alt="" src="images/subaru_meet.JPG" class="img-curve">
            <figcaption>Line Up At A Subaru Meet <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/subaru_meet.JPG"  target="_blank">[Photo By Dwayne Kirby]</a></cite></figcaption>
        </figure>

        <h2>Why the STI?</h2>
        <p>Over all the car choices out there, why did so many choose the WRX/STI? There were a fairly wide range of options inclduing the STI's main rival - the Mitsubishi Lancer Evolution. So why did they? The EJ motors have become a very popular motor based on the sound, the iconic Subaru rumble. The unequal length headers that made this rumble, is what many love about EJ motors. Along with that and it is fairly easily to modify them.</p>

        <p>However as good as the EJ motors were made out to be, they were not so maintainable as others. The EJ motors have really common issues, the most popular were failure of headgaskets which caused oil and coolant to mix which resulted in needing to rebuild the engines, ringland failure - gaps in the piston rings that fried, rod knock/spun rod bearings - usaully means the rod is bent. All of these issues results in having to rebuild the engine, or just get a whole new engine. Which was very costly. Yet despite these issues, the WRX/STI still was highly popularized and many chose it over its competitors.</p>
    </section>

    <section class="models-avail">
        <h2>These are the models are the WRX/STI available in the US including the most recent generation without the STI</h2>
        <table>
            <caption><strong>WRX's/STI's Engine/Transmission</strong></caption>
            <tr>
                <th>Model Year</th>
                <th>Model Name</th>
                <th>WRX Engine</th>
                <th>WRX Trans</th>
                <th>STI Engine</th>
                <th>STI Trans</th>

            </tr>

            <?php
            $sql = 'SELECT fldYears, fldModelName, fldWrxEngine, fldWrxTrans, fldStiEngine, fldStiTrans FROM tblSubaruModels';
            $statement = $pdo->prepare($sql);
            $statement->execute();

            $records = $statement->fetchAll();

            foreach ($records as $record) {
                print '<tr>';
                print '<td>' . $record['fldYears'] . '</td>';
                print '<td>' . $record['fldModelName'] . '</td>';
                print '<td>' . $record['fldWrxEngine'] . '</td>';
                print '<td>' . $record['fldWrxTrans'] . '</td>';
                print '<td>' . $record['fldStiEngine'] . '</td>';
                print '<td>' . $record['fldStiTrans'] . '</td>';
                print '</tr>' . PHP_EOL;
            }
            ?>

            <tr>
                <td>Sources:</td>
                <td colspan="1"><a href="https://www.drifted.com/subaru-gc8/" target="_blank">Drifted</a></td>
                <td colspan="2"><a href="https://www.topspeed.com/cars/subaru/2006-subaru-impreza-wrx-sti-ar895.html#:~:text=The%20Impreza%20WRX%20STI%20is,mph%20in%20under%20five%20seconds." target="_blank">Top Speed</a></td>
                <td colspan="2"><a href="https://www.subaru.com/vehicles/wrx/models.html" target="_blank">Subaru</a></td>
            </tr>

        </table>
    </section>


    <section class="future">

        <figure class="fig-curve">
            <img alt="" src="images/2022_wrx.jpg" class="img-curve">
            <figcaption>The New 2022 Subaru WRX <cite><a href="https://www.carscoops.com/2022/03/this-is-why-there-wont-be-a-new-subaru-wrx-sti/#lg=1&slide=0"  target="_blank">[Photo By Carscoops]</a></cite> </figcaption>
        </figure>

        <h2>The Future of the WRX/STI</h2>
        <p>Now with the release of the newest generation, the 2022 WRX without the STI, the future is quite unclear. When Subaru announced the newest WRX, there was backlash from the fanbase about the look/style and the amount of power. However Subaru fan's yet to know that this was not the last of the bad news...</p>


        <h2>E-STI</h2>
        <p>Subaru recently announced that it would not go forward with it's plans to develop the new STI with the 2.4 liter FA-DIT engine (The same engine in the new WRX). This announcement came as a suprise to many but not all, espeically with all other car compnaies pushing to the move to EV. However this decision led many of the fanbase to declare the STI as killed, even those who are not fan's of the STI made comments about this decision being the downfall of Subaru, espeically with the new announcement from Toyota about it's new GR Corolla Hatchback. So with the looming future of an electric STI and the disapointment of it's fanbase, the fate of Subaru hangs in the air. Only time will tell what will happen.</p>

        Sources:
        <ul>
            <li><a href="https://vtcar.com/" target="_blank">VSC</a></li>
            <li><a href="https://media.subaru.com/pressrelease/1881/117/statement-subaru-sti" target="_blank">Subaru Media</a></li>
            <li><a href="https://subarudrive.com/articles/dp15-1-subaru-rally-team-history-highlights" target="_blank">Subaru Drive</a></li>
            <li><a href="https://www.topspeed.com/" target="_blank">Top Speed</a></li>
        </ul>
    </section>
</main>
<?php
include 'footer.php';
?>
