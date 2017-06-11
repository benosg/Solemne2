<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Solemne 2</title>
</head>

<body>
    <div class="container">
        <div align="center" class="panel panel-default">
            <h1>Mis Tareas</h1>
            <form action="controller.php" method="post">
                <div class="form-group form-inline">
                    <label>Tarea: </label>
                    <input type="text" name="tarea" placeholder="Ingrese la tarea" />
                    <input type="hidden" name="action" value="1" />
                    <button type="submit" class="btn btn-sm btn-primary"> + </button>
                </div>
        </div>
        </form>
    </div>
    <div class="container">
        <div class="form-group">
            <table class="table table-condensed table-striped">
                <?php
        if (isset($_SESSION['tareas'])){
            foreach (array_keys($_SESSION['tareas']) as $i){
                ?>
                    <form action="controller.php" method="post">
                        <div aling="left" class="form-group form-inline">

                            <tr>
                                <td>
                                    <input type="hidden" name="action" value="2" />
                                    <button type="submit" class="btn btn-success"> x </button>
                                </td>
                                <td>
                                    <?php echo $_SESSION['tareas'][$i]; ?>
                                    <input type="hidden" name="id" value="<?php echo $i; ?>" />
                                </td>
                            </tr>

                        </div>
                    </form>
                    <?php
            }
        }
            ?>
        </div>
    </div>
    </table>

</body>

</html>
