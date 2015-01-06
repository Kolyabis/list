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
    /* Экшен для добавления новой категории */
    public function insertAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new categoryModel();
        $view->params = $params;
        $result = $view->set_newCategory('../views/categoryAdd.php', $params);
        $fc->setBody($result);
    }
    public function deleteAction(){}
}