<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->control('email',['placeholder'=>'email']);?>
        <?= $this->Form->control('password',['placeholder'=>'password']);?>
    </fieldset>
    <?= $this->Form->button('NEXT',['type'=>'button','class'=>'button_right','@click'=>"show('tab2')"]) ?>
    <?= $this->Form->end() ?>
</div>
