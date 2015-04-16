<?php
/* @var $this ResultsheetController */
/* @var $data Resultsheet */
?>
<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<div class="container">
	<div class="span9">
		<table class="table table-bordered" title="Result slips">
			<tr>
				<td><?php echo CHtml::link(CHtml::encode($data->resultsheetID), array('view', 'id'=>$data->resultsheetID)); ?>
				</td>
			</tr>
			<tr>

			</tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('admin_no')); ?>:</td>
			<td><?php echo CHtml::link(CHtml::encode($data->admin_no), array('view', 'admin_no'=>$data->admin_no)); ?>
			</td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('examtype')); ?>:</td>
			<td colspan="3"><?php echo CHtml::encode($data->examtype); ?></td>

			</tr>
			<tr>
				<td class="success" colspan="6">Compulsory Exams</td>

			</tr>
			<tr>
				<td><?php echo CHtml::encode($data->getAttributeLabel('maths')); ?>:</td>
				<td><?php echo CHtml::encode($data->maths); ?></td>
				<td><?php echo CHtml::encode($data->getAttributeLabel('english')); ?>:</td>
				<td><?php echo CHtml::encode($data->english); ?></td>

				<td><?php echo CHtml::encode($data->getAttributeLabel('kiswahili')); ?>:</td>
				<td><?php echo CHtml::encode($data->kiswahili); ?>
				</td>
			</tr>
			<tr>
				<td colspan="6">Sciences</td>
			</tr>
			<tr>
				<td><?php echo CHtml::encode($data->getAttributeLabel('biology')); ?>:</td>
				<td><?php echo CHtml::encode($data->biology); ?></td>
				<td><?php echo CHtml::encode($data->getAttributeLabel('physics')); ?></td>				
				<td><?php echo CHtml::encode($data->physics); ?></td>
				<td><?php echo CHtml::encode($data->getAttributeLabel('chemistry')); ?>:</td>
				<td><?php echo CHtml::encode($data->chemistry); ?>
				</td>
			</tr>
			<tr>
				<td colspan="6">Humanities</td>
			</tr>
                        <tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('history')); ?>:</td>
			<td><?php echo CHtml::encode($data->history); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('geography')); ?>:</td>
                        <td><?php echo CHtml::encode($data->geography); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('religious_studies')); ?>:</td>
                        <td><?php echo CHtml::encode($data->religious_studies); ?>
			</td>
                        </tr>
                        <tr><td colspan="6">Technical</td>
                </tr>
			<tr>
                            <td><?php echo CHtml::encode($data->getAttributeLabel('agriculture')); ?>:</td>
                            <td><?php echo CHtml::encode($data->agriculture); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('computerstudies')); ?>:</td>
                        <td><?php echo CHtml::encode($data->computerstudies); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('businesstudies')); ?>:</td>
			<td><?php echo CHtml::encode($data->businesstudies); ?></td>
                        </tr>
                                            <tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('aviation')); ?>:</td>
                        <td><?php echo CHtml::encode($data->aviation); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('french')); ?>:</td>
                        <td><?php echo CHtml::encode($data->french); ?></td>
                        <td><?php echo CHtml::encode($data->getAttributeLabel('music')); ?>:</td>
			<td><?php echo CHtml::encode($data->music); ?></td>
                                            </tr>
                                            <tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('woodwork')); ?>:</td>
                        <td><?php echo CHtml::encode($data->woodwork); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('metal')); ?>:</td>
                        <td><?php echo CHtml::encode($data->metal); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('art')); ?>:</td>
			<td><?php echo CHtml::encode($data->art); ?>
			</td>
                                            </tr>
                                            <tr>
                                                
                                                <td colspan="6"><span class="text-info" style="font-size: 18px">Totals</span></td>
                                            </tr>
			<tr>
			<td><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</td>
			<td><?php echo CHtml::encode($data->points); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('totalmks')); ?>:</td>
                                                      <td><?php echo CHtml::encode($data->totalmks); ?></td>
			<td><?php echo CHtml::encode($data->getAttributeLabel('mean')); ?>:</td>
                                                       <td><?php echo CHtml::encode($data->mean); ?></td>>
                                              </tr>
                                              <tr>
                                                    <td><?php echo CHtml::encode($data->getAttributeLabel('grade')); ?>:</td>
                                                    <td><?php echo CHtml::encode($data->grade); ?></td>
                                                    <td><?php echo CHtml::encode($data->getAttributeLabel('position')); ?>:</td>
                                                    <td colspan="3"><?php echo CHtml::encode($data->position); ?></td>
                                              </tr>
                </table>
 <button class="btn btn-primary">Download pdf</button>
            <br />

			</div>
</div>