<?php incLayout("header", ["title" => $title]); ?>

<div>
    <p>
        Esta vista es Users
    </p>
</div>

<?php if (!$users) { ?>
    <div>
        <p>
            No existen usuarios registrados.
        </p>
    </div>
<?php } else { ?>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>FIRSTNAME</th>
                <th>LASTNAME</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td><?= $user['firstname'] ?></td>
                    <td><?= $user['lastname'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><a href="<?= url("user/edit/".$user["id"]) ?>">📝</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>

<?php incLayout("footer"); ?>