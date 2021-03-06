<?php

namespace lajax\translatemanager\controllers\actions;

use lajax\translatemanager\services\Optimizer;

/**
 * Class for optimizing language database.
 * @author Lajos Molnár <lajax.m@gmail.com>
 * @since 1.0
 */
class OptimizerAction extends \yii\base\Action {

    /**
     * Removing unused language elements.
     * @return string
     */
    public function run() {
        $optimizer = new Optimizer;

        return $this->controller->render('optimizer', [
                    'items_count' => $optimizer->optimization()
        ]);
    }

}
