<?php

// - * là độ dài {0,n}
// - + là độ dài từ {1,n}
// - ? là độ dài từ {0,1}
// - . là tất cả các ký tự
// - \d là tất các số [0-9]
// - \D là phủ định của /d
// - \w là tất cả các ký tự [a-z] hoặc [A-Z] hoặc [0-9] hoặc dấu gạch dưới
// - \W là phủ định của /w
// - \s là dấu cách (space)
// - \S là phủ định của /s

//check số điện thoại
// - Có số 0 ở đầu
// - Có 10 số

$subject="0334553865";
$pattern='/^0\d{9}$/';
$check = preg_match($pattern,$subject);
echo $check;
