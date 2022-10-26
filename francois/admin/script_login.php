<?php 
session_start();
if(isset($_POST['submit']))
{
    if(isset($_POST['Username']) && !empty($_POST['Username']))
    {
        if(filter_var($_POST['Username'], FILTER_VALIDATE_EMAIL))
        {
            if(isset($_POST['password']) && !empty($_POST['password']))
            {

                $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); //accès au server
                $password = sha1($_POST['password']); //récupère le mot de passe hashuré


                $getdata = $pdo->prepare("SELECT email FROM admin WHERE email=? and password=?"); //rentre la commande dans le SQL
                $getdata->execute(array($_POST['Username'], $password)); //execute la commande avec les informations rentrées par l'utilisateur

                $row = $getdata->rowCount(); //si ça marche rend true sinon false

                if($row==true)
                {
                    $_SESSION['admin']=$_POST['Username'];
                    header("Location:admin.php");
                }
                else
                {
                    $erreur= "Username ou mot de passe inconnue";
                }
            }
            else
            {
                $erreur= "Veuillez saisir votre mot de passe";
            }
        }
        else
        {
            $erreur="Veuillez saisir un email valide";
        }

    }
    else
    {
        $erreur="Veuillez saisir un Username";
    }
}