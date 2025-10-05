<?php
include $_SERVER['DOCUMENT_ROOT'] . '/res/php/functions.php'; # Load helper functions 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php loadSnippet('head'); ?>
    <link rel="stylesheet" href="/res/style/pages.css">
    <link rel="stylesheet" href="/pages/heartbeat/page.css">
</head>

<body>
    <div class="container heartbeat_container">
        <div class="heartbeat_display">
            <div class="pulse_dot dot_green">
                <div class="heartbeat_ring">
                    <div class="ringring"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="title">
                My Telegram alert
            </div>
            <div class="last_heartbeat">
                3 sec ago
            </div>
        </div>
        <div class="heartbeat_display">
            <div class="pulse_dot dot_yellow">
                <div class="heartbeat_ring">
                    <div class="ringring"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="title">
                My E-Mail alert
            </div>
            <div class="last_heartbeat">
                35 min ago
            </div>
        </div>
        <div class="heartbeat_display">
            <div class="pulse_dot dot_red">
                <div class="heartbeat_ring">
                    <div class="ringring"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="title">
                My E-Mail alert
            </div>
            <div class="last_heartbeat">
                35 min ago
            </div>
        </div>
        <div class="heartbeat_display">
            <div class="pulse_dot dot_blue">
                <div class="heartbeat_ring">
                    <div class="ringring"></div>
                    <div class="circle"></div>
                </div>
            </div>
            <div class="title">
                Discord alert
            </div>
            <div class="last_heartbeat">
                35 min ago
            </div>
        </div>
    </div>
    <div class="container"></div>
</body>

</html>