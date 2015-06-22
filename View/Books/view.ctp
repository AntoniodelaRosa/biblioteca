<div class="books view">
<h2><?php  echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($book['Book']['Nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edicion'); ?></dt>
		<dd>
			<?php echo h($book['Book']['Edicion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($book['Book']['Autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($book['Book']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($book['Book']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), null, __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentbooks'), array('controller' => 'rentbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rentbook'), array('controller' => 'rentbooks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Rentbooks'); ?></h3>
	<?php if (!empty($book['Rentbook'])): ?>
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
		foreach ($book['Rentbook'] as $rentbook): ?>
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
