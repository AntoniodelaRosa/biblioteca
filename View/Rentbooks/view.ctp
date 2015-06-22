<div class="rentbooks view">
<h2><?php  echo __('Rentbook'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rentbook['Rentbook']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentbook['User']['id'], array('controller' => 'users', 'action' => 'view', $rentbook['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rentbook['Book']['id'], array('controller' => 'books', 'action' => 'view', $rentbook['Book']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rentbook['Rentbook']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Date'); ?></dt>
		<dd>
			<?php echo h($rentbook['Rentbook']['Delivery_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rentbook'), array('action' => 'edit', $rentbook['Rentbook']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rentbook'), array('action' => 'delete', $rentbook['Rentbook']['id']), null, __('Are you sure you want to delete # %s?', $rentbook['Rentbook']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentbooks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rentbook'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
