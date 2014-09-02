<?php

if ($_POST) {
	foreach ($_POST as $key => $value) {
		$record.=$key.'='.$value."\n";
	}
	$filename = 'output/'.time().'.txt';
	file_put_contents($filename, $record);

	exit('<h3>感谢您为改善雾霾天气所作的贡献！</h3>');
}
?><!DOCTYPE html>
<html lang="zh">
<head>
<title>天气与情绪、反应时测试</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.gamebox{margin: 50px 10px 0px 10px}
	.flashbox{background-color: #eee; padding: 100px 0px 100px 0px;}
	.flashbox-red{background-color: red; padding: 100px 0px 100px 0px;}
	.gamebox .popover{position: relative; display: block; }
	.carousel .carousel-caption{ padding: 5px 15px 5px 15px;}
	.carousel .item img{ width: 480px; height: 320px}
	.tab-pane .form-inline{line-height: 200%;}
	.tab-pane .form-inline:hover{ background-color: #eee;}
	.tab-pane .form-inline .radio {width: 100px; }
	.tab-pane .form-inline .title {width: 80px; display: inline-block; font-weight: bold}
	
</style>
</head>
<body>
<div class="" style="padding:20px;background-color: #eee;"></div>

<div class="container" style="">
	<form name="" action="" method="post">
		<div class="tab-content"> 
			<!-- step 1 -->
			<div class="tab-pane active in" id="tab1">
				<h3>欢迎您参与关于天气与情绪的研究</h3>
				<p>本测试将研究天气对人情绪所产生的影响，以及与反应时间的关系。</p>
				<p>在开始前，为了达到最佳效果，请尽可能减少环境的干扰。</p>
				<p>如果您正在听音乐，也请将音乐暂停。</p>
				<p>请平复心情，尝试深呼吸，并保持安静。</p>
				<p>在您准备好之后，点击“下一步”按钮进入实验。</p>
				<p>实验一共有 <strong>5</strong> 个步骤，全部完成大约须要 <strong>2</strong> 分钟。</p>
				<p><a class="btn btn-normal pull-right next" href="#tab2" data-toggle="tab">下一步</a></p>
			</div>
			<!-- step 2 -->
			<div class="tab-pane fade" id="tab2">
				<h3>请根据您现在的心情状态进行选择</h3>

				<p class="form-inline"><span class="title">害怕</span>
					<label class="radio">
						<input type="radio" name="panas_a_1" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_1" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_1" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_1" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_1" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">惊吓</span>
					<label class="radio">
						<input type="radio" name="panas_a_2" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_2" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_2" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_2" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_2" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">不安</span>
					<label class="radio">
						<input type="radio" name="panas_a_3" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_3" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_3" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_3" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_3" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">紧张</span>
					<label class="radio">
						<input type="radio" name="panas_a_4" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_4" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_4" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_4" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_4" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">容易激动</span>
					<label class="radio">
						<input type="radio" name="panas_a_5" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_5" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_5" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_5" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_5" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">敌意</span>
					<label class="radio">
						<input type="radio" name="panas_a_6" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_6" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_6" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_6" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_6" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">内疚</span>
					<label class="radio">
						<input type="radio" name="panas_a_7" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_7" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_7" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_7" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_7" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">羞愧</span>
					<label class="radio">
						<input type="radio" name="panas_a_8" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_8" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_8" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_8" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_8" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">心烦意乱</span>
					<label class="radio">
						<input type="radio" name="panas_a_9" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_9" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_9" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_9" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_9" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">痛苦</span>
					<label class="radio">
						<input type="radio" name="panas_a_10" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_a_10" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_a_10" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_a_10" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_a_10" value="5">非常多</label>
				</p>
				<p><a class="btn btn-normal pull-right next" href="#tab3" data-toggle="tab">下一步</a></p>
			</div>
			<!-- step 3 -->
			<div class="tab-pane fade" id="tab3">
				<h3>请如实填写您的信息</h3>
				<p>我们不会记录您是谁，您填写的信息仅作为统计使用，请放心填写</p>
				<p>您的性别：
					<select id="gender" name="gender" class="input-small">
						<option value="">请选择..</option>
						<option value="0">女</option>
						<option value="1">男</option>
					</select>
				</p>
				<p>请选择您的年龄范围：
					<select id="age" name="age" class="input-small">
						<option value="">请选择..</option>
						<option value="14-">小于15</option>
						<option value="15-19">15-19</option>
						<option value="20-24">20-24</option>
						<option value="25-29">25-29</option>
						<option value="30-34">30-34</option>
						<option value="35-39">35-39</option>
						<option value="40-44">40-44</option>
						<option value="45-49">45-49</option>
						<option value="50+">大于50</option>
					</select>
				</p>
				<p>在过去一年内，您经历过雾霾的天数：
					<select id="fog_times" name="fog_times" class="input-small">
						<option value="0">没遇到</option>
						<option value="1-3">1-3天</option>
						<option value="3-10">3-10天</option>
						<option value="10+">10天以上</option>
					</select>
				</p>
				<p>您在当地居住的时间：
					<select id="living" name="living" class="input-medium">
						<option value="">请选择..</option>
						<option value="1">小于6个月</option>
						<option value="2">6-12个月</option>
						<option value="3">一年以上</option>
					</select>
				</p>
				<p><a class="btn btn-normal pull-right next" href="#tab4" data-toggle="tab">下一步</a></p>
			</div>
			<!-- step 4 -->
			<div class="tab-pane fade" id="tab4">
				<div class="row">
					<div class="span6 offset3">
						<h3>请想象一下：自己现正处于这样的天气中</h3>
						<div id="my_carousel" class="carousel slide">
							<ol class="carousel-indicators">
								<li data-target="#my_carousel" data-slide-to="0" class="active"></li>
								<li data-target="#my_carousel" data-slide-to="1"></li>
								<li data-target="#my_carousel" data-slide-to="2"></li>
								<li data-target="#my_carousel" data-slide-to="3"></li>
								<li data-target="#my_carousel" data-slide-to="4"></li>
							</ol>
							<!-- Carousel items -->
							<div class="carousel-inner" id="">
								<div class="active item">
									<img src="">
									<div class="carousel-caption text-center">
										<p></p>
									</div>
								</div>
								<div class="item">
									<img src="">
									<div class="carousel-caption text-center">
										<p></p>
									</div>
								</div>
								<div class="item">
									<img src="">
									<div class="carousel-caption text-center">
										<p></p>
									</div>
								</div>
								<div class="item">
									<img src="">
									<div class="carousel-caption text-center">
										<p></p>
									</div>
								</div>
								<div class="item">
									<img src="">
									<div class="carousel-caption text-center">
										<p></p>
									</div>
								</div>
							</div>
							<!-- Carousel nav --> 
							<a class="carousel-control left" href="#my_carousel" data-slide="prev">&lsaquo;</a>
							<a class="carousel-control right" href="#my_carousel" data-slide="next">&rsaquo;</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span6 offset4"><p class="center">看完全部5张图片后，请点击“下一步”按钮</p></div>
				</div>
				<p><a class="btn btn-normal pull-right next" href="#tab5" data-toggle="tab">下一步</a></p>
			</div>
			
			<div class="tab-pane fade" id="tab5">
				<h3>请根据您现在的情绪状态进行选择</h3>

				<p class="form-inline"><span class="title">害怕</span>
					<label class="radio">
						<input type="radio" name="panas_b_1" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_1" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_1" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_1" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_1" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">惊吓</span>
					<label class="radio">
						<input type="radio" name="panas_b_2" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_2" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_2" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_2" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_2" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">不安</span>
					<label class="radio">
						<input type="radio" name="panas_b_3" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_3" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_3" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_3" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_3" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">紧张</span>
					<label class="radio">
						<input type="radio" name="panas_b_4" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_4" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_4" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_4" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_4" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">容易激动</span>
					<label class="radio">
						<input type="radio" name="panas_b_5" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_5" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_5" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_5" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_5" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">敌意</span>
					<label class="radio">
						<input type="radio" name="panas_b_6" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_6" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_6" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_6" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_6" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">内疚</span>
					<label class="radio">
						<input type="radio" name="panas_b_7" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_7" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_7" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_7" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_7" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">羞愧</span>
					<label class="radio">
						<input type="radio" name="panas_b_8" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_8" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_8" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_8" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_8" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">心烦意乱</span>
					<label class="radio">
						<input type="radio" name="panas_b_9" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_9" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_9" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_9" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_9" value="5">非常多</label>
				</p>
				<p class="form-inline"><span class="title">痛苦</span>
					<label class="radio">
						<input type="radio" name="panas_b_10" value="1">完全没有</label>
					<label class="radio">
						<input type="radio" name="panas_b_10" value="2">有一点</label>
					<label class="radio">
						<input type="radio" name="panas_b_10" value="3">中等</label>
					<label class="radio">
						<input type="radio" name="panas_b_10" value="4">比较多</label>
					<label class="radio">
						<input type="radio" name="panas_b_10" value="5">非常多</label>
				</p>


				<p><a class="btn btn-normal pull-right next" href="#tab6" data-toggle="tab">下一步</a></p>
			</div>
			
			<div class="tab-pane fade" id="tab6">
				<h3>最后，我们来做个测试反应速度的小游戏</h3>
				<div class="row gamebox" >
					<div class="span4 offset1">
						<div class="popover left show">
							<div class="arrow"></div>
							<h3 class="popover-title"> 游戏规则 </h3>
							<div class="popover-content">
								<p>游戏开始之后，在10秒内，灰色区域会突然变红，这时以最快的速度点击红色区域，系统将会计算出您的反应时间。</p>
								<p>鼠标点击灰色区域开始游戏</p>
								<p>至少完成一次即可</p>
							</div>
						</div>
					</div>
					<div class="span4 text-center flashbox">点击开始</div>
					<div class="span4 text-center flashbox-red" style="display:none"></div>
					<div class="span2">
						<div>反应时间：</div>
						<div id="flash_result" data-flash-times="0"></div>
					</div>
				</div>
				<input type="hidden" name="user_reaction" id="user_reaction" value="0">
				<input type="hidden" name="user_group" id="user_group" value="">
				<button type="submit" class="btn btn-primary pull-right" id="btn_finish">完成</button>
			</div>


		</div>
	</form>
</div>
<div class="footer"></div>

<!-- Modal -->
<div id="alert_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h3 id="myModalLabel">提示</h3>
	</div>
	<div class="modal-body text-error" id="alert_content">One fine body…</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
	</div>
</div>

<script>


$('#tab2 a.next').click(function(e) {
	num_checked = $("#tab2 input[type='radio']:checked").length;
	if ( num_checked<10 ) {
		$('#alert_content').text('请对页面内的题目进行选择，请不漏选，谢谢。').parent().modal();
		return false;
	}
	return true;
});


$('#tab3 a.next').click(function(e) {
	if($('#gender').val()=='' || $('#age').val()=='' || $('#fog_times').val()=='' || $('#living').val()==''){
		$('#alert_content').text('请对页面内的题目进行选择，请不漏选，谢谢。').parent().modal();
		return false;
	}
	return true;
});


$('.carousel').carousel({
  interval: 3000
})
$(document).ready(function() {
	var user_group = parseInt(Math.random()*100) % 2;
	// group=0 is bad!!
	$('#user_group').val(user_group);

	$('.carousel-inner img').each(function(index, val) {
		if (user_group){
			$(val).attr('src', 'img/good-'+index+'.jpg');
			$(val).next().children('p').text('北京：晴天');
		}else{
			$(val).attr('src', 'img/bad-'+index+'.jpg');
			$(val).next().children('p').text('北京：雾霾');
		}
	});
});



$('#tab5 a.next').click(function(e) {
	num_checked = $("#tab5 input[type='radio']:checked").length;
	if ( num_checked<10 ) {
		$('#alert_content').text('请对页面内的题目进行选择，请不漏选，谢谢。').parent().modal();
		return false;
	}
	return true;
});




var starttime=readytime=0;
$('.flashbox').click(function(event) {
	if (readytime) {
		alert('还没有变换颜色，请不要作弊！：）');
		return false;
	};
	readytime = 1;
	$(this).text('准备...');
	pause_second = Math.random()*-5+6;
	console.log('pause_second:'+pause_second);
	setTimeout(function() {
		starttime = (new Date()).getTime()
		readytime = 0;
		$('.flashbox').hide();
		$('.flashbox-red').show();
	}, pause_second*1000);
	
});

		
$('.flashbox-red').click(function(event) {
	/* Act on the event */
	var endtime = (new Date()).getTime();
	
	if (starttime){
		reactiontime = endtime-starttime;
		times = parseInt($('#flash_result').attr('data-flash-times'))+1;
		$('#flash_result').attr('data-flash-times', times);
		$('#flash_result').html($('#flash_result').html()+'第'+times+'次：'+reactiontime+'毫秒<br>');
		$('#user_reaction').val($('#user_reaction').val()+'|'+reactiontime);
	}
	$(this).hide();
	$('.flashbox').text('再试一次').show();
	starttime = endtime = 0;
});

$('#btn_finish').click(function(e) {
	if ($('#flash_result').attr('data-flash-times')==0){
		$('#alert_content').text('请至少完成一次反应速度游戏').parent().modal();
		return false;
	}
});
</script>
</body>
</html>