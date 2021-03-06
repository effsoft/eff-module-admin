<?php 

namespace effsoft\eff\module\admin;

use effsoft\eff\EffModule;

class Module extends EffModule{

    public $module_name = 'admin';
    public $dir = __DIR__;

    function init(){
        parent::init();

        $this->registAlias();

        $this->registerThemes();

        $this->registTranslations();
    }
//    public function registerTranslations()
//    {
//        \Yii::$app->i18n->translations[$this->module_name .'/*'] = [
//            'class' => 'yii\i18n\PhpMessageSource',
//            'sourceLanguage' => 'en-US',
//            'basePath' => __DIR__ . '\\messages',
//            'fileMap' => [
//                $this->module_name .'/app' => 'app.php',
//                $this->module_name .'/error' => 'error.php',
//            ],
//        ];
//    }
}