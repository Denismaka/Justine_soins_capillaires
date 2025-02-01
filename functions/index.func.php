
<?php

// session_start();

if (isset($_POST['login'])) {

    $email_user = htmlspecialchars(trim($_POST['email_user']));
    $password = htmlspecialchars(trim($_POST['password_user']));


    if (!empty($email_user) && !empty($password)) {




        if (adminConnect($email_user) == 1) {

            $pas = adminInfo($email_user, $password);

            $password_hasher = sha1($password);

            if ($password_hasher == $pas['password_user']) {

                $adminInfo = adminInfo($email_user, $password);
                $_SESSION['id_user'] = $adminInfo['id_user'];
                $_SESSION['email_user'] = $adminInfo['email_user'];
                $_SESSION['email_user'] = $adminInfo['email_user'];
                $_SESSION['id_grade'] = $adminInfo['id_grade'];
                $_SESSION['confirmation_user'] = $adminInfo['confirmation_user'];

                if ($_SESSION['id_grade'] == 3) {
                    header('Location: card.php?id_user=' . $_SESSION['id_user']);
                } else {
                    header('Location: dashboard.php?page=home&id_user=' . $_SESSION['id_user']);
                }
            } else {
                $error = "<font color='red'>Mot de passe incorrect !</font>";
            }
        } else {

            $error = "<font color='red'>Cet utilisateur n'existe pas ! ";
        }
    } else {
        $error = "<font color='red'>Tous les champs ne sont pas remplis !</font>";
    }
}

function adminConnect($email_user)
{
    $password = htmlspecialchars(trim($_POST['password_user']));
    global $db;

    $a = ['email_user' => $email_user];


    $sql = "SELECT * FROM users WHERE email_user = :email_user ";
    $req = $db->prepare($sql);
    $req->execute($a);

    $exist = $req->rowCount();

    return $exist;
}

function adminInfo($email_user, $password)
{

    global $db;

    $a = [

        'email_user'     => $email_user,
        'password_user'  => sha1($password)
    ];


    $sql = "SELECT * FROM users WHERE email_user = :email_user AND password_user = :password_user";
    $req = $db->prepare($sql);
    $req->execute($a);

    $exist = $req->fetch();

    return $exist;
}
