<?= $this->Form->create($user, ['url' => ['action' => 'step2'], 'class' => 'step']) ?>
<fieldset>
    <legend><?= __('Step 2') ?></legend>
    <?php
        echo $this->Form->control('profile.nickname');
        echo $this->Form->control('profile.address');
        echo $this->Form->control('profile.tel');
    ?>
</fieldset>
<?= $this->Form->button(__('Prev'), ['type' => 'button', 'class' => 'prev']) ?>
<?= $this->Form->button(__('Next'), ['class' => 'next']) ?>
<?= $this->Form->end() ?>
