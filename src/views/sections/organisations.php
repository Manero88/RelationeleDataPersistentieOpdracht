<?php

use smd\controllers\OrganisationController;

require_once('../template/head.php');
$controller = new OrganisationController();
$organisations = $controller->getAll();
?>
<?php if ($userController->isLoggedIn() && $userController->getUser()->getRole() === 'admin'): ?>
    <section>
        <article>
            <h3>Organisaties</h3>
            <a href="add-organisation.php">Toevoegen organisatie</a>
        </article>
    </section>
<?php endif; ?>
    <section>
        <article>
            <h3>Organisaties</h3>
            <p>Totaal <?= $organisations->num_rows ?></p>
            <table class="table table-striped table-light">
                <thead class="thead-light">
                <tr>
                    <th>Naam</th>
                    <th></th>
                <tr>
                </thead>
                <?php while ($organisation = $organisations->fetch_object('smd\\models\\Organisation')): ?>
                    <tr>
                        <td><?= $organisation->getName() ?></td>
                        <td>
                            <a href="../../actions/remove-organisation.php?id=<?php echo $organisation->getOrganisationID(); ?>"><i
                                        class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>