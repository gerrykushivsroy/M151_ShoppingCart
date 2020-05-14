<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ItemController extends Controller
{
    /**
     * @Route("/list")
     */
    public function listAction(Request $request)
    {
        if (!$this->checkAccess($request)) {
            return $this->redirect("/login");
        }

        $mysql = $this->connectToDB();
        $sql = "SELECT * FROM srg_items";
        $result = $mysql->query($sql); 
        
        $row = $result->fetch_all();

        return $this->render("List.html.php", ["items" => $row, "username" => $request->getSession()->get('username')]);
    }

    /**
     * @Route("/add")
     */
    public function addAction(Request $request)
    {
        if (!$this->checkAccess($request)) {
            return $this->redirect("/login");
        }

        $itemCount = $request->get("amount"); 
        $itemName = $request->get("name"); 

        $mysqli = $this->connectToDB();

        $statement = $mysqli->prepare("INSERT INTO srg_items(Anzahl, Name) VALUES(?, ?)"); 
        $statement->bind_param("is", $itemCount, $itemName);
        $statement->execute(); 
        
        return $this->redirect("list");

    }
    /**
     * @Route("/delete")
     */
    public function removeAction(Request $request)
    {
        if (!$this->checkAccess($request)) {
            return $this->redirect("/login");
        }

        $idToDelete = intval($request->get("id")); 
        $mysqli = $this->connectToDB(); 
        $statement = $mysqli->prepare("DELETE FROM srg_items WHERE id = ?"); 
        $statement->bind_param("i", $idToDelete); 
        $statement->execute(); 

        return $this->redirect("list"); 
    }
    /**
     * @Route("/edit")
     */
    public function editAction(Request $request)
    {
        if (!$this->checkAccess($request)) {
            return $this->redirect("/login");
        }

        $idToEdit = intval($request->get("id"));
        $mysqli = $this->connectToDB();
        $sql = "SELECT * FROM srg_items WHERE id = " . intval($idToEdit); 
        $result = $mysqli->query($sql);

        $item = $result->fetch_array(MYSQLI_ASSOC);
        return $this->render("Edit.html.php", ["item" => $item]); 
    }

    private function checkAccess(Request $request) {
        $session = $request->getSession();

        if ($session->has('userId')) {
            return true;
        }
        return false;
    }

    public function connectToDB()
    {
        $dbhost = "login-67.hoststar.ch";
        $dbusername = "inf17d";
        $dbpassword = "j5TQh!zmMtqsjY3";
        $database = "inf17d";
        $connection = new \mysqli($dbhost, $dbusername, $dbpassword, $database) or die("Connect failed: %s\n" . $connection->error);

        return $connection;
    }
}
