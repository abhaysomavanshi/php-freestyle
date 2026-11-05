<h1>MY NEW PHP WEBSITE</h1>

<h2>JENKINS AUTO DEPLOYMENT</h2>

<p>
<?php
echo "Version: " . htmlspecialchars(
    getenv('APP_VERSION') ?: '3.0.0'
);
?>
</p>
