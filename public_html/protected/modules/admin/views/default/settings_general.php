<?php
/**
 * @var SettingsForm $model
 * @var CActiveForm $form
 */
use common\components\helpers\HArray as A;
?>
<div class="row">
    <?php echo $form->label($model,'sitename'); ?>
    <?php echo $form->textField($model,'sitename', array('style'=>'width: 100%', 'class'=>'form-control')); ?>
    <?php echo $form->error($model,'sitename'); ?>
</div>

<div class="row">
    <?php echo $form->label($model,'firm_name'); ?>
    <?php echo $form->textField($model,'firm_name', array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'firm_name'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'email'); ?>
    <?php echo $form->textField($model, 'email', array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'email'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'emailPublic'); ?>
    <?php echo $form->textField($model, 'emailPublic', array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'emailPublic'); ?>
</div>

<div class="row">
    <?php echo $form->label($model,'phone'); ?>
    <?php echo $form->textField($model,'phone', array('class'=>'form-control'))?>
    <?php echo $form->error($model,'phone'); ?>
</div>

<div class="row">
    <?php echo $form->label($model,'phone2'); ?>
    <?php echo $form->textField($model,'phone2', array('class'=>'form-control'))?>
    <?php echo $form->error($model,'phone2'); ?>
</div>

<div class="row">
    <?php echo $form->label($model,'phone3'); ?>
    <?php echo $form->textField($model,'phone3', array('class'=>'form-control'))?>
    <?php echo $form->error($model,'phone3'); ?>
</div>
<? /* ?>
<div class="row">
    <?php echo $form->label($model,'vkLink'); ?>
    <?php echo $form->textField($model,'vkLink', array('class'=>'form-control'))?>
    <?php echo $form->error($model,'vkLink'); ?>
</div>

<div class="row">
    <?php echo $form->label($model,'igLink'); ?>
    <?php echo $form->textField($model,'igLink', array('class'=>'form-control'))?>
    <?php echo $form->error($model,'igLink'); ?>
</div>
<? /**/ ?>

<div class="row">
    <?php echo $form->label($model,'dev_year'); ?>
    <div class="col-md-3">
        <?php echo $form->numberField($model,'dev_year', ['class'=>'form-control inline', 'min'=>0, 'step'=>1, 'style'=>'width:80%'])?> ??.
        &nbsp;<strong style="position:relative;left:13px">&ndash;</strong>
        <?php echo $form->error($model,'dev_year'); ?>
    </div>
    <div class="col-md-3">
        <?php echo $form->numberField($model,'dev_year_to', ['class'=>'form-control inline', 'min'=>0, 'step'=>1, 'style'=>'width:80%'])?> ??.
        <?php echo $form->error($model,'dev_year_to'); ?>
    </div>
</div>

<div class="row">
    <?php echo $form->label($model, 'workingTime'); ?>
    <?php
        $this->widget('admin.widget.EditWidget.TinyMCE', array(
        	'editorSelector'=>'workingTimeEditor',
            'model'=>$model,
            'attribute'=>'workingTime',
            'full'=>false,
            'htmlOptions'=>array('class'=>'big')
        ));
    ?>
    <?php echo $form->error($model,'slogan'); ?>
</div>

<?php $this->widget('\common\widgets\form\DropDownListField', A::m(compact('form', 'model'), [
	'attribute'=>'privacy_policy',
	'data'=>Page::model()->listData('title'),
	'htmlOptions'=>['class'=>'form-control w50', 'empty'=>'???? ????????????']
])); ?>

<div class="row">
    <?php echo $form->label($model, 'privacy_policy_text'); ?>
    <?php
        $this->widget('admin.widget.EditWidget.TinyMCE', array(
        	'editorSelector'=>'privacyPolicyTextEditor',
            'model'=>$model,
            'attribute'=>'privacy_policy_text',
            'full'=>false,
            'htmlOptions'=>array('class'=>'big')
        ));
    ?>
    <?php echo $form->error($model,'privacy_policy_text'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'slogan'); ?>
    <?php
        $this->widget('admin.widget.EditWidget.TinyMCE', array(
        	'editorSelector'=>'sloganEditor',
            'model'=>$model,
            'attribute'=>'slogan',
            'full'=>false,
            'htmlOptions'=>array('class'=>'big')
        ));
    ?>
    <?php echo $form->error($model,'slogan'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'address'); ?>
    <?php
        $this->widget('admin.widget.EditWidget.TinyMCE', array(
        	'editorSelector'=>'addressEditor',
            'model'=>$model,
            'attribute'=>'address',
            'full'=>false,
            'htmlOptions'=>array('class'=>'big')
        ));
    ?>
    <?php echo $form->error($model,'address'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'counter'); ?>
    <?php echo $form->textArea($model, 'counter', array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'counter'); ?>
</div>

<div class="row">
    <?php echo $form->label($model, 'hide_news');?>
    <?php echo $form->dropDownList($model, 'hide_news', array(0=>'??????', 1=>'????'), array('class'=>'form-control w10')); ?>
    <?php echo $form->error($model, 'hide_news');?>
</div>

<?php if (Yii::app()->params['watermark']): ?>
<div class="row">
    <?php echo $form->label($model, 'watermark'); ?>
    <?php echo $form->dropDownList($model, 'watermark', array(0=>'??????', 1=>'????'), array('class'=>'form-control w10')); ?>
    <?php echo $form->error($model,'watermark'); ?>
</div>
<?php endif; ?>

<?=$form->hiddenField($model, 'menu_limit')?>

<?if($model->isDevMode()):?>
<div class="row">
    <?php echo $form->labelEx($model, 'copyright_city'); ?>
    <?php echo $form->textField($model, 'copyright_city', array('class'=>'form-control')); ?>
    <?php echo $form->error($model,'copyright_city'); ?>
</div>
<?php endif; ?>

<div class="row">
    <?php echo $form->labelEx($model, 'favicon'); ?>
    <?php if ($icon = \Yii::app()->settings->getCurrentFavicon()) { ?>
        <div id="favicon" class="faviconImg">
            <div class="img">
                <img src="<?php echo $icon; ?>" alt="" />
            </div>
            <p>
                <a class="js-link" onclick="$(this).parents('.row').find(':file').toggleClass('hidden');">????????????????</a>
            </p>
        </div>
    <?php } ?>
    <?php echo $form->fileField($model, 'faviconFile', $icon ? array('class'=>'hidden'): array()); ?>
    <?php echo $form->error($model, 'faviconFile'); ?>
</div>
