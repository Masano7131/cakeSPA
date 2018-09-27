<?= $this->Form->create($user, ['url' => ['action' => 'confirm'], 'class' => 'step']) ?>
<?php
// SecurityComponent 用に最終的に送信するフィールドを列挙
$this->Form->controls([
    'email',
    'password',
    'profile.nickname',
    'profile.address',
    'profile.tel',
]);
?>
<fieldset class="confirm">
    <legend><?= __('Confirm') ?></legend>
    <fieldset class="step1"></fieldset>
    <fieldset class="step2"></fieldset>
    <fieldset class="step3"></fieldset>
</fieldset>
<?= $this->Form->button(__('Prev'), ['type' => 'button', 'class' => 'prev']) ?>
<?= $this->Form->button(__('Register'), ['class' => 'next']) ?>
<?= $this->Form->end() ?>
