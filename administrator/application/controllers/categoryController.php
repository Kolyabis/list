<?php
class categoryController implements IController{
    public function indexAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new categoryModel();
        $view->params = $params;
        $result = $view->get_category('../views/category.php', $params);
        $fc->setBody($result);
    }
    public function updateAction(){}
    public function insertAction(){}
    public function deleteAction(){}
}