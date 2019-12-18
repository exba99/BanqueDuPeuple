<?php
    include_once "../../../header.php";
    require_once "../../modal/modelCompte.php";
    $comptes = getAllComptes();
?>

<div id="headerwrap">
    <div class="container">
        <br><br><br><br>
        <h1 class="display-4" align="center" style="text-decoration: underline;">LISTE DES COMPTES</h1>
        <a href="/mesprojets/BanqueDuPeuple/newCompte"><button type="button" class="btn btn-secondary btn-lg float-right">NOUVEAU COMPTE</button></a>
        <br><br><br>
        <div class="content">
            <table class="table table-striped table-responsive-md btn-table">

                <thead>
                <tr>
                    <th>#</th>
                    <th>NUMERO</th>
                    <th>DATE CREATION</th>
                    <th>SOLDE</th>
                    <th>NOM CLIENT</th>
                    <th>ACTIONS</th>
                </tr>
                </thead>

                <tbody>
                    <?php
                        if ($comptes){

                            foreach ($comptes as $key => $c){
                                $nomComplet = $c['nom']." ".$c['pnom'];
                                echo '
                                    <tr>
                                        <td>
                                            '.($key+1).'
                                        </td>
                                        <td>
                                            '.$c['numero'].'
                                        </td>
                                        <td>
                                            '.$c['date'].'
                                        </td>
                                        <td>
                                            '.$c['solde'].'
                                        </td>
                                        <td>
                                            '.$nomComplet.'
                                        </td>
                                        <td>
                                            <button class="btn btn-outline-danger" idSupprimer="'.$c['id'].'"><i class="fa fa-times fa" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>

            </table>
        </div>

    </div>
</div>
<?php
    include_once "../../../footer.php";
?>
