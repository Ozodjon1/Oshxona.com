<?php

namespace frontend\controllers;

use frontend\models\Meals;
use yii\web\Controller;
use yii\data\Pagination;

class CanteenController extends Controller
{
    public function actionAbout()
    {
        return $this->render("about");
    }

     public function actionMenu()
     {
          $m=Meals::find();
         
          $sahifa=new Pagination(["totalCount"=>$m->count(),'defaultPageSize'=>1]);
         
          $meals=$m->offset($sahifa->offset)->limit(3)->orderBy("id DESC")->all();  
          
          return $this->render("menu",["meals"=>$meals,"sahifa"=>$sahifa]);
     }

    public function actionService()
    {
        return $this->render("service");
    }

    public function actionContact()
    {
        return $this->render("contact");
    }
}



?>