 <?php 
     require_once __DIR__ . '/../database/dbConnection.php';
   

    function reserveData(){
     $title= trim(htmlspecialchars(htmlentities($_POST['title'])));
     $is_completed= trim(htmlspecialchars(htmlentities($_POST['is_completed'])));    
     return [$title,$is_completed];
    }

     function insertData($conn,$title,$is_completed){
          $sql="INSERT INTO `tasks`(`title`,`is_completed`) VALUES ('$title','$is_completed')";
          $result = mysqli_query($conn,$sql);
          return $result;
     }
     function selectData($conn){
          $sql = "SELECT * FROM `tasks`";
          $result = mysqli_query($conn,$sql);
          $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
          return $rows;
     }

     function selectForSearch($conn,$id){
        $sql="SELECT * FROM `tasks` WHERE `id` = $id";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
          return mysqli_fetch_assoc($result); 
        }else{
            return false;
        }
     }

     function deleteData($conn, $id){

          $sql = "DELETE FROM `tasks` WHERE `id` = $id";
          $result = mysqli_query($conn,$sql);
          return $result;
     }

 

     function updateDate($conn,$id ,$title,$is_completed){
        $sql = "UPDATE `tasks` SET `title`='$title',`is_completed`='$is_completed' WHERE `id` = $id";
        $result = mysqli_query($conn,$sql);
        return $result;
     }