<?php
include $_SERVER['DOCUMENT_ROOT'] . '/res/php/functions.php'; # Load helper functions 
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <?php loadSnippet('head'); ?>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="/res/images/logo.light.svg" class="light-hidden logo" alt="">
            <img src="/res/images/logo.svg" class="dark-hidden logo" alt="">
            <h1>OSLeM</h1>
        </div>
        <div class="header-right">
            <img src="https://placehold.co/100/FFF/000" class="avatar" alt="User profile picture">
        </div>
    </header>
    <nav>
        <div class="nav-top">
            <a href="/pages/alert" target="main-frame" class="nav-link" data-active="active">
                <?php loadIcon('bell-alert'); ?>
            </a>
            <a href="/pages/access-control" target="main-frame" class="nav-link">
                <?php loadIcon('user-group'); ?>
            </a>
            <a href="/pages/helpdoc-tool" target="main-frame" class="nav-link">
                <?php loadIcon('clipboard-document-list'); ?>
            </a>
            <a href="/pages/file-manager" target="main-frame" class="nav-link">
                <?php loadIcon('archive-box'); ?>
            </a>
        </div>
        <div class="nav-bottom">
            <a href="/pages/settings" target="main-frame" class="nav-link">
                <?php loadIcon('cog-8-tooth'); ?>
            </a>
            <a href="/pages/oslem-feedback" target="main-frame" class="nav-link">
                <?php loadIcon('chat-bubble-oval-left'); ?>
            </a>
        </div>
    </nav>
    <main></main>
</body>

</html>