<?php include '../partials/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiorna l'ospite con id <?php echo $_GET['id']; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php include '../functions.php'; ?>

                <?php $ospite = findById($_GET['id']); ?>

                <?php if (!empty($ospite)) { ?>
                    <form class="form-group" action="http://localhost/Boolean/ospiti-crud/update/save.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $ospite['id']; ?>">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" name="name" class="form-control" placeholder="Inserisci il nome dell'ospite" required value="<?php echo $ospite['name']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="lastname">Cognome</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome dell'ospite" required value="<?php echo $ospite['lastname']; ?>" />
                        </div>
                        <div class="form-group">
                            <?php
                                $date_of_birth = $ospite['date_of_birth'];

                                $exploded_date_of_birth = explode(' ', $date_of_birth);

                                $only_date = $exploded_date_of_birth[0];
                             ?>
                            <label for="date_of_birth">Data di nascita</label>
                            <input type="date" name="date_of_birth" placeholder="Inserisci la data di nascita" class="form-control" required value="<?php echo $only_date; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="document_type">Tipo di documento</label>
                            <select class="form-control" name="document_type" required>
                                <option value="">---Inserisci un tipo documento---</option>
                                <option value="CI"<?php echo ('CI' == $ospite['document_type']) ? ' selected' : null; ?>>Carta identità</option>
                                <option value="Driver License"<?php echo ('Driver License' == $ospite['document_type']) ? ' selected' : null; ?>>Patente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="document_number">Numero documento</label>
                            <input type="text" name="document_number" placeholder="Inserisci il numero del documento" class="form-control" required value="<?php echo $ospite['document_number']; ?>" />
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Aggiorna" class="form-control" />
                        </div>
                    </form>
                <?php } else { ?>
                    Id Non trovato
                <?php } ?>
            </div>
        </div>
    </div>

<?php include '../partials/footer.php'; ?>
