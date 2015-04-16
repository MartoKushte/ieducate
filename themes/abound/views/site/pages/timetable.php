<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create timetable</title>
<link rel="stylesheet" type="text/css" href="../../../css/easyui.css" />
<link rel="stylesheet" type="text/css" href="../../../css/demo.css" />
<link rel="stylesheet" type="text/css" href="../../../css/icon.css" />
<script type="text/javascript" src="../../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../../js/jquery.easyui.min.js"></script>
<script>
			function allowDrop(ev) {
			ev.preventDefault();
			}
			function drag(ev) {
			ev.dataTransfer.setData("text", ev.target.id);
			}
			function drop(ev) {
			ev.preventDefault();
			var data = ev.dataTransfer.getData("text");
			ev.target.appendChild(document.getElementById(data));
			}
</script>
</head>

<link rel="stylesheet" type="text/css"
	href="../../../css/bootstrap.min.css" />
<body>
	<h2>Create timetable</h2>
	<div class="demo-info" style="margin-bottom: 10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>Click and drag a class to timetable.</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			<div class="left">
				<table>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">English</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Mathematics</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">KIswahili</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Biology</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Chemistry</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Physics</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Geography</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">History</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Religious
								Education</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Aviation</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Metal
								Work</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Computer
								Studies</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Business
								Education</div>
						</td>
					</tr>
					<tr>
						<td><div class="item" draggable="true" ondragstart="drag(event)">Agriculture</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="center">
				<div class="span9">
					<table class="table table-bordered">
						<tr class="active">
							<td class="blank"></td>
							<td class="title">Monday</td>
							<td class="title">Tuesday</td>
							<td class="title">Wednesday</td>
							<td class="title">Thursday</td>
							<td class="title">Friday</td>
							<td class="title">Saturday</td>
						</tr>
						<tr class="success">
							<td class="time">08:00</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="info">
							<td class="time">08:40</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="warning">
							<td class="time">09:20</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="active">
							<td class="time">10:00</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="info">
							<td class="time">10:40</td>
							<td class="lunch" colspan="6" style="text-align: center">Break</td>
						</tr>
						<tr class="active">
							<td class="time">11:00</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="success">
							<td class="time">11:40</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="warning">
							<td class="time">12:20</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="info">
							<td class="time">13:00</td>
							<td class="lunch" colspan="6" style="text-align: center">Lunch</td>
						</tr>
						<tr class="success">
							<td class="time">14:00</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="warning">
							<td class="time">14:40</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="info">
							<td class="time">15:20</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
						<tr class="active">
							<td class="time">16:00</td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
							<td id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
						</tr>
					</table>
                    <div  class="row">
                
                <br>

                    </div>
                    
                   </div>
			</div>
		</div>
	</div>
	<style type="text/css">
.left {
	width: 120px;
	float: left;
}

.left table {
	background: #E0ECFF;
}

.left td {
	background: #eee;
}

.right {
	float: right;
	width: 570px;
}

.right table {
	background: #E0ECFF;
	width: 100%;
}

.right td {
	background: #fafafa;
	color: #444;
	text-align: center;
	padding: 2px;
}

.right td {
	background: #E0ECFF;
}

.right td.drop {
	background: #fafafa;
	width: 100px;
}

.right td.over {
	background: #FBEC88;
}

.item {
	text-align: center;
	border: 1px solid #499B33;
	background: #fafafa;
	color: #444;
	width: 100px;
}

.assigned {
	border: 1px solid #BC2A4D;
}

.trash {
	background-color: red;
}
</style>

</body>
</html>
<script>
							$(function(){
								$('.left.item').draggable({
					revert:true,
					proxy:'clone'
					});
					$('.center.td.drop').droppable({
					onDragEnter:function(){
					$(this).addClass('over');
					},
					onDragLeave:function(){
					$(this).removeClass('over');},
				onDrop:function(e,source){
					$(this).removeClass('over');
					if ($(source).hasClass('assigned')){
						$(this).append(source);
					} else {
						var c = $(source).clone().addClass('assigned');
						$(this).empty().append(c);
						c.draggable({
							revert:true
						});
					}
				}
			});
			$('.left').droppable({
				accept:'.assigned',
				onDragEnter:function(e,source){
					$(source).addClass('trash');
				},
				onDragLeave:function(e,source){
					$(source).removeClass('trash');
				},
				onDrop:function(e,source){
					$(source).remove();
				}
			});
		});
	</script>
