<?php

echo "Before xdebug break\n";

// You never (normally) need to use this function when debugging,
// it's just an easy way to make sure that xdebug is working correctly.
xdebug_break();

echo "After xdebug break\n";

if ($argc > 2) {
    printf(
        "Hello there %s, you %s person!\n",
        $argv[1],
        $argv[2]
    );
}
else if ($argc > 1) {
    printf("Hello there %s\n", $argv[1]);
}
else {
    echo "Hello there, whoever you are.";
}

