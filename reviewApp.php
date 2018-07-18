
<?php
//変数定義
 $Line = "---------------------------\n";
 $input_message = "plese input ";
 // $type = "佐藤";
 // $title = "佐藤";
 // $comment = "佐藤";
 $posts = array();
 //添字配列
 $count = 0;

//input
function post_review($a_posts){
  $post = array();
  //連想配列＝ハッシュ。
 echo $input_message . "type\n";
 $post['type'] = trim(fgets(STDIN));
 echo $input_message . "title\n";
 $post['title'] = trim(fgets(STDIN));
 echo $input_message . "comment\n";
 $post['commnet'] = trim(fgets(STDIN));
 $a_posts[] = $post;
 return $a_posts;
}

//output
function read_review(){
  var_dump($post);
   echo "type: {$post['type']}\n" . $Line;
   echo "title: {$post['title']}\n" . $Line;
   echo "comment: {$post['commnet']}\n" . $Line;
 }

 //end_of_app
 function end_program(){
   exit;
 }

 //error_message
 function error_message(){
       echo "Error";
 }

//実行部
while (true){

echo "レビュー数：$count\n";
echo "[0]レビューを書く\n[1]レビューを読む\n[2]アプリを終了する\n";

  $first_input = intval(trim(fgets(STDIN)));
  var_dump($first_input);
  if($first_input == 0){
    $posts[] = post_review($posts);
    $count += 1;
  }elseif ($first_input == 1) {
    if (count($posts) <= 0) {
      echo "We have no data\n";
    }else{
      read_review();
    }
  }elseif ($first_input == 2) {
    end_program();
  }else {
    error_message();
  }
}
 ?>
