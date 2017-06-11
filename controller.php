<?php
require_once('Tarea.php');
session_start();
$action = $_POST['action'];
$task = new Tarea();
$task->SetLista($_SESSION['tareas']);
switch ($action){
        case '1':
                $tarea=$_POST['tarea'];
                if (isset($tarea) && $tarea !=''){
                        $task->setElemento($tarea);
                        $_SESSION['tareas'][]=$task->getElemento();
                }
        break;
        case '2':

                $pos = $_POST['id'];
                $task->deleteLista($pos);
                $_SESSION['tareas']=$task->getLista();
        break;
        }

header('Location:index.php');
exit;
?>
