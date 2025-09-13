<?php
include $_SERVER['DOCUMENT_ROOT'] . '/res/php/functions.php'; # Load helper functions 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php loadSnippet('head'); ?>
    <link rel="stylesheet" href="/res/style/pages.css">
    <link rel="stylesheet" href="/pages/oslem-feedback/page.css">
</head>

<body>
    <div class="container feedbackform">
        <h1>Here you can send feedback directly to the OSLeM developer:</h1>
        <form action="https://feedback.oslem.de/send.php" method="post">
            <div class="name">
                <div class="input-container">
                    <input type="text" autocomplete="given-name" spellcheck="false" tabindex="0" aria-label="Name" name="name" value="" autocapitalize="none" placeholder=" " />
                    <div class="input-tooltip" aria-hidden="true">Your Name (optional)</div>
                </div>
            </div>
            <div class="email">
                <div class="input-container">
                    <input type="email" autocomplete="email" spellcheck="false" tabindex="0" aria-label="E-Mail" name="email" value="" autocapitalize="none" placeholder=" " />
                    <div class="input-tooltip" aria-hidden="true">Your E-Mail (optional)</div>
                </div>
            </div>
            <div class="title">
                <div class="input-container">
                    <input type="title" autocomplete="off" spellcheck="true" tabindex="0" aria-label="E-Mail" name="title" value="" autocapitalize="none" placeholder=" " required />
                    <div class="input-tooltip" aria-hidden="true">Message Title</div>
                </div>
            </div>
            <div class="message">
                <div class="input-container">
                    <textarea type="message" autocomplete="off" spellcheck="true" tabindex="0" aria-label="Message" name="message" value="" autocapitalize="none" placeholder=" " required></textarea>
                    <div class="input-tooltip" aria-hidden="true">Your Message</div>
                </div>
            </div>
            <input hidden type="text" name="backlink" value="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
            <button type="submit" class="link-button" tabindex="0">Send Feedback to OSLeM.de</button>
        </form>
    </div>
</body>

</html>