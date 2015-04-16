<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;
?>
<?php
$gridDataProvider = new CArrayDataProvider(array(
		array('id'=>1, 'firstName'=>'Mark', 'lastName'=>'Otto', 'language'=>'CSS','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
		array('id'=>2, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
		array('id'=>3, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,4,4,7,5,9,10</span>'),
		array('id'=>4, 'firstName'=>'Jacob', 'lastName'=>'Thornton', 'language'=>'JavaScript','usage'=>'<span class="inlinebar">1,3,16,5,12,5</span>'),
		array('id'=>5, 'firstName'=>'Stu', 'lastName'=>'Dent', 'language'=>'HTML','usage'=>'<span class="inlinebar">1,3,4,5,3,5</span>'),
));
?>
<link
	href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />


<style type="text/css">
<!--
.style1 {
	font-family: Corbel;
	font-size: 12px;
}
-->
</style>
<div class="row-fluid">
	<div class="span3 ">
		<div class="stat-block">
			<ul>
				<li class="stat-graph inlinebar" id="weekly-visit">8,4,6,5,9,10</li>
				<li class="stat-count"><span>Student</span><span>Management</span>
				</li>
				<li class="stat-percent"><span class="text-success stat-percent"></span>
				</li>
			</ul>
		</div>
	</div>
	<div class="span3 ">
		<div class="stat-block">
			<ul>
				<li class="stat-graph inlinebar" id="new-visits">2,4,9,1,5,7,6</li>
				<li class="stat-count"><span>$Finance</span><span>Management</span>
				</li>
				<li class="stat-percent"><span class="text-error stat-percent"></span>
				</li>
			</ul>
		</div>
	</div>
	<div class="span3 ">
		<div class="stat-block">
			<ul>
				<li class="stat-graph inlinebar" id="unique-visits">200,300,500,200,300,500,1000</li>
				<li class="stat-count"><span>Accomodation</span><span>Management</span>
				</li>
				<li class="stat-percent"><span class="text-success stat-percent"></span>
				</li>
			</ul>
		</div>
	</div>
	<div class="span3 ">
		<div class="stat-block">
			<ul>
				<li class="stat-graph inlinebar" id="">1000,3000,6000,8000,3000,8000,10000</li>
				<li class="stat-count"><span>Admin</span><span>Overview</span></li>
				<li class="stat-percent"><span class="text-success stat-percent"></span>

				</li>
			</ul>
		</div>
	</div>
</div>

<span class="style1"></span>
<div class="row-fluid">


	<div class="span9">
		<table class="table table-bordered">
			<caption class="text-info" style="font-size: 18px"
				style="font-style:oblique">Modules and ControlSets</caption>
			<thead>
				<tr>
					<th>#</th>
					<th>Frontdesk</th>
					<th>Admin</th>
					<th>Academic</th>
					<th>Finance</th>
					<th>Transport</th>
					<th>Library</th>
					<th>Store</th>
				</tr>
			</thead>
			<tbody>
				<tr class="active">
					<td>1</td>
					<td>Visitorpass</td>
					<td>Classrooms</td>
					<td>Students</td>
					<td>School Expenditure</td>
					<td>Transport Records</td>
					<td>Issue Books</td>
					<td>BookStock</td>
				</tr>
				<tr class="success">
					<td>2</td>
					<td>Appointment</td>
					<td>Hostels</td>
					<td>Parents</td>
					<td>Student Receipts</td>
					<td>Stop Details</td>
					<td>Book Records</td>
					<td>Asset Records</td>
				</tr>
				<tr class="warning">
					<td>3</td>
					<td>Feedback</td>
					<td>Curriculum</td>
					<td>Grading</td>
					<td>Fee Structure</td>
					<td>Fuel Consumption</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="info">
					<td>4</td>
					<td>Events</td>
					<td>Assets</td>
					<td>Subjects</td>
					<td>Fee Termdates</td>
					<td>Vehicle details</td>
					<td></td>
					<td></td>
				</tr>
				<tr class="active">
					<td>5</td>
					<td></td>
					<td>Vendors</td>
					<td>Timetable</td>
					<td>Banking details</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="warning">
					<td>6</td>
					<td></td>
					<td>Events</td>
					<td>Exam Results</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="success">
					<td>7</td>
					<td></td>
					<td>School info</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="info">
					<td>8</td>
					<td></td>
					<td>Staff</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="active">
					<td>9</td>
					<td></td>
					<td>Salary Portal</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<tr class="success">
					<td>9</td>
					<td></td>
					<td>School Expenditure</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>

				<tr class="success">
					<td>10</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=front'">Front
							desk</button></td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=admin'">Admin</button>
					</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=academic'">Academics</button>
					</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=feemanage'">Finance</button>
					</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=transport'">Transport</button>
					</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=library'">Library</button>
					</td>
					<td><button class="btn btn-info" type="submit"
							onclick="document.location.href = '../site/page?view=store'">Store</button>
					</td>
				</tr>

			</tbody>
		</table>
	</div>
	<div class="span3">
		<div class="summary">
			<ul>
				<li><span class="summary-icon"
					onclick="document.location.href = '../site/page?view=feemanage'"> <img
						src="<?php echo $baseUrl ;?>/img/credit.png " width="36"
						height="36" alt="Monthly Income">
				</span> <span class="summary-number">$Fee</span> <span
					class="summary-title"> Payment</span>
				</li>
				<li><span class="summary-icon"
					onclick="document.location.href = '../subject'"> <img
						src="<?php echo $baseUrl ;?>/img/page_white_edit.png" width="36"
						height="36" alt="Open Invoices">
				</span> <span class="summary-number">Subjects</span> <span
					class="summary-title">setup</span>
				</li>
				<li><span class="summary-icon"
					onclick="document.location.href = '../staff'"> <img
						src="<?php echo $baseUrl ;?>/img/page_white_excel.png" width="36"
						height="36" alt="Open Quotes<"">
				</span><span class="summary-number">Staff</span> <span
					class="summary-title"> management</span>
				</li>
				<li><span class="summary-icon"
					onclick="document.location.href = '../user'"> <img
						src="<?php echo $baseUrl ;?>/img/group.png" width="36" height="36"
						alt="Active Members">
				</span> <span class="summary-number">User</span> <span
					class="summary-title"> Management</span>
				</li>
				<li><span class="summary-icon"
					onclick="document.location.href = '../visitorpass'"> <img
						src="<?php echo $baseUrl ;?>/img/folder_page.png" width="36"
						height="36" alt="Recent Conversions">
				</span> <span class="summary-number">Visitor</span> <span
					class="summary-title"> Pass</span></li>

			</ul>
		</div>

	</div>
</div>


<div class="row-fluid">
	<div class="span6"></div>
	<!--/span-->

	<!--/span-->
</div>
<!--/row-->

<div class="row-fluid">
	<div class="span6"></div>
	<!--/span-->
	<div class="span6"></div>
	<!--<div class="span2">
    	<input class="knob" data-width="100" data-displayInput=false data-fgColor="#5EB95E" value="35">
    </div>
	<div class="span2">
     	<input class="knob" data-width="100" data-cursor=true data-fgColor="#B94A48" data-thickness=.3 value="29">
    </div>
	<div class="span2">
         <input class="knob" data-width="100" data-min="-100" data-fgColor="#F89406" data-displayPrevious=true value="44">     	
	</div><!--/span-->
</div>
<!--/row-->




<script>
            $(function() {

                $(".knob").knob({
                    /*change : function (value) {
                        //console.log("change : " + value);
                    },
                    release : function (value) {
                        console.log("release : " + value);
                    },
                    cancel : function () {
                        console.log("cancel : " + this.value);
                    },*/
                    draw : function () {

                        // "tron" case
                        if(this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                , sa = this.startAngle          // Previous start angle
                                , sat = this.startAngle         // Start angle
                                , ea                            // Previous end angle
                                , eat = sat + a                 // End angle
                                , r = 1;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                && (sat = eat - 0.3)
                                && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.v);
                                this.o.cursor
                                    && (sa = ea - 0.3)
                                    && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.pColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });

                // Example of infinite knob, iPod click wheel
                var v, up=0,down=0,i=0
                    ,$idir = $("div.idir")
                    ,$ival = $("div.ival")
                    ,incr = function() { i++; $idir.show().html("+").fadeOut(); $ival.html(i); }
                    ,decr = function() { i--; $idir.show().html("-").fadeOut(); $ival.html(i); };
                $("input.infinite").knob(
                                    {
                                    min : 0
                                    , max : 20
                                    , stopper : false
                                    , change : function () {
                                                    if(v > this.cv){
                                                        if(up){
                                                            decr();
                                                            up=0;
                                                        }else{up=1;down=0;}
                                                    } else {
                                                        if(v < this.cv){
                                                            if(down){
                                                                incr();
                                                                down=0;
                                                            }else{down=1;up=0;}
                                                        }
                                                    }
                                                    v = this.cv;
                                                }
                                    });
            });
        </script>
