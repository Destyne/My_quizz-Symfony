<?php

namespace WAC\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$req = "SELECT * FROM categorie ";
    	$doc = $this->getDoctrine()->getManager()->getConnection()->prepare($req);
    	$doc->execute([]);
    	$resultat = $doc->fetchAll();
        return $this->render('WACQuizzBundle:Default:index.html.twig', ["result" => $resultat]);
    }
    public function quizz_showAction($id)
    {
    	$rez = "SELECT * FROM question WHERE id_categorie = $id ";
        $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($rez);
        $doc->execute([]);
        $questions = $doc->fetchAll();
        $req = "SELECT * FROM reponse JOIN question ON reponse.id_question = question.id WHERE question.id_categorie = $id  ";
        $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($req);
        $doc->execute([]);
        $choices = $doc->fetchAll();
    	return $this->render('WACQuizzBundle:Default:question.html.twig', ["choices" => $choices, "questions" => $questions]);

    }
    public function checkChoiceAction(){
        $questions = [];
        foreach ($_POST as $key => $elem) {
            $rez = "SELECT reponse_expected FROM reponse WHERE id = $key";            
            $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($rez);
            $doc->execute([]);
            array_push($questions, $doc->fetchAll()[0]);
        }
        $score = 0;
        $erreur = 0;
        foreach ($questions as $value) {
            if($value['reponse_expected'] == 1) {
                $score++;
            }
            else {
                $erreur++;
            }
        }
        return $this->render('WACQuizzBundle:Default:reponse.html.twig', ["choices" => [$score], "questions" => [$erreur]]);
    }
    /*$ip = $this->request->server->get('REMOTE_ADDR');
        var_dump($ip); */

    public function insertQuizzAction(){
  
        $sql= "INSERT categorie SET
         `name` = :name, `img` = :img";
        $query = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $query->bindParam(':name', $_POST['name']);
        $query->bindParam(':img', $_POST['img']);
        $query->execute();
        $req = "SELECT * FROM categorie ";
        $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($req);
        $doc->execute([]);
        $resultat = $doc->fetchAll();
        return $this->render('WACQuizzBundle:Default:index.html.twig', ["result" => $resultat]);   
    }
    public function removeUserAction(){     
        $sql= "DELETE FROM  fos_user WHERE `username` = :username "; 
        $query = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $query->bindParam(':username', $_POST['username']);
        $query->execute();
        $req = "SELECT * FROM categorie ";
        $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($req);
        $doc->execute([]);
        $resultat = $doc->fetchAll();
        return $this->render('WACQuizzBundle:Default:index.html.twig', ["result" => $resultat]);    }

    public function removeQuizzAction(){     
        $sql= "DELETE FROM  categorie WHERE `name` = :name "; 
        $query = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
        $query->bindParam(':name', $_POST['name']);
        $query->execute();
        $req = "SELECT * FROM categorie ";
        $doc = $this->getDoctrine()->getManager()->getConnection()->prepare($req);
        $doc->execute([]);
        $resultat = $doc->fetchAll();
        return $this->render('WACQuizzBundle:Default:index.html.twig', ["result" => $resultat]);
    }
}