<?php

class DefaultController extends UFrontendController
{
    public function actions()
    {
        return array();
    }

    public function actionIndex()
    {
        $this->render('index');
    }
}
