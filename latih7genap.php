<html>
    <body>
        <form method=post>
      <table>
        <tr>
            <td>Username</td>
            <td><input type=text name=user></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type=password name=pass></td>
        </tr>
        <tr>
            <td cosplan=2>
            <input type=submit  name=login value="Login">
            <input type=reset name=reset value="Reset">
            </td>
        </tr>
      </table>
        </form>
        <?php
          error_reporting(0);
          include "config.php";
          if ($_POST['login']){
              $user=$_POST ['user'];
              $password =$_POST ['pass'];
              echo "plain text : $password  <br> ";
              $pass=md5($password);
              $sql= "SELECT count(*)  jml FORM admin"
                    WHERE username='$user' AND password='$pass' ";
                mysqli_query($connect,$sql);
                $data=mysqli_fetch_row($hasil)
                if($data [0]>=1){
                echo "berhasil";
            }else {
                echo "username atau password salah";
            }
          }
        ?>
    </body>
</html>      