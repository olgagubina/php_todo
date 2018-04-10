<?php require('partials/head.php'); ?>

<h1>Submit your name</h1>

<form method="POST" action="/users" >
    <input title="name" name="name">
    <button type="submit">Send</button>
</form>

<h1>USERS list</h1>
<ul>
    <?php foreach ($users as $user) : ?>
        <li>
            <?= $user->name; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php'); ?>