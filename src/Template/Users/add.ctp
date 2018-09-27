<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div id="tab">
    <div v-show="isCurrent('tab1')" key="tab1">
        <?= $this->cell('Userinfo::display')->render() ?>
    </div>
    <div v-show="isCurrent('tab2')" key="tab2">
        <?= $this->cell('Userinfo::information')->render() ?>
    </div>
    <div v-show="isCurrent('tab3')" key="tab3">
        <?= $this->cell('Userinfo::hobby')->render() ?>
    </div>
    <div v-show="isCurrent('tab4')" key="tab4">
        <?= $this->cell('Userinfo::confirm')->render() ?>
    </div>
</div>
<?=$this->Html->script('form')?>
