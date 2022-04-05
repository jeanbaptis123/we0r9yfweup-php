<?php
header("Content-type: application/javascript");
echo str_replace("this.host+", "\"https://consent.cookiebot.com/\"+", file_get_contents("https://consent.cookiebot.com/uc.js"));