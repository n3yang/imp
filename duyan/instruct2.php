<?php require_once("IATname.inc"); ?>
<html>
<head>
<title><?php echo $IATname; ?> IAT Instructions</title>    
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript"> 
    $.getJSON("input.txt", function (data) {
        $("#clabel1").html(data.cat1.label);
        $("#clabel2").html(data.cat2.label);
        $("#clabelA").html(data.catA.label);
        $("#clabelB").html(data.catB.label);
        if (data.cat1.itemtype == "txt")
            { $("#citems1").html(data.cat1.items.join(", ")); }
        else if (data.cat1.itemtype == "img")
            { $("#citems1").html("Images of "+data.cat1.label); }
        if (data.cat2.itemtype == "txt")
            { $("#citems2").html(data.cat2.items.join(", ")); }
        else if (data.cat2.itemtype == "img")
            { $("#citems2").html("Images of "+data.cat2.label); }
        if (data.catA.itemtype == "txt")
            { $("#citemsA").html(data.catA.items.join(", ")); }
        else if (data.catA.itemtype == "img")
            { $("#citemsA").html("Images of "+data.catA.label); }
        if (data.catB.itemtype == "txt")
            { $("#citemsB").html(data.catB.items.join(", ")); }
        else if (data.catB.itemtype == "img")
            { $("#citemsB").html("Images of "+data.catB.label); }
    }); 
</script>
<style type="text/css"> @import "iat.css";</style>
</head>

<body>
    
<div id="instructions">

    <p>接下来的任务中，将要求您对一组呈现的词语进行分类。分类要尽可能地快且准确。速度太慢或太多错误都将会使结果无法解释。这部分将需要大约5分钟时间。下面列出了类别标签以及属于那些类别的项目。</p>

    <table>
        <tr><td style="width:100px;font-weight: bolder">类别</td><td style="font-weight: bolder">选项</td></tr>
        <tr><td id="clabel1"></td><td id="citems1"></td>
        <tr><td id="clabel2"></td><td id="citems2"></td>
        <tr><td id="clabelA"></td><td id="citemsA"></td>
        <tr><td id="clabelB"></td><td id="citemsB"></td>
    </table>

 
    <p>请注意</p>
    <ul>
        <li>把您的食指放在‘E’键和‘I’键上以确保能尽快反应。</li>
        <li>上部的两个标签将告诉您哪一个词应该用哪一个键反应。</li>
        <li>每一个词语或图片都可以归为某一类， 大部分的分类都很容易。</li>
        <li>如果您反应太慢的话，可能会得不到结果。请尽可能的快。</li>
        <li>快速反应可能会导致少量的错误，这是正常现象。</li>
        <li>为了得到最好的结果，避免干扰并且集中注意力。</li>
    </ul>
    <p>操作方法：</p>
    <p>当出现的词语属于左边的类别时，<b>按 E 键</b>；属于在右边的类别时，<b>按 I 键</b>；当出现错误的判断时，屏幕会出现红叉的标志提醒，可在重新做出选择后继续。
任务所需时间大约为五分钟。测验完成后，您将得到一个测验结果报告。</p>
 
    <p>为了达到最佳效果，请尽可能减少环境的干扰，并关闭其他正在运行的程序。如果您看得不是很清楚，可将屏幕亮度调到最大。</p>

    <form action="IAT.php">
        <input type="submit" value="Continue">
    </form>
    
</div>
</body>