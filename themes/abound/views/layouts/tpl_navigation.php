<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse"
				data-target=".nav-collapse"> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="icon-bar"></span>
			</a>

			<!-- Be sure to leave the brand out there if you want it shown -->
			<a class="brand" href="#">iEducate <small>SMS</small>
			</a>

			<div class="nav-collapse">
				<?php $this->widget('zii.widgets.CMenu',array(
						'htmlOptions'=>array('class'=>'pull-right nav'),
						'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
						'itemCssClass'=>'item-test',
						'encodeLabel'=>false,
						'items'=>array(
								array('label'=>'Dashboard', 'url'=>array('/site/index')),
								array('label'=>'Front Desk', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'front')),
												array('label'=>'Visitor Pass', 'url'=>array('/visitorpass')),
												array('label'=>'Appointment', 'url'=>array('/appointment')),
												array('label'=>'Feedback', 'url'=>array('/feedbackarea')),
												array('label'=>'Events', 'url'=>array('/eventplan')),

										)),
								array('label'=>'Admin', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'admin')),
												array('label'=>'Classsroom', 'url'=>array('/classroom')),
												array('label'=>'Hostels', 'url'=>array('/hostels')),
												array('label'=>'Curriculum Plan', 'url'=>array('/curriculumplan')),
												array('label'=>'Assets', 'url'=>array('/asset')),
												array('label'=>'Vendors', 'url'=>array('/vendor')),
												array('label'=>'Events', 'url'=>array('/eventplan')),
												array('label'=>'School Info', 'url'=>array('/schoolinfo')),
												array('label'=>'Staff', 'url'=>array('/staff')),
												array('label'=>'Salary portal', 'url'=>array('/salary')),
												array('label'=>'School Expenditure', 'url'=>array('/expenditure')),
										)),
								array('label'=>'Academic', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'academic')),
												array('label'=>'Students', 'url'=>array('/student')),
												array('label'=>'Parents', 'url'=>array('/parents')),
												array('label'=>'Grading', 'url'=>array('/grades')),
												array('label'=>'Subjects', 'url'=>array('/subject')),
												array('label'=>'timetable', 'url'=>array('/timetable')),
												array('label'=>'Exam results', 'url'=>array('/resultsheet')),
										)),
								array('label'=>'Fees', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'feemanage')),
												array('label'=>'School Expenditure', 'url'=>array('/expenditure')),
												array('label'=>'Student Receipts', 'url'=>array('/feereceipt')),
												array('label'=>'Fee Structure', 'url'=>array('/feestructure')),
												array('label'=>'Fee Termdates', 'url'=>array('/feetermdate')),
												array('label'=>'Banking Details', 'url'=>array('/bankaccounts')),
													

										)),
								array('label'=>'Transport', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'transport')),
												array('label'=>'Transport Records', 'url'=>array('/transportation')),
												array('label'=>'Stop Details', 'url'=>array('/stopdetails')),
												array('label'=>'Route Details', 'url'=>array('/route')),
												array('label'=>'Fuel Consumption', 'url'=>array('/fuelconsumption')),
												array('label'=>'Vehicle Details', 'url'=>array('/vehicle')),

										)),
								array('label'=>'Library', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'library')),
												array('label'=>'Issue Books', 'url'=>array('/bookissuereturn')),
												array('label'=>'Book records', 'url'=>array('/book')),
										)),
								array('label'=>'Store', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Dashboard', 'url'=>array('/site/page', 'view'=>'store')),
												array('label'=>'Book stock', 'url'=>array('/bookstock')),
												array('label'=>'Assets Records', 'url'=>array('/asset')),
										)),
								/*array('label'=>'Gii generated', 'url'=>array('customer/index')),*/
								array('label'=>'Setup <span class="caret"></span>', 'url'=>'#','itemOptions'=>array('class'=>'dropdown','tabindex'=>"-1"),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>"dropdown"),
										'items'=>array(
												array('label'=>'Users', 'url'=>array('/user')),
												array('label'=>'Roles', 'url'=>array('/userrole')),
												array('label'=>'Departments', 'url'=>array('/department')),
												array('label'=>'Financial Year', 'url'=>array('/financialyear')),
										)),
								array('label'=>'Help', 'url'=>array('/site/contact')),
								array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
								array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
						),
                )); ?>
			</div>
		</div>
	</div>
</div>

<div class="subnav navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">

			<!-- 	<div class="style-switcher pull-left">
                <a href="javascript:chooseStyle('none', 60)" checked="checked"><span class="style" style="background-color:#0088CC;"></span></a>
                <a href="javascript:chooseStyle('style2', 60)"><span class="style" style="background-color:#7c5706;"></span></a>
                <a href="javascript:chooseStyle('style3', 60)"><span class="style" style="background-color:#468847;"></span></a>
                <a href="javascript:chooseStyle('style4', 60)"><span class="style" style="background-color:#4e4e4e;"></span></a>
                <a href="javascript:chooseStyle('style5', 60)"><span class="style" style="background-color:#d85515;"></span></a>
                <a href="javascript:chooseStyle('style6', 60)"><span class="style" style="background-color:#a00a69;"></span></a>
                <a href="javascript:chooseStyle('style7', 60)"><span class="style" style="background-color:#a30c22;"></span></a>
          	</div>  -->
			<form class="navbar-search pull-right" action="">

				<input type="text" class="search-query span2" placeholder="Search">

			</form>
		</div>
		<!-- container -->
	</div>
	<!-- navbar-inner -->
</div>
<!-- subnav -->
