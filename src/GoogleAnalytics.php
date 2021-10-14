<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\GoogleAnalytics;

use Yii;
use yii\base\Widget;
use yii\web\View;

/**
 * Class GoogleAnalytics
 *
 * @package   TomLutzenberger\GoogleAnalytics
 * @copyright 2019 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergertom@gmail.com>
 */
class GoogleAnalytics extends Widget
{

    /**
     * @var string The id of the analytics property
     */
    public $gaId;


    /**
     * {@inheritdoc}
     * @throws \yii\base\InvalidConfigException
     */
    public function run()
    {
        if (isset(Yii::$app->params['gaId'])) {
            $this->gaId = Yii::$app->params['gaId'];
        }

        if (!isset($this->gaId) || empty($this->gaId)) {
            return '';
        }

        $view = $this->getView();
        $view->registerJsFile('https://www.googletagmanager.com/gtag/js?id=' . $this->gaId, [
            'async'    => true,
            'position' => View::POS_HEAD,
        ]);
        $view->registerJs(
            <<<SCRIPT
window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());gtag('config', '$this->gaId');
SCRIPT
            , View::POS_HEAD
        );

        return '';
    }
}
