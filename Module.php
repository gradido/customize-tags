<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\customizetags;

use Yii;
use yii\helpers\Url;

class Module extends \humhub\components\Module
{

    public $tagMaxLength = 24;

    public $spacesShowingMaxTags = 10;

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';

}