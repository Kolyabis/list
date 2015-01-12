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
    /********************************* Экшен для добавления новой категории ******************************/
    public function insertAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new categoryModel();
        $view->params = $params;
        $result = $view->addCategory('../views/categoryAdd.php', $params);
        $fc->setBody($result);
    }
    /******************************* Метод контроллера удаления категории AJAX ****************************/
    public function deleteAction(){
        $fc = FrontController::getInstance();
        $params = $fc->getParams();
        $view = new categoryModel();
        $result = $view->del_category('../views/ajax.php', $params);
        $fc->setBody($result);
    }
}