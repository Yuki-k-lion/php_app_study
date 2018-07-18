<?php

echo "Hello Wold", PHP_EOL;
//PHP_EOLは改行

echo "Helo" . "Grad", PHP_EOL;
//. is combine two string

echo mb_strlen("Hello World"), PHP_EOL;
//文字の数

echo "i am " . 20 . " years old.", PHP_EOL;
// 自動キャスト
// 自動キャストとは場合に応じて自動で型を変換してくれるPHPの性質。
//エラーになる可能性もある。

echo "i am " . strval(20) . " years old.";
//明示的な型変換

$hello = "Hello World";
//原則小文字

const VALUE = "Hello World";
//定数。名前の最初を大文字に。
?>
