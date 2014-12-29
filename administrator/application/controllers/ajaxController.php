<?php
class ajaxController implements IController{
    public function indexAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new ajaxModel();
        $view->params = $params;
        $result = $view->ajax('../views/ajax.php', $params);
        $fc->setBody($result);
    }
    public function updateAction(){}
    public function insertAction(){}
    public function deleteAction(){}
}