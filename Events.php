<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\customizetags;

use humhub\components\Controller;
use humhub\modules\user\widgets\AccountProfileMenu;
use humhub\modules\ui\form\widgets\BasePicker;
use humhub\modules\space\widgets\SpaceDirectoryTagList;
use Yii;
use yii\base\ActionEvent;
use yii\base\WidgetEvent;
use yii\helpers\Url;
use yii\web\HttpException;
use yii\log\Logger;

class Events
{
    public static function onBasePicker(WidgetEvent $event) 
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('customize-tags');

        /** @var BasePicker $basePicker */
        $basePicker = $event->sender;
        if($basePicker->attribute === 'tagsField' || $basePicker->attribute === 'tags') {
            $basePicker->maxInput = $module->tagMaxLength;
        }
    }

    public static function onSpaceDirectoryTagList(WidgetEvent $event)
    {
        /** @var Module $module */
        $module = Yii::$app->getModule('customize-tags');

        /** @var SpaceDirectoryTagList $tagList */
        $tagList = $event->sender;
        $tagList->maxTags = $module->spacesShowingMaxTags;        
    }
}
