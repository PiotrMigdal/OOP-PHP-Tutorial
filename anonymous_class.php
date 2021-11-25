<?php
//You use anonymous class if you want to run something very simple only one time. You don't store it in memory and it is removed after running

$newObj = new class() {
    public function simpleFun() {
        echo "this is simple one-off method";
    }
};

$newObj->simpleFun();