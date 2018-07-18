
<?php
//変数定義
 $Line = "---------------------------\n";
 $input_message = "plese input ";
 // $type = "佐藤";
 // $title = "佐藤";
 // $comment = "佐藤";
 $post = array();
 //連想配列＝ハッシュ。添字配列＝配列？
 $count = 0;

//input
function post_review(){
 echo $input_message . "type\n";
 $post['type'] = trim(fgets(STDIN));
 echo $input_message . "title\n";
 $post['title'] = trim(fgets(STDIN));
 echo $input_message . "comment\n";
 $post['commnet'] = trim(fgets(STDIN));
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
echo "[0]レビューを書く\n[1]レビューを読む\n[2]アプリを終了する";
$count += 1;

  $first_input = intval(trim(fgets(STDIN)));
  if(first_input == 0){
    post_review();
  }elseif (first_input == 1) {
    read_review();
  }elseif (first_input == 2) {
    end_program();
  }else {
    error_message();
  }
}
 ?>
