<?= $this->Form->create($user, ['url' => ['action' => 'step1'], 'class' => 'step']) ?>
<fieldset>
    <legend><?= __('Step 1') ?></legend>
    <?php
        echo $this->Form->control('email');
        echo $this->Form->control('password');
    ?>
</fieldset>
<?= $this->Form->button(__('Next'), ['class' => 'next']) ?>
<?= $this->Form->end() ?>
