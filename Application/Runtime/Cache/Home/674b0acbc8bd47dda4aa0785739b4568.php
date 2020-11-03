<?php if (!defined('THINK_PATH')) exit();?><html id='list'>
	<body>
	<input type="text" name="search" id="search" />
	<input type="button" value="搜索" onclick="sousuo()" />
	<input type="button" value="批量删除" onclick="shan()" />
		<table border='1'>
			<th><input type="checkbox" name="pi" id="pi" onclick="quan()">ID</th>
			<th>图书名称</th>
			<th>作者</th>
			<th>封面</th>
			<th>内容</th>
			<th>类型</th>
			<th>操作</th>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
					<td><input type="checkbox" name="liang" id="liang" value="<?php echo ($v["id"]); ?>"><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["b_name"]); ?></td>
					<td><?php echo ($v["author"]); ?></td>
					<td>
					<img src="/kao/kao1/tp/Public/<?php echo ($v["b_cover"]); ?>" width="200" height="200"/>
					</td>
					<td><?php echo ($v["b_content"]); ?></td>
					<td><?php echo ($v["c_name"]); ?></td>
					<td><a href="/kao/kao1/tp/index.php/Home/Book/delone/id/<?php echo ($v["id"]); ?>">删除</a></td>
				</tr><?php endforeach; endif; ?>
		</table>
		<?php echo ($page); ?>
	</body>
</html>
<script>
	function sousuo(){
		var search=document.getElementById('search').value;
		//alert(search);
		var ajax=new XMLHttpRequest();
		ajax.open('get','/kao/kao1/tp/index.php/Home/Book/sel_list?search='+search,true);
		ajax.send();
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4&&ajax.status==200){
				//alert(ajax.responseText);
				document.getElementById('list').innerHTML=ajax.responseText;
			}
		}
	}
	function quan(){
		var se=document.getElementById('pi');
		var si=document.getElementsByName('liang');
		for(var i=0;i<si.length;i++)
	}
	function shan(){
		var pi=document.getElementById('pi');
		var liang=document.getElementsByName('liang');
		//alert(liang);
		str="";
		for(var i=0;i<liang.length;i++){
			if(liang[i].checked==true){
				str=str+','+liang[i].value;
			}
		}
		id=str.substr(1);
		//alert(id);
		var ajax=new XMLHttpRequest();
		ajax.open('get','/kao/kao1/tp/index.php/Home/Book/del?id='+id,true);
		ajax.send();
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4&&ajax.status==200){
				//alert(ajax.responseText);
				document.getElementById('list').innerHTML=ajax.responseText;
			}
		}
	}
</script>