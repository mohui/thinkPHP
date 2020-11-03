<?php if (!defined('THINK_PATH')) exit();?><center>
<html>
	<body>
		<form method="post" action="/tp/index.php/Home/Book/addData" enctype="multipart/form-data">
		<h1>图书</h1>
			<table>
			<tr>
				<td>名称</td>
				<td><input type="text" name="b_name"></td>
			</tr>
			<tr>
				<td>作者</td>
				<td><input type="text" name="author"></td>
			</tr>
			<tr>
				<td>封面</td>
				<td><input type="file" name="b_cover" /></td>
			</tr>
			<tr>
				<td>内容</td>
				<td><textarea name="b_content" rows="6" cols="20"></textarea></td>
			</tr>
			<tr>
				<td>分类</td>
				<td>
					<select name="c_id">
						<?php if(is_array($re)): foreach($re as $key=>$v): ?><option value="<?php echo ($v["c_id"]); ?>" selected><?php echo ($v["c_name"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="提交"></td>
				<td></td>
			</tr>
			</table>
		</form>
	</body>
</html>
</center>