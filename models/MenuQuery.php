<?php

namespace app\models;

use Yii;

use creocoder\nestedsets\NestedSetsQueryBehavior;
/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property int $lft
 * @property int $rgt
 * @property int $depth
 * @property string $name
 */
class MenuQuery extends \yii\db\ActiveQuery
{
    public function behaviors() {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
}
