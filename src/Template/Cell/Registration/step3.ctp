<?= $this->Form->create($user, ['url' => ['action' => 'step3'], 'class' => 'step']) ?>
<fieldset>
    <legend><?= __('Step 3') ?></legend>
    <?php echo 'aaaaaaaaaaaaa';
    ?>
</fieldset>
<?= $this->Form->button(__('Prev'), ['type' => 'button', 'class' => 'prev']) ?>
<?= $this->Form->button(__('Next'), ['class' => 'next']) ?>
<?= $this->Form->end() ?>
