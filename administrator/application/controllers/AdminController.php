<?php
class AdminController implements IController{
    public function indexAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new IndexModel();
        $view->params = $params;
        $result = $view->listGo('../views/index.php', $params);
        $fc->setBody($result);
    }
    public function updateAjax(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new IndexModel();
        $view->params = $params;
        $result = $view->ajax('../views/index.php');
        //$fc->setBody($result);
    }
    public function updateAction(){}
    public function insertAction(){}
    public function deleteAction(){}
}