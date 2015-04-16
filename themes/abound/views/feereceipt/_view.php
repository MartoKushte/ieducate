<?php
/* @var $this FeereceiptController */
/* @var $data Feereceipt */
Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
});
		$('.search-form form').submit(function(){
		$('#feereceipt-grid').yiiGridView('update', {
		data: $(this).serialize()
});
		return false;
});
		");
?>

	<div class="container">
		<div class="span-9">
			<table class="table table-bordered" title="Fee Receipts">
				<tr>
					<td style="font-size: 14px"><?php echo CHtml::encode($data->getAttributeLabel('feereceiptID')); ?>:</td>
					<td style="font-size: 14px"><?php echo CHtml::link(CHtml::encode($data->feereceiptID), array('view', 'id'=>$data->feereceiptID)); ?>
					</td>

				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('adminno')); ?>:</td>
					<td><?php echo CHtml::encode($data->adminno); ?></td>
					<td></td>
					<td></td>

				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('classroom')); ?>:</td>
					<td><?php echo CHtml::encode($data->classroom); ?>
					</td>

					<td><?php echo CHtml::encode($data->getAttributeLabel('invoicedate')); ?>:</td>
					<td><?php echo CHtml::encode($data->invoicedate); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('termtitle')); ?>:</td>
					<td><?php echo CHtml::encode($data->termtitle); ?>
					</td>

					<td><?php echo CHtml::encode($data->getAttributeLabel('previousinvoiceamount')); ?>:</td>
					<td><?php echo CHtml::encode($data->previousinvoiceamount); ?>
					</td>

				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('previousamount')); ?>:</td>
					<td><?php echo CHtml::encode($data->previousamount); ?>
					</td>
					<td><?php echo CHtml::encode($data->getAttributeLabel('duedate')); ?>:</td>
					<td><?php echo CHtml::encode($data->duedate); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('adjustedamount')); ?>:</td>
					<td><?php echo CHtml::encode($data->adjustedamount); ?>
					</td>
					<td><?php echo CHtml::encode($data->getAttributeLabel('totalamount')); ?>:</td>
					<td><?php echo CHtml::encode($data->totalamount); ?>
					</td>
				</tr>
				<tr>
					<td><?php echo CHtml::encode($data->getAttributeLabel('dateadded')); ?>:</td>
					<td><?php echo CHtml::encode($data->dateadded); ?>
					</td>
					<td></td>
					<td></td>
				</tr>
			</table>
			
                  	</div>
            <div class="row">
                <div class="span2 offset1">
                <button class="btn btn-danger" type="submit">Download PDF</button>
            </div>
                <div class="span2 offset1">
                    <button class="btn btn-success"type="submit">Download Excel</button>
                </div>
            </div>
            <br /> <br />	
	</div>