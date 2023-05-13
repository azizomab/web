<?php
include '../config.php';
include '../Model/user.php';

class userc
{
    
    function adduser($user)
    {   
        $sql = "INSERT INTO user (username,email,pwd,dob,type)
        VALUES (:ln,:ad,:fn,:dob,'fan')";
        $db = config::getConnexion();
        try {
            print_r($user->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $user->getpwd(),
                'ln' => $user->getusername(),
                'ad' => $user->getadress(),
                'dob' => $user->getDob()->format('Y/m/d')
            ]);

        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            echo '<br>line:' .$e->getLine();
            echo '<br>file:' .$e->getfile();
        exit;
        }
    }
    function addadmin($user)
    {   
        $sql = "INSERT INTO user (username,email,pwd,dob,type)
        VALUES (:ln,:ad,:fn,:dob,'admin')";
        $db = config::getConnexion();
        try {
            print_r($user->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $user->getpwd(),
                'ln' => $user->getusername(),
                'ad' => $user->getadress(),
                'dob' => $user->getDob()->format('Y/m/d')
            ]);

        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            echo '<br>line:' .$e->getLine();
            echo '<br>file:' .$e->getfile();
        exit;
        }
    }
    function addartist($user)
    {   
        $sql = "INSERT INTO user (username,email,pwd,dob,type)
        VALUES (:ln,:ad,:fn,:dob,'artist')";
        $db = config::getConnexion();
        try {
            print_r($user->getDob()->format('Y-m-d'));
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $user->getpwd(),
                'ln' => $user->getusername(),
                'ad' => $user->getadress(),
                'dob' => $user->getDob()->format('Y/m/d')
            ]);

        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
            echo '<br>line:' .$e->getLine();
            echo '<br>file:' .$e->getfile();
        exit;
        }
    }

     public function listusers()
     {
         $sql = "SELECT * FROM user";
         $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
             return $liste;
         } catch (Exception $e) {
             die('Error:' . $e->getMessage());
         }
     }

     function deleteuser($id)
     {
         $sql = "DELETE FROM user WHERE iduser = :id";
         $db = config::getConnexion();
         $req = $db->prepare($sql);
         $req->bindValue(':id', $id);

         try {
             $req->execute();
         } catch (Exception $e) {
            die('Error:' . $e->getMessage());
         }
     }


    function updateuser($userc,$id)
     {  echo $id,"\n" ;
        echo $userc->getpwd(),"\n"  ;
        echo $userc->getusername(),"\n"  ;
        echo $userc->getadress(),"\n"  ;
        echo  $userc->getDob()->format('Y/m/d') ;
         try {
             $db = config::getConnexion();
             $query = $db->prepare(
                 'UPDATE user SET 
                      pwd = :pwd, 
                      username = :username, 
                      email = :email, 
                      dob = :dob
                 WHERE iduser= :iduser'
             );
              $query->execute([
                'iduser'=> $id,
                 'pwd' => $userc->getpwd(),
                'username' =>$userc->getusername(),
                 'email' => $userc->getadress(),
                  'dob' => $userc->getDob()->format('Y/m/d')
              ]);
              echo $query->rowCount() . " records UPDATED successfully <br>";
          } catch (PDOException $e) {
             echo 'Error: ' . $e->getMessage();
             echo '<br>line:' .$e->getLine();
             echo '<br>file:' .$e->getfile();
         }
     }

      function showuser($id)
      {
          $sql = "SELECT * from user where iduser = :id";
          $db = config::getConnexion();
          try {
             $query = $db->prepare($sql);
              $query->execute([
           'id'=>$id
          ]);

            $userc = $query->fetch();
             return $userc;
          } catch (Exception $e) {
             die('Error: ' . $e->getMessage());
        }
      }
      function getid($email)
      {
          $sql = "SELECT iduser from user where email = :email";
          $db = config::getConnexion();
          try {
             $query = $db->prepare($sql);
              $query->execute([
           'email'=>$email
          ]);
            if(!$query->rowCount()==0){
           $userc = $query->fetch();
            
             return $userc['iduser'];
            }else echo "invalid email" ; 

          } catch (Exception $e) {
             die('Error: ' . $e->getMessage());
        }
      }

     function login($password,$adress)
     {
         $sql = "SELECT iduser,type,pwd from user where email =:email  ";
         $db = config::getConnexion();
         try {
             $query = $db->prepare($sql);
             $query->execute([
                'email' => $adress ,
             ]);
             $userid = $query->fetch();
             if ($query->rowCount()==0 ) {
                echo "<script>alert('not a valid email') ; ";
             }else {
                if (password_verify($password,$userid['pwd']) ){
                echo "<script> alert('your account is correct');</script>" ;
                return $userid ; 
            } else  {
                echo "<script> alert('wrong password');</script>";
                
            }
            }
         } catch (Exception $e) {
             die('Error: ' . $e->getMessage());
        }
     }
}


