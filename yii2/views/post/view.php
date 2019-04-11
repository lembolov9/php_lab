<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="post-view">

    <div class="container">
            <div class="blog-post">
                <h2 class="blog-post-title"><?=$model->title ?></h2>
                <p class="blog-post-meta"><?=$model->date ?></p>
                <p><?=$model->text ?></p>
            </div>
    </div>


</div>
