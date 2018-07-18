
<?php
//変数定義
 $Line = "---------------------------\n";
 $input_message = "plese input ";
 // $type = "佐藤";
 // $title = "佐藤";
 // $comment = "佐藤";
 $post = array();
 //連想配列＝ハッシュ。添字配列＝配列？

 echo $input_message . "type\n";
 $post['type'] = trim(fgets(STDIN));
 echo $input_message . "title\n";
 $post['title'] = trim(fgets(STDIN));
 echo $input_message . "comment\n";
 $post['commnet'] = trim(fgets(STDIN));

//output
  var_dump($post);
   echo "type: {$post['type']}\n" . $Line;
  // echo "title: $post['title']\n" . $Line;
  // echo "comment: $post['commnet']\n" . $Line;
 ?>
