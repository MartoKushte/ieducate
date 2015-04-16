<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fee Management</title>
<link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<div class="page-header">
  <h1 class="offset5">Fee <small>Management</small></h1>
</div>
</head>
<link href="../../../../themes/abound/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<body>

	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="icon icon-home"></i>  Dashboard <span class="label label-info pull-right">BETA</span>', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'')),
				array('label'=>'<i class="icon icon-search"></i> About this Application<span class="label label-important pull-right">NEW</span>', 'url'=>'http://www.techcube.co.ke/schoolapp'),
				array('label'=>'<i class="icon icon-envelope"></i> Fee Management Portal <span class="badge badge-success pull-right"></span>', 'url'=>'#'),
				// Include the operations menu
				array('label'=>'OPERATIONS','items'=>$this->menu),
			),
			));?>
		</div>
        <br>
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td width="50%">Bandwith Usage</td>
              <td>
              	<div class="progress progress-danger">
                  <div class="bar" style="width: 80%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Disk Spage</td>
              <td>
             	<div class="progress progress-warning">
                  <div class="bar" style="width: 60%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Conversion Rate</td>
              <td>
             	<div class="progress progress-success">
                  <div class="bar" style="width: 40%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>System Speed</td>
              <td>
              	<div class="progress progress-info">
                  <div class="bar" style="width: 20%"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
		<div class="well">
        
            <dl class="dl-horizontal">
              <dt>Account status</dt>
              <dd>Premium</dd>
              <dt>IEducate App</dt>
              <dd>&copy; <?php echo date("Y") ?></dd>
              <dt>Support Contact</dt>
              <dd>254728944815</dd>
               <dt>Date</dt>
              <dd> <?php echo date("d/m/y") ?></dd>
             
              
            </dl>
      </div>
		
    </div><!--/span-->
    <div class="span9">
    

<div class="row">
	<div class="span3 offset1">
			<button class="btn btn-info" type="submit"  onclick="document.location.href = '../expenditure'">School expenditure</button>
	</div>
	<div class="span3 offset2">
			<button class="btn btn-info" type="submit"  onclick="document.location.href = '../feereceipt'">Fee Receipt</button>
	</div>
</div>
<br />
<br  />
<div class="row">
	<div class="span3 offset1">
			<button class="btn btn-info" type="submit"  onclick="document.location.href = '../feestructure'">Fee Structure</button>
	</div>
	<div class="span3 offset2">
			<button class="btn btn-info" type="submit"  onclick="document.location.href = '../feetermdate'">Adjust Fee Termdates</button>
	</div>
</div>
<br />
<br />
<div class="row">
	<div class="span3 offset1">
			<button class="btn btn-info" type="submit"  onclick="document.location.href = '../bankaccounts'">Manage Bank accounts</button>
	</div>
</div>
<br />
<br />
<br  />
<div class="well">
        
            <dl class="dl-horizontal">
              <dt>Note:</dt>
              <dd>Manage Students Fees And Reciepts Printing</dd>
              <dt>@School App</dt>
              <dt>&copy; <?php echo date("Y") ?></dt>
               <dt>Date: <?php echo date("d/m/y") ?></dt>
              
             
              
            </dl>
      </div>

</div>


</body>
</html>
