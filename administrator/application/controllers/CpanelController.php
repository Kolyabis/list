<?php
class CpanelController implements IController{
    public function indexAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new CpanelModel();
        $view->params = $params;
        $result = $view->cpanel('../views/cpanel.php', $params);
        $fc->setBody($result);
    }
    public function updateAction(){}
    public function insertAction(){}
    public function deleteAction(){}
}