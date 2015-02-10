<!-- File: /app/View/Posts/index.ctp -->


<p><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></p>
<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($registers as $register): ?>
    <tr>
        <td><?php echo $register['Register']['registers_id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $register['Register']['user_name'],
                    array('action' => 'view', $register['Register']['registers_id'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $register['Register']['registers_id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $register['Register']['registers_id'])
                );
            ?>
        </td>
        <td>
            <?php echo $register['Register']['division']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>