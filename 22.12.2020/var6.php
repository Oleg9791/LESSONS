<?php
// $i = 1;
// while ($i <= 10) {
//     echo $i++;
// }
// echo "<br\n>";
// $i = 1;
// while ($i <= 10) :
//     echo $i;
//     $i++;
// endwhile;// альтернативный синтаксис

// $i = 0;
// do {
//     echo $i;
// } while ($i > 0); // альтернативный синтаксис один раз выполнится
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo "<br\n>";

for ($i = 1; $i <= 10; $i++) :
    echo $i;
endfor;
