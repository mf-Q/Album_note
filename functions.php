<?php
// データベースに接続
function connectDB() {
    $param = 'mysql:dbname=Album_note;host=localhost';
    try {
        $pdo = new PDO($param, 'root', 'root');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
}
// 4行目　-> dbname はデータベース名、host はホスト名を設定
// 6行目　-> ユーザー名とパスワード設定
// 10-11行目　-> データベースに接続できなかった場合は、エラーメッセージを表示させてプログラムを終了
?>
