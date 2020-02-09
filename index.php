    
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlfaus.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("profile");
?>

<h1>IZ*ONE PROFILE</h1>

<?php
 foreach( $content as $data ){
     $mus_title = $data->getElementsByTagName("Stage_Name")->item(0)->nodeValue;
     $mus_title = $data->getElementsByTagName("Rank")->item(0)->nodeValue;
     $mus_artist = $data->getElementsByTagName("Birth_Name")->item(0)->nodeValue;
     $mus_genre = $data->getElementsByTagName("Birthday")->item(0)->nodeValue;
     $mus_writer = $data->getElementsByTagName("Position")->item(0)->nodeValue;
     echo "<ul>
            <h2>$Stage_Name</h2>
              <ul>
                  <li>Birth_Name: $Rank</li>
                  <li>Birthday: $Birth_Name </li>
                  <li>Rank:$Birthday </li>
                  <li>Position: $Position</li>
              </ul>
          </ul>";
 }
?>
