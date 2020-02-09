    
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://kaysierdelosyres.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("izone");
?>

<h1>IZ*ONE PROFILE</h1>

<?php
 foreach( $content as $data ){
     $Stage_Name = $data->getElementsByTagName("Stage_Name")->item(0)->nodeValue;
     $Rank = $data->getElementsByTagName("Rank")->item(0)->nodeValue;
     $Birth_Name = $data->getElementsByTagName("Birth_Name")->item(0)->nodeValue;
     $Birthday = $data->getElementsByTagName("Birthday")->item(0)->nodeValue;
     $Position = $data->getElementsByTagName("Position")->item(0)->nodeValue;
     echo "<ul>
            <h2>$Stage_Name</h2>
              <ul>
                  <li>Rank: $Rank</li>
                  <li>Birth_Name: $Birth_Name </li>
                  <li>Birthday:$Birthday </li>
                  <li>Position: $Position</li>
              </ul>
          </ul>";
 }
?>
