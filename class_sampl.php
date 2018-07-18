クラス名のルール
クラス名は半角英大文字から始まる名前にします。
例: User Account Image Group など

<?php
class Review {
  public static function get_review_count(){
    return 0;
  }
  public function show_review() {
  echo "ジャンル : " . "映画\n";
  echo "---------------------------\n";
  echo "タイトル : " . "るろうに剣心\n";
  echo "---------------------------\n";
  echo "感想 :\n";
  echo "アクションがすごい！\n";
  echo "---------------------------\n";
}
}
// 静的メソッド
// 静的メソッドはインスタンス化されていなくても外部から直接呼び出すことができます。
// つまり、クラスに対して使用できるメソッドです。
// 具体的には「静的メソッドを定義したクラス自身」に対して使えるメソッドです。
// static(スタティック)メソッドと呼ぶこともあります。
$review = new Review(); // Reviewクラスのインスタンスを生成
var_dump($review);
$review->show_review();

echo Review::get_review_count(), PHP_EOL;

 ?>
