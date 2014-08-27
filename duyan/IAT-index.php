<?php require_once("IATname.inc"); ?>
<html>
<head>
<title><?php echo $IATname; ?> IAT</title>
<script type="text/javascript" src="IAT.js"></script>
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
    window.onload = function() { $('#jscheck').html('<img src=\'Correct.jpg\' width=75 height=75>');}
</script>
<style type="text/css"> @import "iat.css";</style>
</head>

<body>
    
<div id="instructions">
	浏览器Javascript功能必须打开才能参与这个测试。<br><br>
    如果你看到了绿色的对勾标志，说明你可以正常参与测试。<br>
    <div id="jscheck"></div>
    请点击“继续”按钮参与实验。<br><br>
    <form action="instruct1.php">
        <input type="submit" value="继续">
    </form>
</div>

</body>