<?php include("config.php"); ?>

<?php 


function Redirect_to($New_location){
	header("Location:".$New_location);
	exit();
}




//To check exisiting student
function CheckExistStudent($Email){
 global $ConnectingDB;
$sql = "SELECT email FROM students WHERE email = :EmaIl";
$stmt = $ConnectingDB->prepare($sql);
$stmt->bindValue(':EmaIl',$Email);
$stmt->execute();
$Result = $stmt->rowCount();
if ($Result==1) {
      return true;
}else{
      return false;
    }
}



// Function for User Login from prabhat admin Main
function Login_AttamptP($User,$Pass){

            global $ConnectingDB;
            $sql = "SELECT * FROM   admin_login WHERE username=:UserName AND password =:Password LIMIT 1";
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


// Total registered students
function TotalStudents(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   students  ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total registered students B.Tech
function TotalStudentsBTech(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   students where course = 'B.Tech' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total registered students M.Tech
function TotalStudentsMTech(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   students where  course = 'M.Tech' ";
                        $stmt = $ConnectingDB->query($sql);
                        $TotalRows = $stmt->fetch();
                        $TotalCart = array_shift($TotalRows);
                        echo $TotalCart;
}
// Total registered students PhD
function TotalStudentsPhD(){ 
       global $ConnectingDB;
                        $sql = "SELECT COUNT(*) FROM   students where  course = 'PhD' ";
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