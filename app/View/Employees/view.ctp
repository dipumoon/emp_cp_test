<div class="employees view">
<h2><?php echo __('Employee'); ?></h2>
	<dl>
		<dt><?php echo __('EmployeeID'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['EmployeeID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmployeeName'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['EmployeeName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmailAddress'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['EmailAddress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['Phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DOB'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['DOB']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EmployeeImage'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['EmployeeImage']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee'), array('action' => 'edit', $employee['Employee']['EmployeeID'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Employee'), array('action' => 'delete', $employee['Employee']['EmployeeID']), array('confirm' => __('Are you sure you want to delete # %s?', $employee['Employee']['EmployeeID']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
