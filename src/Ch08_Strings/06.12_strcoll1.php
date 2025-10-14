<?php

$turkishFriends = ["\u{15e}imal", "\u{c7}a\u{11f}ari", "Alek", "Maya",];

usort($turkishFriends, 'strcmp');
print_r($turkishFriends);

setlocale(LC_COLLATE, 'tr_TR.UTF-8');
usort($turkishFriends, 'strcoll');
print_r($turkishFriends);
