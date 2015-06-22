<div class="books form">
<?php echo $this->Form->create('Book'); ?>
	<fieldset>
		<legend><?php echo __('Edit Book'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('Nombre');
		echo $this->Form->input('Edicion');
		echo $this->Form->input('Autor');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Book.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Book.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Rentbooks'), array('controller' => 'rentbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rentbook'), array('controller' => 'rentbooks', 'action' => 'add')); ?> </li>
	</ul>
</div>
