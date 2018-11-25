<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Menu;

class ArticleController extends Controller
{

    public function actionIndex()
    {

        $this->enableCsrfValidation = false;
        return $this->render('index');
    }
}
