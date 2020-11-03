<?php if (!defined('THINK_PATH')) exit();?><html>
	<body>
		<form method="post" action="">
			<table>
			<tr>
				<td>课程名</td>
				<td>学习人数</td>
				<td>是否更新</td>
			</tr>
			<?php if(is_array($re)): foreach($re as $key=>$v): ?><tr>
				<td><?php echo ($v["c_name"]); ?></td>
				<td><?php echo ($v["c_num"]); ?></td>
				<td><?php echo ($v["is_complete"]); ?></td>
			</tr><?php endforeach; endif; ?>
			</table>
		</form>
	</body>
</html>