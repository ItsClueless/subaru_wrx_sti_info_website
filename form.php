<?php
include 'top.php';

$dataIsGood = false;


$name = '';
$email = '';
$driveSubaru = '';
$bestSubaru = "GC8";
$engineEJ205 = false;
$engineEJ207 = false;
$engineEJ255 = false;
$engineEJ257 = false;
$engineFA20 = false;
$engineFA24 = false;
$subaruProblems = getData('txtValProblems');
$subaruOwning = getData('txtValOwning');
$subaruThoughts = getData('txtThougts');


function getData($field)
{
    if (!isset($_POST[$field])) {
        $data = "";
    } else {
        $data = trim($_POST[$field]);
        $data = htmlspecialchars($data);
    }
    return $data;
}

function verifyAlphaNum($testString)
{
    // Check for letters, numbers and dash, period, space and single quote only.
    // added & ; and # as a single quote sanitized with html entities will have 
    // this in it bob's will be come bob's
    return (preg_match("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
}

?>
<main class="form-page">

    <h1 class="form-direct">Your Thoughts On The Subaru WRX/STI</h1>

    <section class="form-info">
        <h2>Please Fill Out</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {

            $name = getData('txtName');
            $email = getData('txtEmailAddress');
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $driveSubaru = getData('radDriveSubaru');
            $bestSubaru = getData('lstBestSubaru');
            $engineEJ205 = (int) getData('chkEngineEJ205');
            $engineEJ207 = (int) getData('chkEngineEJ207');
            $engineEJ255 = (int) getData('chkEngineEJ255');
            $engineEJ257 = (int) getData('chkEngineEJ257');
            $engineFA20 = (int) getData('chkEngineFA20-DIT');
            $engineFA24 = (int) getData('chkEngineFA24-DIT');
            $subaruProblems = getData('txtValProblems');
            $subaruOwning = getData('txtValOwning');
            $subaruThoughts = getData('txtThougts');

            $dataIsGood = true;
            if ($name == '') {
                print '<p class="mistake">Please enter your name</p>';
                $dataIsGood = false;
            } elseif (!verifyAlphaNum($name)) {
                print '<p class="mistake">Please enter your name, no invalid characters</p>';
                $dataIsGood = false;
            }

            if ($email == '') {
                print '<p class="mistake">Please enter your email</p>';
                $dataIsGood = false;
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                print '<p class="mistake">Please enter your email, no invalid characters</p>';
                $dataIsGood = false;
            }

            if ($driveSubaru  != "Yes" and $driveSubaru  != "Did" and $driveSubaru != "Will" and $driveSubaru != "No") {
                print '<p class="mistake">Please select a valid option</p>';
                $dataIsGood = false;
            }


            if ($bestSubaru == '') {
                print '<p class="mistake">Please select which generation WRX/STI is better</p>';
                $dataIsGood = false;
            } else if ($bestSubaru != "GC8" and $bestSubaru != "Bug EYE" and  $bestSubaru != "Blob Eye" and $bestSubaru != "Hawk Eye" and $bestSubaru != "Narrow Body" and  $bestSubaru != "Wide Body" and  $bestSubaru != "VA" and  $bestSubaru != "VB") {
                print '<p class="mistake">Please select which generation WRX/STI is better</p>';
                $dataIsGood = false;
            }


            if ($engineEJ205 != 1) $engineEJ205 = 0;

            if ($engineEJ205 != 1) $engineEJ207 = 0;

            if ($engineEJ255 != 1) $engineEJ255 = 0;

            if ($engineEJ257 != 1) $engineEJ257 = 0;

            if ($engineFA20 != 1) $engineFA20 = 0;

            if ($engineFA24 != 1) $engineFA24 = 0;


            if ($subaruProblems == '') {
                print '<p class="mistake">Please enter what you think problems with WRX/STI are</p>';
                $dataIsGood = false;
            } elseif (!verifyAlphaNum($subaruProblems)) {
                print '<p class="mistake">Please enter what you think problems with WRX/STI are, no invalid characters</p>';
                $dataIsGood = false;
            }


            if ($subaruOwning == '') {
                print '<p class="mistake">Please enter why it is difficult owning a WRX/STI</p>';
                $dataIsGood = false;
            } elseif (!verifyAlphaNum($subaruOwning)) {
                print '<p class="mistake">Please enter why it is difficult owning a WRX/STI, no invalid characters</p>';
                $dataIsGood = false;
            }

            if ($subaruThoughts == '') {
                print '<p class="mistake">Please enter your thoughts about the 2022 WRX</p>';
                $dataIsGood = false;
            } elseif (!verifyAlphaNum($subaruThoughts)) {
                print '<p class="mistake">Please enter your thoughts the 2022 WRX, no invalid characters</p>';
                $dataIsGood = false;
            }

            if ($dataIsGood) {
                try {
                    $sql = 'INSERT INTO tblSubaruOpinions
                (fldName, fldEmail, fldDriveSubaru,fldBestSubaru, 
                fldEngineEJ205, fldEngineEJ207, fldEngineEJ255, 
                fldEngineEJ257, fldengineFA20, fldengineFA24, 
                fldSubaruProblems, fldSubaruOwning, fldSubaruThoughts)
                VALUES
                (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                    $statement = $pdo->prepare($sql);
                    $data = array($name, $email, $driveSubaru, $bestSubaru, $engineEJ205, $engineEJ207, $engineEJ255, $engineEJ257, $engineFA20, $engineFA24, $subaruProblems, $subaruOwning, $subaruThoughts);

                    if ($statement->execute($data)) {
                        print '<h2>Thank you</h2>';
                        print '<p>Your opinion has been added to our database. Thank you for your response.</p>';

                        $to = $email;
                        $from = 'Dwayne Kirby <dakirby@uvm.edu>';
                        $subject = 'Subaru Survey Reponse';

                        $mailMessage = '<p style="font: 14pt serif;"> Thank you for filling out ';
                        $mailMessage .= 'this Subaru survey. Here is what you said: </p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;"> Do You Drive A Subaru WRX/STI?: ';
                        $mailMessage .=  $driveSubaru . '</p> ' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;"> What Do You Think The Best Generation WRX/STI Is?: ';

                        $mailMessage .= $bestSubaru . '</p>'  . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;"> Which WRX/STI Engines Do You Like?: </p>' . PHP_EOL;;

                        if ($engineEJ205 == 1) {
                            $mailMessage .=  '<p style="font: 14pt serif;"> EJ205 </p>'  . PHP_EOL;
                        }

                        if ($engineEJ207 == 1) {
                            $mailMessage .=  '<p style="font: 14pt serif;"> EJ207 </p>'  . PHP_EOL;
                        }

                        if ($engineEJ255 == 1) {
                            $mailMessage .=  '<p style="font: 14pt serif;"> EJ255 </p>'  . PHP_EOL;
                        }
                        if ($engineEJ257 == 1) {
                            $mailMessage .= '<p style="font: 14pt serif;"> EJ257 </p>'  . PHP_EOL;
                        }
                        if ($engineFA20 == 1) {
                            $mailMessage .= '<p style="font: 14pt serif;"> FA20-DIT </p>'  . PHP_EOL;
                        }
                        if ($engineFA24 == 1) {
                            $mailMessage .= '<p style="font: 14pt serif;"> FA24-DIT </p>' . PHP_EOL;
                        }

                        $mailMessage .= '<p style="font: 14pt serif;"> What Are Some Problems With The WRX/STI?: ';

                        $mailMessage .= $subaruProblems . '</p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;"> Why is Owning A WRX/STI Difficult?: ';

                        $mailMessage .= $subaruOwning . '</p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;"> What Is Your Thought About The 2022 WRX?: ';

                        $mailMessage .= $subaruThoughts . '</p>' . PHP_EOL;


                        $mailMessage .= '<p style="font: 14pt serif;">Your Response is Greatly Appericated.</p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;">Send this to your fellow Subaru enthusiants: <a href="https://dakirby.w3.uvm.edu/cs008/final/form.php" target="_blank">Subaru Survey</a></p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;">Keep up with Subaru news at: <a href="https://www.subaru.com/index.html" target="_blank">Subaru.com</a></p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;">Check Out Launch Control if you have not already: <a href="https://www.youtube.com/watch?v=FHSt93MNouc&list=PL1MTbRON4T882S-XEFu3StytlAFShrF2M&index=112" target="_blank">Launch Control: For All The Marbles - Episode 9.11</a></p>' . PHP_EOL;

                        $mailMessage .= '<p style="font: 14pt serif;">Check out Vermont SportsCar: <a href="https://vtcar.com/" target="_blank">VSC</a></p>' . PHP_EOL;


                        $mailMessage .= '<p>Thanks<br><span style="color: blue; padding-left: 5em;">';

                        $mailMessage .= 'Dwayne Kirby</span></p>';

                        $headers = "MIME-Verison: 1.0\r\n";

                        $headers .= "Content-type: text/html; charset=utf-8\r\n";

                        $headers .= "From " . $from . "\r\n";

                        $mailSent = mail($to, $subject, $mailMessage, $headers);

                        if ($mailSent) {
                            print "<p>Your Repsonse has been emailed to you for your records.</p>";
                            print $mailMessage;
                        }
                    } else {
                        print '<p>An error has occured and your response was not added to the database</p>';
                    }
                } catch (PDOException $e) {
                    print '<p>An error as occured. Please try again</p>';
                }
            }
        }
        ?>
    </section>
    <section class="form-begin-image">
        <figure class="fig-curve">
            <img alt="" src="images/my_wrx_front.JPG" class="img-curve">
            <figcaption>2018 Subaru WRX Front View In The Fall <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_wrx_front.JPG" target="_blank">[Photo by Justin Shafritz]</a></cite></figcaption>
        </figure>

        <figure class="fig-curve">
            <img alt="" src="images/my_wrx_side.JPG" class="img-curve">
            <figcaption>2018 Subaru WRX Side View In The Fall <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_wrx_side.JPG" target="_blank">[Photo by Justin Shafritz]</a></cite></figcaption>
        </figure>

        <figure class="fig-curve">
            <img alt="" src="images/my_wrx_back.JPG" class="img-curve">
            <figcaption>2018 Subaru WRX Back View In The Fall <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_wrx_back.JPG" target="_blank">[Photo by Justin Shafritz]</a></cite></figcaption>
        </figure>

        <h2>A Brief survey To Get Your Opinion On Subaru And The WRX/STI</h2>

    </section>


    <section class="form-questions">
        <h2>Fill Out Here</h2>
        <form action="#" method="post">
            <fieldset class="Infomation">
                <legend>Info</legend>
                <p>
                    <label class="required" for="txtName">Your Name</label>
                    <input id="txtName" maxlength="50" name="txtName" tabindex="100" type="text" value="<?php print $name; ?>" required>
                </p>

                <p>
                    <label class="required" for="txtEmailAddress">Your Email Address</label>
                    <input id="txtEmailAddress" maxlength="100" name="txtEmailAddress" tabindex="100" type="email" value="<?php print $email; ?>" required>
                </p>

            </fieldset>

            <fieldset class="radio">
                <legend>Do You Drive A Subaru WRX/STI?</legend>
                <p>
                    <input type="radio" id="radDoDrive" name="radDriveSubaru" value="Yes" tabindex="210" required <?php if ($driveSubaru == "Yes") print 'checked'; ?>>
                    <label class="radio-field" for="radDoDrive">Yes I do</label>
                </p>

                <p>
                    <input type="radio" id="radDidDrvie" name="radDriveSubaru" value="Did" tabindex="230" required <?php if ($driveSubaru == "Did") print 'checked'; ?>>
                    <label class="radio-field" for="radDidDrvie">I used to</label>
                </p>

                <p>
                    <input type="radio" id="radWantDrive" name="radDriveSubaru" value="Will" tabindex="240" required <?php if ($driveSubaru == "Will") print 'checked'; ?>>
                    <label class="radio-field" for="radWantDrive">I plan to</label>
                </p>

                <p>
                    <input type="radio" id="radNoDrive" name="radDriveSubaru" value="No" tabindex="240" required <?php if ($driveSubaru == "No") print 'checked'; ?>>
                    <label class="radio-field" for="radNoDrive">No</label>
                </p>

            </fieldset>

            <fieldset class="listbox">

                <legend>What Do You Think The Best Generation WRX/STI Is?</legend>
                <p>
                    <select id="lstBestSubaru" name="lstBestSubaru" tabindex="420">
                        <option value="GC8" <?php if ($bestSubaru == "GC8") print 'selected'; ?>>GC8</option>
                        <option value="Bug Eye" <?php if ($bestSubaru == "Bug Eye") print 'selected'; ?>>Bug Eye</option>
                        <option value="Blob Eye" <?php if ($bestSubaru == "Blob Eye") print 'selected'; ?>>Blob Eye</option>
                        <option value="Hawk Eye" <?php if ($bestSubaru == "Hawk Eye") print 'selected'; ?>>Hawk Eye</option>
                        <option value="Narrow Body" <?php if ($bestSubaru == "Narrow Body") print 'selected'; ?>>Narrow Body</option>
                        <option value="Wide Body" <?php if ($bestSubaru == "Wide Body") print 'selected'; ?>>Wide Body</option>
                        <option value="VA" <?php if ($bestSubaru == "VA") print 'selected'; ?>>VA</option>
                        <option value="VB" <?php if ($bestSubaru == "VB") print 'selected'; ?>>VB</option>

                    </select>
                </p>
            </fieldset>

            <fieldset class="checkbox">
                <legend>Which WRX/STI Engines Do You Like?</legend>

                <p>
                    <input id="chkEngineEJ205" name="chkEngineEJ205" tabindex="310" type="checkbox" value="1" <?php if ($engineEJ205) print 'checked'; ?>>
                    <label for="chkEngineEJ205">EJ 205</label>
                </p>

                <p>
                    <input id="chkEngineEJ207" name="chkEngineEJ207" tabindex="310" type="checkbox" value="1" <?php if ($engineEJ207) print 'checked'; ?>>
                    <label for="chkEngineEJ207">EJ 207</label>
                </p>

                <p>
                    <input id="chkEngineEJ255" name="chkEngineEJ255" tabindex="320" type="checkbox" value="1" <?php if ($engineEJ255) print 'checked'; ?>>
                    <label for="chkEngineEJ255">EJ 255</label>
                </p>

                <p>
                    <input id="chkEngineEJ257" name="chkEngineEJ257" tabindex="330" type="checkbox" value="1" <?php if ($engineEJ257) print 'checked'; ?>>
                    <label for="chkEngineEJ257">EJ 257</label>
                </p>

                <p>
                    <input id="chkEngineFA20-DIT" name="chkEngineFA20-DIT" tabindex="340" type="checkbox" value="1" <?php if ($engineFA20) print 'checked'; ?>>
                    <label for="chkEngineFA20-DIT">FA 20 DIT</label>
                </p>

                <p>
                    <input id="chkEngineFA24-DIT" name="chkEngineFA24-DIT" tabindex="340" type="checkbox" value="1" <?php if ($engineFA24) print 'checked'; ?>>
                    <label for="chkEngineFA24-DIT">FA 24 DIT</label>
                </p>
            </fieldset>


            <fieldset class="Thoughts">
                <legend>Is Owning A WRX/STI Easy?</legend>
                <p>
                    <label class="required" for="txtValProblems">What Are Some Problems With The WRX/STI?</label>
                    <input id="txtValProblems" maxlength="50" name="txtValProblems" tabindex="100" type="text" value="<?php print $subaruProblems; ?>" required>
                </p>

                <p>
                    <label class="required" for="txtValOwning">Why Is Owning A WRX/STI Difficult?</label>
                    <input id="txtValOwning" maxlength="50" name="txtValOwning" tabindex="100" type="text" value="<?php print $subaruOwning; ?>" required>
                </p>

            </fieldset>

            <fieldset class="textarea">
                <p>
                    <label for="txtThougts">What Is Your Thought About The 2022 WRX?</label>
                    <textarea id="txtThougts" name="txtThougts" tabindex="200" required><?php print $subaruThoughts; ?></textarea>
                </p>
            </fieldset>


            <fieldset class="buttons">
                <input id="btnSubmit" name="btnSubmit" type="submit" value="Submit Form">
            </fieldset>

        </form>

    </section>

    <section class="form-feedback">
        <h2>Your Reponse Will Be Emailed Back To You</h2>
    </section>

    <section class="form-end-image">
        <h2>Your Response Is Highly Appericated</h2>
        <figure class="fig-curve">
            <img alt="" src="images/my_old_wrx_front.JPG" class="img-curve">
            <figcaption>2009 Subaru WRX Front View <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_old_wrx_front.JPG" target="_blank">[Photo By Dwayne Kirby]</a></cite></figcaption>
        </figure>

        <figure class="fig-curve">
            <img alt="" src="images/my_old_wrx_side.JPG" class="img-curve">
            <figcaption>2009 Subaru WRX In The Fall <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_old_wrx_side.JPG" target="_blank">[Photo By Dwayne Kirby]</a></cite></figcaption>
        </figure>

        <figure class="fig-curve">
            <img alt="" src="images/my_old_wrx_sideback.JPG" class="img-curve">
            <figcaption>2009 Subaru WRX Side View <cite><a href="https://dakirby.w3.uvm.edu/cs008/final/images/my_old_wrx_sideback.JPG" target="_blank">[Photo By Dwayne Kirby]</a></cite> </figcaption>
        </figure>
    </section>

</main>
<?php
include 'footer.php';
?>