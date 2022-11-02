<?php
// Use in the “Post-Receive URLs” section of your GitHub repo.

shell_exec('cd //classworks/.git && git pull');

echo "payload = " . $_POST["payload"] . ".";
echo "get payload = " . $_GET["payload"] . ".";