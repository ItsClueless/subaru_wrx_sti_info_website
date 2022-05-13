<nav>
    <a class="<?php
                if ($pathParts['filename'] == 'index') {
                    print 'activePage';
                }
                ?>" href="index.php">Home</a>

    <a class="<?php
                if ($pathParts['filename'] == 'detail') {
                    print 'activePage';
                }
                ?>" href="detail.php">History</a>

    <a class="<?php
                if ($pathParts['filename'] == 'detail-rally') {
                    print 'activePage';
                }
                ?>" href="detail-rally.php">Rally And Rivalry</a>

    <a class="<?php
                if ($pathParts['filename'] == 'form') {
                    print 'activePage';
                }
                ?>" href="form.php">Your View On The WRX/STI?</a>
</nav>