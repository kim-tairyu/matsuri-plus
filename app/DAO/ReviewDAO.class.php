<?php
require_once 'SuperDAO.class.php';

// User DAO
class ReviewDAO extends SuperDAO {
  
  // コンストラクタ
  public function __construct() {
    parent::__construct();
  }
  
  // 祭りのレビュー情報を取得
  public function getReviewInfo($festival_id) {
    try {
      $sql = 'SELECT user.user_id, user.user_name, review.festival_id, review.user_id, review.review, review.star FROM user LEFT JOIN review ON user.user_id = review.user_id WHERE review.festival_id =?;';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this->stmt->bindValue(1,$festival_id);
      $this->stmt->execute();                  // SQL文実行
      $this->result = $this->stmt->fetchAll();;             // 結果を代入
      parent::closeDB($this->stmt, $pdo);      // DB切断
        
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
    
  public function putReview($fes_id,$user_id,$kanso,$star){
    try {
      $sql = 'INSERT INTO review (festival_id,user_id,review,star) VALUES (?,?,?,?)';
      $pdo          = parent::getConnection(); // DB接続
      $this->stmt   = $pdo->prepare($sql);     // ステートメント
      $this ->stmt -> bindValue(1, $fes_id);
      $this ->stmt -> bindValue(2, $user_id);
      $this ->stmt -> bindValue(3, $kanso);
      $this ->stmt -> bindValue(4, $star);
      $this->stmt->execute();                  // SQL文実行
      parent::closeDB($this->stmt, $pdo);      // DB切断
        
    } catch(PDOException $e) {
      $this->result = 'DB SELECT Error!'.$e->getMesseage;
      die();
    }
    return $this->result;
  }
}