<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($user['User']['Direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($user['User']['Telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['Email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentbooks'), array('controller' => 'rentbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rentbook'), array('controller' => 'rentbooks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rentbooks'); ?></h3>
	<?php if (!empty($user['Rentbook'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Delivery Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Rentbook'] as $rentbook): ?>
		<tr>
			<td><?php echo $rentbook['id']; ?></td>
			<td><?php echo $rentbook['user_id']; ?></td>
			<td><?php echo $rentbook['book_id']; ?></td>
			<td><?php echo $rentbook['created']; ?></td>
			<td><?php echo $rentbook['Delivery_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rentbooks', 'action' => 'view', $rentbook['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rentbooks', 'action' => 'edit', $rentbook['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rentbooks', 'action' => 'delete', $rentbook['id']), null, __('Are you sure you want to delete # %s?', $rentbook['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rentbook'), array('controller' => 'rentbooks', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
