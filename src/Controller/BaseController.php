<?php
class BaseController
{
  protected $type;
  protected $action;
  protected $title;
  protected $view;
  protected $file;
  protected $festival_id;
  protected $article_id;
    
  public function __construct()
  {
    $this->view_init();
  }
  
  // 初期化
  private function view_init()
  {
    // Smartyクラス
    $this->view = new Smarty();
    // Smarty関連ディレクトリの設定
    $this->view->template_dir = _SMARTY_TEMPLATES_DIR;
    $this->view->compile_dir  = _SMARTY_TEMPLATES_C_DIR;
    $this->view->config_dir   = _SMARTY_CONFIG_DIR;
    $this->view->cache_dir    = _SMARTY_CACHE_DIR;
    
    if(isset($_REQUEST['type'])) $this->type = $_REQUEST['type'];
    if(isset($_REQUEST['action'])) $this->action = $_REQUEST['action'];
    
    if(isset($_REQUEST['festival_id'])) $this->festival_id = $_REQUEST['festival_id'];
    if(isset($_REQUEST['article_id'])) $this->article_id  = $_REQUEST['article_id'];
    
    // 環境変数
    $this->view->assign('SCRIPT_NAME', _SCRIPT_NAME);
  }
  
  // 表示用
  protected function view_display()
  {
    $this->view->assign('title', $this->title);
    $this->view->assign('type',  $this->type);
    $this->view->assign('action',  $this->action);
    
    // USERボタン切り替え
    if(isset($_SESSION["user_id"])) {
      $this->view->assign('changeBtn_name', "My page");
      $this->view->assign('user', "mypage");
      $this->view->assign('schedule', "schedule");
    } else {
      $this->view->assign('changeBtn_name', "SIGN IN");
      $this->view->assign('user', "sign-in");
      $this->view->assign('schedule', "sign-in");
    }
    
    $this->view->display($this->file);
  }
}
