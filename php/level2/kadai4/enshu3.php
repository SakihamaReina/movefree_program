<?php
$language = 'PHP';

switch ($language) {

    case 'Python':
    case 'PHP':
    case 'Ruby':
        print 'インタプリター言語';
        break;

    case 'C#':
    case 'Java':
        print 'コンパイル言語';
        break;

    default:
        print '不明';
}