            <?php
            session_start();
            include "../db/controller.php";

            if($_SERVER["REQUEST_METHOD"] == "POST" )
            {
                $Email = $_POST["email"];
                $Password = $_POST["password"];

                $sql = "SELECT * FROM user WHERE Email ='$Email'";
            $result = mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)==1){
                    $user = mysqli_fetch_assoc($result);
                    if(password_hash($Password,$user['$Password'])){
                        $_SESSION['user_id'] = $user ['ID'];
                        $_SESSION['user_email'] = $user ['Email'];
                        header('Location:../dashboard/dashboard.php');
                        exit();
                    }else {
                        echo "invalid password.";
                    }
                }   else {
                        echo "not found with this email.";    
                }
            }
            ?>