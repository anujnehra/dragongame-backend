<div class="players view">
<h2><?php echo __('Player'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($player['Player']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fullname'); ?></dt>
		<dd>
			<?php echo h($player['Player']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($player['Player']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($player['Player']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Avatar'); ?></dt>
		<dd>
			<?php echo h($player['Player']['avatar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($player['Player']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Token'); ?></dt>
		<dd>
			<?php echo h($player['Player']['token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created At'); ?></dt>
		<dd>
			<?php echo h($player['Player']['created_at']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated At'); ?></dt>
		<dd>
			<?php echo h($player['Player']['updated_at']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player'), array('action' => 'edit', $player['Player']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player'), array('action' => 'delete', $player['Player']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $player['Player']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Gameplays'), array('controller' => 'gameplays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gameplay'), array('controller' => 'gameplays', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Gameplays'); ?></h3>
	<?php if (!empty($player['Gameplay'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Player Id'); ?></th>
		<th><?php echo __('Result'); ?></th>
		<th><?php echo __('Winner Health'); ?></th>
		<th><?php echo __('Loser Health'); ?></th>
		<th><?php echo __('Created At'); ?></th>
		<th><?php echo __('Updated At'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($player['Gameplay'] as $gameplay): ?>
		<tr>
			<td><?php echo $gameplay['id']; ?></td>
			<td><?php echo $gameplay['player_id']; ?></td>
			<td><?php echo $gameplay['result']; ?></td>
			<td><?php echo $gameplay['winner_health']; ?></td>
			<td><?php echo $gameplay['loser_health']; ?></td>
			<td><?php echo $gameplay['created_at']; ?></td>
			<td><?php echo $gameplay['updated_at']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'gameplays', 'action' => 'view', $gameplay['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'gameplays', 'action' => 'edit', $gameplay['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'gameplays', 'action' => 'delete', $gameplay['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gameplay['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Gameplay'), array('controller' => 'gameplays', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
