<?php
    /* News Bar */

    $sql = "select * from news;";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)){
        
        if($row['id'] % 3 == 1 && $row['id'] == 1){
            echo "<div class='carousel-item active'>
                  <div class='row'>";
        }else if($row['id'] % 3 == 1){
            echo "<div class='carousel-item'>
                  <div class='row'>";
        }

        //Image
        echo "  <div class='col-md-4'>
                <div class='card border-info'>
                <img class='card-img-top' src='".$row['imageLocation']."' alt='".$row['imageName']."'>";

        //Card Body
        echo "<div class='card-body'>
              <span class='category'>".$row['topic']."</span>
              <h4 class='card-title'>".$row['title']."</h4>
              <p class='card-text'>".$row['content']."</p>";
        
        //Post Meta
        echo "<div class='post-meta'>
              <span class='author'><i class='fas fa-user' style='margin-right:4px'></i>".$row['author']."</span>
              <span class='time'><i class='far fa-clock' style='margin-right:4px'></i>".$row['date']."</span>
              <div class='clearfix'></div>
              </div>";

        //Link
        echo "<a href='news.php' class='btn btn-outline-danger btn-sm'>Read more...</a>";

        //close tags
        echo "</div></div></div>";
        
        if($row['id'] % 3 == 0){
            echo "</div></div>";
        }
    }

          
?>