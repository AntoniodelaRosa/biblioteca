<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Direccion');
		echo $this->Form->input('Telefono');
		echo $this->Form->input('Email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rentbooks'), array('controller' => 'rentbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rentbook'), array('controller' => 'rentbooks', 'action' => 'add')); ?> </li>
	</ul>
</div>
