<?php
require_once('../../Database.php');
require_once('../../models/User.php');
require_once('../../models/Festival.php');
require_once('../../repositories/Repository.php');
require_once('../../repositories/UserRepository.php');
require_once('../../controllers/UserController.php');
require_once('../../repositories/FestivalRepository.php');
require_once('../../controllers/FestivalController.php');
require_once('../template/head.php');
$controller = new FestivalController();
$festivals = $controller->getAll();
?>
    <section>
        <article>
            <h3>Festivals</h3>
            <a href="add-organisation.php">Toevoegen organisatie</a>
        </article>
    </section>
    <section>
        <article>
            <h3>Festivals</h3>
            <p>Totaal <?php echo $festivals->num_rows; ?></p>
            <table class="table table-striped table-light">
                <thead class="thead thead-light">
                <tr>
                    <th>Naam</th>
                    <th></th>
                <tr>
                </thead>
                <tbody>
                <?php while ($festival = $festivals->fetch_object('Festival')): ?>
                    <tr>
                        <td><?php echo $festival->getName(); ?></td>
                        <td>
                            <a href="/actions/remove-festival.php?id=<?php echo $festival->getFestivalID(); ?>"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </article>
    </section>
<?php require_once('../template/bottom.php'); ?>