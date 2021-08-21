<?php include("config.php"); ?>

<?php 


function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}


//To check exisiting registration id
function CheckExistRegistrationId($reg_id){
       global $ConnectingDB;
      $sql = "SELECT registration_id FROM registration WHERE registration_id	= :EmaIl";
      $stmt = $ConnectingDB->prepare($sql);
      $stmt->bindValue(':EmaIl',$reg_id);
      $stmt->execute();
      $Result = $stmt->rowCount();
      if ($Result==1) {
            return true;
      }else{
            return false;
          }
      }

//To check exisiting registration email
function CheckExistStudent($email){
 global $ConnectingDB;
$sql = "SELECT email FROM registration WHERE email = :EmaIl";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':EmaIl',$email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
      return true;
}else{
      return false;
    }
}


//To check exisiting registration txnnno
function CheckExistTxnId($txnno){
       global $ConnectingDB;
      $sql = "SELECT txnno FROM txn_details WHERE txnno = :EmaIl";
      $stmt = $ConnectingDB->prepare($sql);
      $stmt->bindValue(':EmaIl',$txnno);
      $stmt->execute();
      $Result = $stmt->rowCount();
      if ($Result==1) {
            return true;
      }else{
            return false;
          }
      }


// Function for User Login from ichec admin 
function Login_AttamptAddf($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM  login WHERE username =:UserName AND password =:Password LIMIT 1";
            $stmt = $ConnectingDB->prepare($sql);
            $stmt->bindValue(':UserName',$User);
            $stmt->bindValue(':Password',$Pass);
            $stmt->execute();
            $Result = $stmt->rowcount();
            if ($Result==1) {
                  return $Found_Account=$stmt->fetch();
            }else{
                  return null;
            }
}




// Total registeration 
function Totalregisteration(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   registration  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total txn ids
function TotalregisterationtxnIds(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   txn_details  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total submitted abstract_reg
function TotalSubmitAbstract(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   abstract_reg  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total visitors count
function TotalVisitorCount(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   visitor_count  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}


// Total category
function TotalCategory(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   post_cat  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added slide images
function TotalSlideImages(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   slide_img  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added upcomming Events
function TotalUpEvents(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   upcomming_events ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added Students corner posts
function TotalStudentCorner(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   student_corner  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}



// Total added heighlights posts
function TotalHeighlights(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   heighlights  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added News posts
function TotalNewsPosts(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM  news  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added image gallery
function TotalImageGallery(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   img_gallery  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}

// Total added emails by team members
function TotalProductEmails(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   email_ids  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}


?>