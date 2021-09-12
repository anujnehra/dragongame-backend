<div class="players form">
<?php echo $this->Form->create('Player'); ?>
	<fieldset>
		<legend><?php echo __('Add Player'); ?></legend>
	<?php
		echo $this->Form->input('fullname');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('avatar');
		echo $this->Form->input('status');
		echo $this->Form->input('token');
		echo $this->Form->input('created_at');
		echo $this->Form->input('updated_at');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Gameplays'), array('controller' => 'gameplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gameplay'), array('controller' => 'gameplays', 'action' => 'add')); ?> </li>
	</ul>
</div>
