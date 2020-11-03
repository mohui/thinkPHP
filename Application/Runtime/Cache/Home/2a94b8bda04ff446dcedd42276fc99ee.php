<?php if (!defined('THINK_PATH')) exit();?><html>
	<body>
	<h1>商品信息</h1>
		<table border=1>
		<tr>
			<td>ID</td>
			<td>名称</td>
			<td>上架</td>
			<td>新品</td>
			<td>热卖</td>
		</tr>
		<?php if(is_array($re)): foreach($re as $key=>$v): ?><tr>
			<td><?php echo ($v["t_id"]); ?></td>
			<td><?php echo ($v["t_name"]); ?></td>
			<td>
			<?php if(($v["t_shang"] == 1)): ?>√
			<?php else: ?> ×<?php endif; ?>
			</td>
			<td>
			<?php if(($v["t_new"] == 1)): ?>√
			<?php else: ?> ×<?php endif; ?>
			</td>
			<td>
			<?php if(($v["t_how"] == 1)): ?>√
			<?php else: ?> ×<?php endif; ?>
			</td>
		</tr><?php endforeach; endif; ?>
		</table>
	</body>
</html>