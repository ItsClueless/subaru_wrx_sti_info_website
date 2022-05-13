<?php
include 'top.php';
?>
<main>
    <p>Create Table SQL</p>

    <h2>Info Page Table</h2>

    <h3>Creates Info Page Table</h3>
    <pre>
        CREATE TABLE tblSubaruModels(
        pmkSubaruModelsId INT AUTO_INCREMENT PRIMARY KEY,
        fldYears varchar(20),
        fldModelName varchar(20),
        fldWrxEngine  varchar(10),
        fldWrxTrans  varchar(10),
        fldStiEngine  varchar(10),
        fldStiTrans  varchar(30)
        )
    </pre>

    <h3>Inserts Values Into Info Page Table</h3>
    <pre>
        INSERT INTO tblSubaruModels (fldYears,
        fldModelName, fldWrxEngine, fldWrxTrans, 
        fldStiEngine, fldStiTrans) VALUES
        ('1992-1999', 'Mean Eye (GC8)', 'EJ 207', '5-speed', 'EJ 207', '5-Speed'),
        ('2000-2003', 'Bug Eye (GD/GG)', 'EJ 205', '5-Speed', 'EJ 205', '5-Speed'),
        ('2004-2006', 'Blob Eye (GD/GG)', 'EJ 205', '5-Speed', 'EJ 255', '5-Speed'),
        ('2006-2007', 'Hawk Eye (GD/GG)', 'EJ 255', '6-Speed', 'EJ 257', '6-Speed With SI-Drive'),
        ('2008-2014', 'Stink Eye (GR)', 'EJ 255', '5-Speed', 'EJ 257', '6-Speed With SI-Drive'),
        ('2015-2021', 'Raptor Eye (VA)', 'FA 20-DIT', '6-Speed', 'EJ 257', '6-Speed With SI-Drive'),
        ('2022-present', 'VB', 'FA 24-DIT', '6-Speed', 'N/A', 'N/A')
    </pre>


    <h3>Gets Values From Info Page Table</h3>
    <pre>
        SELECT fldYear, fldModelName, fldWrxEngine, 
        fldWrxTrans, fldStiEngine, fldStiTrans 
        FROM tblSubaruModels
    </pre>


    <h2>Form Table</h2>

    <h3>Creates Form Page Table</h3>
    <pre>
        CREATE TABLE tblSubaruOpinions(
        pmkSubaruOpinionsThoughtsId INT AUTO_INCREMENT PRIMARY KEY,
        fldName varchar(30),
        fldEmail varchar(50),
        fldDriveSubaru varchar(10),
        fldBestSubaru varchar(30),
        fldEngineEJ205 tinyint(1),
        fldEngineEJ207 tinyint(1),
        fldEngineEJ255 tinyint(1),
        fldEngineEJ257 tinyint(1),
        fldengineFA20 tinyint(1),
        fldengineFA24 tinyint(1),
        fldSubaruProblems varchar(50),
        fldSubaruOwning varchar(50),
        fldSubaruThoughts text
        )
    </pre>


    <h3>Inserts Values Into Form Page Table</h3>
    <pre>
        INSERT INTO tblSubaruOpinions
        (fldName, fldEmail, fldDriveSubaru,fldBestSubaru, 
        fldEngineEJ205, fldEngineEJ207, fldEngineEJ255, 
        fldEngineEJ257, fldengineFA20, fldengineFA24, 
        fldSubaruProblems, fldSubaruOwning, fldSubaruThoughts)
        VALUES
    </pre>

    <h3>Gets Values From Form Page Table</h3>
    <pre>
        SELECT fldName, fldEmail, fldDriveSubaru,fldBestSubaru, 
        fldEngineEJ205, fldEngineEJ207, fldEngineEJ255, 
        fldEngineEJ257, fldengineFA20, fldengineFA24, 
        fldSubaruProblems, fldSubaruOwning, fldSubaruThoughts
        FROM tblSubaruOpinions  
    </pre>

</main>
<?php
include 'footer.php';
?>