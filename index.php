<?php include 'partials/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti gli ospiti</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="http://localhost/Boolean/ospiti-crud/create/form.php" class="btn btn-primary">
                    Crea nuovo ospite
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php include 'database.php'; ?>
                <?php if (!empty($ospiti)) { ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Cognome</th>
                                <th>Aggiorna</th>
                                <th>Visualizza</th>
                                <th>Elimina</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ospiti as $ospite) { ?>
                                <tr>
                                    <td><?php echo $ospite['id']; ?></td>
                                    <td><?php echo $ospite['name']; ?></td>
                                    <td><?php echo $ospite['lastname']; ?></td>
                                    <td>
                                        <a href="http://localhost/Boolean/ospiti-crud/update/form.php?id=<?php echo $ospite['id']; ?>" class="btn btn-primary">
                                            Aggiorna
                                        </a>
                                    </td>
                                    <td>
                                        <a href="http://localhost/Boolean/ospiti-crud/show/show.php?id=<?php echo $ospite['id']; ?>" class="btn btn-success">
                                            Vedi
                                        </a>
                                    </td>
                                    <td>
                                        <form action="http://localhost/Boolean/ospiti-crud/delete/delete.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $ospite['id']; ?>">
                                            <input type="submit" value="Cancella" class="btn btn-danger">
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    Non ci sono risultati
                <?php } ?>
            </div>
        </div>
    </div>

<?php include 'partials/footer.php'; ?>
