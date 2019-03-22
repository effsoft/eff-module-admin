<?php

namespace effsoft\eff\module\admin\widgets;

use effsoft\eff\EffWidget;


class SidebarWidget extends EffWidget{

    function init(){
        parent::init();

    }

    function run(){
        return $this->render('//admin/widgets/sidebar');
    }
}