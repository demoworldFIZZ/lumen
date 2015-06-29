<!DOCTYPE html>
<html lang="en" xmlns:wb="http://open.weibo.com/wb">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
	<style>
		body{
			width: 100%;
			margin:0 auto;
			padding: 0;
		}

		body>nav{
			height: 30px;
			background: #000000;
		}
		body>nav>ul{
			list-style:none;
			margin: 0 auto;
			height: 30px;
			width: 980px;
			/*border:1px solid #000000;*/
			
		}
		body>nav>ul>li{
			float: left;
			height: 30px;
			line-height: 30px;
			text-align: center;
			width: 100px;
			color: #ffffff;
			box-sizing:border-box;
		}
	</style>	
</head>
<body>

		<nav >
			<ul>
				<li style="color:#fff">ddd</li>
				<li>eee</li>
				<li>ddd</li>
				<li>fff</li>
				<li>ggg</li>
				<li>hhh</li>
				<li><wb:follow-button uid="2527611092" type="red_3" width="136" height="23" ></wb:follow-button></li>
			</ul>
		</nav>
		<div style="width:960px;border:1px solid #000;height:500px; margin:10px auto;">
		<table>
		<tr>
			<th>id：</th>
			<th>姓名：</th>
			<th>性别：</th>	
		</tr>
			<?php 
				/*$results = DB::select('select * from student where id = ?', [1]);
			    echo "$results[sex]";*/
			    $users = DB::table('student')->get();

					foreach ($users as $student)
					{
					    
					   		 
					    	// <p>{{$student->id}}</p>;
					    	echo "<tr>";
						    	echo "<td>";var_dump($student->id); echo"</td>";
						    	echo "<td>";var_dump($student->id);echo "</td>";
						    	echo "<td>";var_dump($student->sex);echo "</td>";
					    	echo "</tr>";	
					    
					}
			 ?>
			 </table>
		</div>
		
			 
</body>
</html>