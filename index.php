<?php
include $_SERVER['DOCUMENT_ROOT'] . '/res/php/functions.php'; # Load helper functions 
?>

<!DOCTYPE html>
<html lang="de" class="global-container">

<head>
    <?php loadSnippet('head'); ?>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="/res/images/logo/logo.svg" class="logo" alt="">
            <h1>OSLeM</h1>
        </div>
        <div class="header-right">
            <img src="https://placehold.co/100/FFF/000" class="avatar" alt="User profile picture">
        </div>
    </header>
    <nav>
        <div class="nav-top">
            <a href="/pages/dashboard" target="main-frame" class="nav-link" data-active="active" data-tooltip="Dashboard" data-tooltip-location="right">
                <?php loadIcon('home'); ?>
            </a>
            <a href="/pages/heartbeat" target="main-frame" class="nav-link" data-tooltip="Heartbeat check" data-tooltip-location="right">
                <?php loadIcon('bell-alert'); ?>
            </a>
            <a href="/pages/access-control" target="main-frame" class="nav-link" data-tooltip="Access Control" data-tooltip-location="right">
                <?php loadIcon('user-group'); ?>
            </a>
            <a href="/pages/helpdoc-tool" target="main-frame" class="nav-link" data-tooltip="Emergency Document" data-tooltip-location="right">
                <?php loadIcon('clipboard-document-list'); ?>
            </a>
            <a href="/pages/file-manager" target="main-frame" class="nav-link" data-tooltip="File Manager" data-tooltip-location="right">
                <?php loadIcon('archive-box'); ?>
            </a>
        </div>
        <div class="nav-bottom">
            <a href="/pages/settings" target="main-frame" class="nav-link" data-tooltip="Settings" data-tooltip-location="right">
                <?php loadIcon('cog-8-tooth'); ?>
            </a>
            <a href="/pages/oslem-feedback" target="main-frame" class="nav-link" data-tooltip="Provide Feedback" data-tooltip-location="right">
                <?php loadIcon('chat-bubble-oval-left'); ?>
            </a>
        </div>
    </nav>
    <main>
        <iframe src="/pages/dashboard" name="main-frame" frameborder="0"></iframe>
    </main>
    <style>
        .global-container>body {
            display: grid;
            grid-template-columns: 50px 1fr;
            grid-template-rows: 50px 1fr;
            gap: 0px 0px;
            grid-auto-flow: row;
            grid-template-areas:
                "header header"
                "nav main";
        }

        header {
            grid-area: header;
            background-color: var(--background-secondary);
        }

        nav {
            grid-area: nav;
            border-right: 1px solid var(--background-secondary);
        }

        main {
            grid-area: main;
        }
    </style>
    <?php loadJavascript('nav'); ?>
</body>

</html>