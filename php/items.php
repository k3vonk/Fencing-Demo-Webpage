<?php
                    $sql = "select * from items;";
                    $results = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($results)){
                        if($row['id']%3 == 1){
                            echo "<div class='column big'>";
                        }else if($row['id']%3==2){
                            echo "<div class='column medium'>
                                    <div class='top'>";
                        }else{
                            echo "<div class='bottom'>";
                        }

                        echo "<a href=''><img src='".$row['img']."' alt='".$row['name']."'></a>";
                        echo "<h6>".$row['name']." - $".$row['price']."</h6>";

                        if($row['id']%3 == 1){
                            echo "</div>";
                        }else if($row['id']%3==2){
                            echo "</div>";
                        }else if($row['id']%3==0){
                            echo "</div></div>";
                        }
                    }
?>