<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\controllers\SiteController;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'username',
//            'auth_key',
//            'password_hash',
//            'password_reset_token',
             'type_user',
            // 'range_user',
            // 'rate_user',
             'fullname',
            // 'fullname2',
             'tell',
            // 'tell2',
             'email:email',
            // 'email2:email',
            // 'info_user:ntext',
             'address',
            // 'avatar',
            // 'status',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
