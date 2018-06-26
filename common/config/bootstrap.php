<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('@dektrium/user', dirname(dirname(__DIR__)) . '/common/modules/dektrium/yii2-user');
Yii::setAlias('@dektrium/rbac', dirname(dirname(__DIR__)) . '/common/modules/dektrium/yii2-rbac');
