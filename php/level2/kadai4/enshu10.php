<?php

$data = [
  'Apple'  => 'Red',
  'Orange' => 'Yellow',
  'Melon'  => 'Green',
];
?>

<ul>
<?php foreach ($data as $fruit => $color): ?>
    <li><?php print $fruit; ?>: <?php print $color; ?></li>
<?php endforeach; ?>
</ul>