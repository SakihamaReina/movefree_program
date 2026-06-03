<?php
$exp = '3E2';

switch ($exp) {

    case 300:
        $a = 'switch:300';
        break;

    case '3E2':
        $a = 'switch:3E2';
        break;
}

match ($exp) {
    300 => $b = 'match:300',
    '3E2' => $b = 'match:3E2',
    default => $b = '',
};

print $a . '|' . $b;