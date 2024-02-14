<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use humhub\components\Application;
use humhub\modules\ui\form\widgets\BasePicker;
use humhub\modules\space\widgets\SpaceDirectoryTagList;

/** @noinspection MissedFieldInspection */
return [
    'id' => 'customize-tags',
    'class' => 'humhub\modules\customizetags\Module',
    'namespace' => 'humhub\modules\customizetags',
    'events' => [
        [BasePicker::class, BasePicker::EVENT_BEFORE_RUN, ['\humhub\modules\customizetags\Events', 'onBasePicker']],
        [SpaceDirectoryTagList::class, SpaceDirectoryTagList::EVENT_BEFORE_RUN, ['\humhub\modules\customizetags\Events', 'onSpaceDirectoryTagList']]
    ]
];
?>