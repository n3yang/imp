<?php

session_start();
if ($_POST) {
	$_SESSION['question'] = $_POST;
	header('location: IAT-index.php');
}


?><html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title>杜岩毕业试验</title>
	<style type="text/css">
.tab-ses, .tab-ias{
	line-height: 200%;
}
.tab-ias tr:hover, .tab-ses tr:hover{
	background-color: #ccc
}
	</style>
</head>

<body>
	<div>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
			<h1>（SES）</h1>
			<p>这个量表是用来了解您是怎样看待自己的。请仔细阅读下面的句子，在最符合您情况的选项在打勾。请注意，<b>这里要回答的是您实际上认为您自己怎样，而不是回答您认为您应该怎样</b>。答案无正确与错误或好与坏之分，请按照您的真实情况来描述您自己。请您注意要保证每个问题都做了回答，且只选一个答案。谢谢您的合作！</p>
			<p>
				姓名：<input type="text" name="name" value="" />
				性别：<select name="gender"><option value="male">男</option><option value="female">女</option></select>
			</p>
			<p>
				<table border="1" class="tab-ses">
					<tr><td align="center">问题</td><td align="center" colspan="4">选项</td></tr>
					<tr>
						<td>1、我感到我是一个有价值的人，至少与其他人在同一水平上</td>
						<td><input type="radio" name="ses1" value="1">非常符合</td>
						<td><input type="radio" name="ses1" value="2">符合</td>
						<td><input type="radio" name="ses1" value="3">不符合</td>
						<td><input type="radio" name="ses1" value="4">很不符合</td>
					</tr>
					<tr>
						<td>2、我感到我有许多好的品质</td>
						<td><input type="radio" name="ses2" value="1">非常符合</td>
						<td><input type="radio" name="ses2" value="2">符合</td>
						<td><input type="radio" name="ses2" value="3">不符合</td>
						<td><input type="radio" name="ses2" value="4">很不符合</td>
					</tr>
					<tr>
						<td>3、归根结底，我倾向于觉得自己是一个失败者</td>
						<td><input type="radio" name="ses3" value="1">非常符合</td>
						<td><input type="radio" name="ses3" value="2">符合</td>
						<td><input type="radio" name="ses3" value="3">不符合</td>
						<td><input type="radio" name="ses3" value="4">很不符合</td>
					</tr>
					<tr>
						<td>4、我能像大多数人一样把事情做好</td>
						<td><input type="radio" name="ses4" value="1">非常符合</td>
						<td><input type="radio" name="ses4" value="2">符合</td>
						<td><input type="radio" name="ses4" value="3">不符合</td>
						<td><input type="radio" name="ses4" value="4">很不符合</td>
					</tr>
					<tr>
						<td>5、我感到自己值得自豪的地方不多</td>
						<td><input type="radio" name="ses5" value="1">非常符合</td>
						<td><input type="radio" name="ses5" value="2">符合</td>
						<td><input type="radio" name="ses5" value="3">不符合</td>
						<td><input type="radio" name="ses5" value="4">很不符合</td>
					</tr>
					<tr>
						<td>6、我对自己持肯定态度</td>
						<td><input type="radio" name="ses6" value="1">非常符合</td>
						<td><input type="radio" name="ses6" value="2">符合</td>
						<td><input type="radio" name="ses6" value="3">不符合</td>
						<td><input type="radio" name="ses6" value="4">很不符合</td>
					</tr>
					<tr>
						<td>7、总的来说，我对自己是满意的</td>
						<td><input type="radio" name="ses7" value="1">非常符合</td>
						<td><input type="radio" name="ses7" value="2">符合</td>
						<td><input type="radio" name="ses7" value="3">不符合</td>
						<td><input type="radio" name="ses7" value="4">很不符合</td>
					</tr>
					<tr>
						<td>8、我希望我能为自己赢得更多尊重</td>
						<td><input type="radio" name="ses8" value="1">非常符合</td>
						<td><input type="radio" name="ses8" value="2">符合</td>
						<td><input type="radio" name="ses8" value="3">不符合</td>
						<td><input type="radio" name="ses8" value="4">很不符合</td>
					</tr>
					<tr>
						<td>9、我确实时常感到自己毫无用处</td>
						<td><input type="radio" name="ses9" value="1">非常符合</td>
						<td><input type="radio" name="ses9" value="2">符合</td>
						<td><input type="radio" name="ses9" value="3">不符合</td>
						<td><input type="radio" name="ses9" value="4">很不符合</td>
					</tr>
					<tr>
						<td>10、我时常认为自己一无是处</td>
						<td><input type="radio" name="ses10" value="1">非常符合</td>
						<td><input type="radio" name="ses10" value="2">符合</td>
						<td><input type="radio" name="ses10" value="3">不符合</td>
						<td><input type="radio" name="ses10" value="4">很不符合</td>
					</tr>
				</table>
			</p>


			<h1>（IAS）</h1>
			<p>请认真阅读下面的每个条目，并决定其陈述对你适用或其真实的程度。根据以下标准在最符合您情况的选择。答案无正确与错误或好与坏之分，请按照您的真实情况来描述您自己。</p>

			<p>
				<table border="1" class="tab-ias">
					<tr><td align="center">问题</td><td align="center" colspan="5">选项</td></tr>
					<tr>
						<td>1、即使在非正式的聚会上，我也常感到紧张</td>
						<td><input type="radio" name="ias1" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias1" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias1" value="3">中等程度相符</td>
						<td><input type="radio" name="ias1" value="4">非常相符</td>
						<td><input type="radio" name="ias1" value="5">极其相符</td>
					</tr>
					<tr>
						<td>2、与一群不认识的人在一起时，我通常感到不自在</td>
						<td><input type="radio" name="ias2" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias2" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias2" value="3">中等程度相符</td>
						<td><input type="radio" name="ias2" value="4">非常相符</td>
						<td><input type="radio" name="ias2" value="5">极其相符</td>
					</tr>
					<tr>
						<td>3、在与一位异性交谈时我通常感到轻松。</td>
						<td><input type="radio" name="ias3" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias3" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias3" value="3">中等程度相符</td>
						<td><input type="radio" name="ias3" value="4">非常相符</td>
						<td><input type="radio" name="ias3" value="5">极其相符</td>
					</tr>
					<tr>
						<td>4、在必须同老师或上司谈话时，我感到紧张</td>
						<td><input type="radio" name="ias4" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias4" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias4" value="3">中等程度相符</td>
						<td><input type="radio" name="ias4" value="4">非常相符</td>
						<td><input type="radio" name="ias4" value="5">极其相符</td>
					</tr>
					<tr>
						<td>5、聚会常会使我感到焦虑及不自在</td>
						<td><input type="radio" name="ias5" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias5" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias5" value="3">中等程度相符</td>
						<td><input type="radio" name="ias5" value="4">非常相符</td>
						<td><input type="radio" name="ias5" value="5">极其相符</td>
					</tr>
					<tr>
						<td>6、与大多数人相比，我在社交交往中可能较少羞怯。</td>
						<td><input type="radio" name="ias6" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias6" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias6" value="3">中等程度相符</td>
						<td><input type="radio" name="ias6" value="4">非常相符</td>
						<td><input type="radio" name="ias6" value="5">极其相符</td>
					</tr>
					<tr>
						<td>7、在与我不太熟悉的同性谈话时，我常常感到紧张</td>
						<td><input type="radio" name="ias7" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias7" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias7" value="3">中等程度相符</td>
						<td><input type="radio" name="ias7" value="4">非常相符</td>
						<td><input type="radio" name="ias7" value="5">极其相符</td>
					</tr>
					<tr>
						<td>8、在求职面试时我会紧张的</td>
						<td><input type="radio" name="ias8" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias8" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias8" value="3">中等程度相符</td>
						<td><input type="radio" name="ias8" value="4">非常相符</td>
						<td><input type="radio" name="ias8" value="5">极其相符</td>
					</tr>
					<tr>
						<td>9、我希望自己在社交场合中信心更足一些</td>
						<td><input type="radio" name="ias9" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias9" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias9" value="3">中等程度相符</td>
						<td><input type="radio" name="ias9" value="4">非常相符</td>
						<td><input type="radio" name="ias9" value="5">极其相符</td>
					</tr>
					<tr>
						<td>10、社交场合中，我很少感到焦虑</td>
						<td><input type="radio" name="ias10" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias10" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias10" value="3">中等程度相符</td>
						<td><input type="radio" name="ias10" value="4">非常相符</td>
						<td><input type="radio" name="ias10" value="5">极其相符</td>
					</tr>
					<tr>
						<td>11、一般而言，我是一个害羞的人</td>
						<td><input type="radio" name="ias11" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias11" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias11" value="3">中等程度相符</td>
						<td><input type="radio" name="ias11" value="4">非常相符</td>
						<td><input type="radio" name="ias11" value="5">极其相符</td>
					</tr>
					<tr>
						<td>12、在与一位迷人的异性交谈时我经常感到紧张</td>
						<td><input type="radio" name="ias12" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias12" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias12" value="3">中等程度相符</td>
						<td><input type="radio" name="ias12" value="4">非常相符</td>
						<td><input type="radio" name="ias12" value="5">极其相符</td>
					</tr>
					<tr>
						<td>13、给不太熟的人打电话时我通常觉得紧张</td>
						<td><input type="radio" name="ias13" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias13" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias13" value="3">中等程度相符</td>
						<td><input type="radio" name="ias13" value="4">非常相符</td>
						<td><input type="radio" name="ias13" value="5">极其相符</td>
					</tr>
					<tr>
						<td>14、我在与权威人士谈话时感到紧张</td>
						<td><input type="radio" name="ias14" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias14" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias14" value="3">中等程度相符</td>
						<td><input type="radio" name="ias14" value="4">非常相符</td>
						<td><input type="radio" name="ias14" value="5">极其相符</td>
					</tr>
					<tr>
						<td>15、即使处于一群和我相当不同的人群之中，通常我仍感到放松</td>
						<td><input type="radio" name="ias15" value="1">一点儿也不相符</td>
						<td><input type="radio" name="ias15" value="2">有一点儿相符</td>
						<td><input type="radio" name="ias15" value="3">中等程度相符</td>
						<td><input type="radio" name="ias15" value="4">非常相符</td>
						<td><input type="radio" name="ias15" value="5">极其相符</td>
					</tr>
				</table>
			</p>

			<p><input type="submit" value="提交" style="height:50px; width:500px;"/></p>
		</form>
	</div>
</body>
</html>