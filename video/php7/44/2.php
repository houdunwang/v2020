<?php
$users = [
    ['name' => '向军大叔', 'age' => '16',],
    ['name' => '小明', 'age' => '19',],
    ['name' => '张三', 'age' => '23',],
    ['name' => '李四', 'age' => '16',],
]; ?>
<table border="1">
    <tr>
        <th>编号</th>
        <th>姓名</th>
        <th>年龄</th>
    </tr>
    <?php while($user = current($users)):?>
    <tr>
        <td><?php echo key($users)+1;?></td>
        <td><?php echo $user['name'];?></td>
        <td><?php echo $user['age'];?></td>
    </tr>
    <?php next($users); endwhile; ?>
</table>
