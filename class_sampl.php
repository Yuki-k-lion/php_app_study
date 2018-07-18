<!-- クラス名のルール
クラス名は半角英大文字から始まる名前にします。
例: User Account Image Group など -->

<?php
class Review {
  public static function get_review_count(){
    return 0;
  }

}
// 静的メソッド
// 静的メソッドはインスタンス化されていなくても外部から直接呼び出すことができます。
// つまり、クラスに対して使用できるメソッドです。
// 具体的には「静的メソッドを定義したクラス自身」に対して使えるメソッドです。
// static(スタティック)メソッドと呼ぶこともあります。
$review = new Review(); // Reviewクラスのインスタンスを生成
var_dump($review);

echo Review::get_review_count(), PHP_EOL;

 ?>
