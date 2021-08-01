<?php

/**
 * I will work with PHP in Obect Oriented manner which is more familiar to
 * my subscribers who are java/c#/dart/python people.
 * We start by creating a Constants class to hold our database constants
 */
class Constants
{
    //DATABASE DETAILS
    static $DB_SERVER="localhost";
    static $DB_NAME="id8276967_app0209";
    static $USERNAME="id8276967_app";
    static $PASSWORD="ramesh@007";

    //STATEMENTS
    static $SQL_SELECT_ALL="SELECT * FROM tbl_drupal_interview_questions";
}

class Spacecrafts
{
    /*Let's create a connect method, It has the following roles:
       1.CONNECT TO DATABASE.
       2. RETURN CONNECTION OBJECT
    */
    public function connect()
    {
        //mysqli is a class that Represents a connection between PHP and a MySQL database.
        $con=new mysqli(Constants::$DB_SERVER,Constants::$USERNAME,Constants::$PASSWORD,
        Constants::$DB_NAME);
        if($con->connect_error)
        {
            return null;
        }else
        {
            return $con;
        }
    }
    /*
    Let's create a seach method. It will
       1.SELECT FROM DATABASE based on a category
    */
    public function search($query)
    {
        //Am filtering using multiple columns
        $sql="SELECT * FROM tbl_drupal_interview_questions WHERE type_of_aks LIKE '%$query%' ORDER BY tbl_aks_id DESC ";

        //To fileter using a single column:
		 //$sql="SELECT * FROM spacecraftsTB WHERE name LIKE '%$query%' ";

        $con=$this->connect();
        if($con != null)
        {
            $result=$con->query($sql);
            if($result->num_rows > 0)
            {
                $spacecrafts=array();
                while($row=$result->fetch_array())
                {
                    //array_push Pushes one or more elements onto the end of array
                    array_push($spacecrafts, array("aks_description"=>$row['aks_description'],
                    "windows_linux"=>$row['windows_linux'],"mac"=>$row['mac']));
                }
                //json_encode Returns the JSON representation of a value
                print(json_encode(array_reverse($spacecrafts)));
            }else
            {
                print(json_encode(array("No item Found that matches the query: ".$query)));
            }
            $con->close();

        }else{
            print(json_encode(array("PHP EXCEPTION : CAN'T CONNECT TO MYSQL. NULL CONNECTION.")));
        }
    }
    /**
     * Let's create a method to handle incoming requests
     */
    public function handleRequest() {
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //get category
            $query=$_POST['query'];
            //return data based on that category
            $this->search($query);
        } else{
            //return all categories
            $this->search("");
        }

    }
}
$spacecrafts=new Spacecrafts();
$spacecrafts->handleRequest();
//end






























































































