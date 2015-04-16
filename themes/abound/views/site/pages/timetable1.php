<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Accept a Drop - jQuery EasyUI Demo</title>
	<link rel="stylesheet" type="text/css" href="../../themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="../../themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../demo.css">
	<script type="text/javascript" src="../../jquery.min.js"></script>
	<script type="text/javascript" src="../../jquery.easyui.min.js"></script>
</head>
<body>
	<h2>Accept a Drop</h2>
	<p>Some draggable object can not be accepted.</p>
	<div style="margin:10px 0;"></div>
	<div id="source" style="border:1px solid #ccc;width:150px;height:400px;float:left;margin:5px;">
		subjects
		<div id="d1" class="drag">English</div>
		<div id="d2" class="drag">Maths</div>
		<div id="d3" class="drag">Kiswahili</div>
		<div id="d4" class="drag">Physics</div>
		<div id="d5" class="drag">Chemistry</div>
		<div id="d6" class="drag">Biology</div>
		<div id="d7" class="drag">History</div>
		<div id="d8" class="drag">Geography</div>
		<div id="d9" class="drag">Religious Education</div>
		<div id="d10" class="drag">Computer Studies</div>
		<div id="d11" class="drag">Agriculture</div>
		<div id="d12" class="drag">Metalwork</div>
		<div id="d13" class="drag">Woodwork</div>
		<div id="d14" class="drag">Aviation</div>
		<div id="d15" class="drag">Business Education</div>
	</div>
	<div id="target" style="border:1px solid #ccc;width:300px;height:400px;float:left;margin:5px;">
		drop here!
	</div>
	<div style="clear:both"></div>
	<style type="text/css">
		.drag{
			width:100px;
			height:10px;
			padding:10px;
			margin:5px;
			border:1px solid #ccc;
			background:#AACCFF;
		}
		.dp{
			opacity:0.5;
			filter:alpha(opacity=50);
		}
		.over{
			background:#FBEC88;
		}
	</style>
	<script>
		$(function(){
			$('.drag').draggable({
				proxy:'clone',
				revert:true,

				cursor:'auto',
				onStartDrag:function(){
					$(this).draggable('options').cursor='not-allowed';
					$(this).draggable('proxy').addClass('dp');
				},
				onStopDrag:function(){
					$(this).draggable('options').cursor='auto';
				}
			});
			$('#target').droppable({
				accept:'#d1,#d3',
				onDragEnter:function(e,source){
					$(source).draggable('options').cursor='auto';
					$(source).draggable('proxy').css('border','1px solid red');
					$(this).addClass('over');
				},
				onDragLeave:function(e,source){
					$(source).draggable('options').cursor='not-allowed';
					$(source).draggable('proxy').css('border','1px solid #ccc');
					$(this).removeClass('over');
				},
				onDrop:function(e,source){
					$(this).append(source)
					$(this).removeClass('over');
				}
			});
		});
	</script>

</body>
</html>