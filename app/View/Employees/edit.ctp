<div class="employees form">
<?php echo $this->Form->create('Employee',array('novalidate','enctype' => 'multipart/form-data')); ?>
	<fieldset>
		<legend><?php echo __('Edit Employee'); ?></legend>
	<?php
		echo $this->Form->input('EmployeeID');
		echo $this->Form->input('EmployeeName');
		echo $this->Form->input('Address');
		echo $this->Form->input('EmailAddress');
		echo $this->Form->input('Phone',array('type' => 'text'));
		echo $this->Form->input('DOB',array('type' => 'text','class'=> 'datepicker'));
		echo $this->Form->input('EmployeeImage', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Employee.EmployeeID')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Employee.EmployeeID')))); ?></li>
		<li><?php echo $this->Html->link(__('List Employees'), array('action' => 'index')); ?></li>
	</ul>
</div>
 <script>
 $(function() {
   $(".datepicker").datepicker(
    {
                       dateFormat: 'yy-mm-dd',
                       onSelect: function(dateText, inst){
                             $('#select_date').val(dateText);
                             $("#datepicker").datepicker("destroy");
                      }
    }
   );
  });
 </script>