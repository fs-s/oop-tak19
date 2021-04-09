<?php require 'partials/head.php'; ?>

    <ul>
        <?php foreach ( $tasks as $task ) : ?>
            <li>
                <?= $task->description; ?>
                <a href="/users/delete?id=<?= $task->id; ?>">delete</a>
                <a href="/users/edit?id=<?= $task->id; ?>">edit</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <form action="/tasks" method="POST">
        <input type="text" name="description">
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>