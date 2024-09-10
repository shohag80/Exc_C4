<?php if (!empty($users)): ?>
    <?php foreach ($users as $data): ?>
        <tr>
            <td><?php echo $data->id; ?></td>
            <td><?php echo $data->name; ?></td>
            <td><?php echo $data->email; ?></td>
            <td><?php echo $data->created_at; ?></td>
        </tr>
    <?php endforeach; ?>
<?php endif; ?>