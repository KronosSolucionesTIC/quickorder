<?php
include dirname(__file__, 2) . '/models/users.php';

$users = new Users();

//Request: creacion de nuevo usuario
if (isset($_POST['create'])) {
    if ($users->getID($_POST['subscriber'])) {
        header('location: ../views/users/new.php?page=new&existe=true');
    } else {
        if ($users->newClient($_POST)) {
            if ($users->newUser($_POST)) {
                header('location: ../views/users/new.php?page=new&success=true');
            }
        } else {
            header('location: ../views/users/new.php?page=new&error=true');
        }
    }

}

//Request: editar usuario
if (isset($_POST['edit'])) {
    if ($users->setEditUser($_POST)) {
        header('location: ../index.php?page=edit&id=' . $_POST['id'] . '&success=true');
    } else {
        header('location: ../index.php?page=edit&id=' . $_POST['id'] . '&error=true');
    }
}

//Request: editar usuario
if (isset($_GET['delete'])) {
    if ($users->deleteUser($_GET['id'])) {
        // header('location: ../index.php?page=users&success=true');
        echo json_encode(["success" => true]);
    } else {
        // header('location: ../index.php?page=users&&error=true');
        echo json_encode(["error" => true]);
    }
}

//Request: Ingresar
if (isset($_POST['Ingresar'])) {
    if ($users->getUserById($_POST['username'])) {
        if ($users->getPass($_POST['username'], $_POST['passwd'])) {
            //$users->getLog($_POST['username']);
            session_start(); //Registra la sesion
            $_SESSION['username'] = $_POST['username'];
            header('location: ../views/administrador/index.php');
        } else {
            header('location: ../views/login/index.php?pass=false');
        }
    } else {
        header('location: ../views/login/index.php?existe=false');
    }
}
