    
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlfaus.herokuapp.com/rssf.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("music");
?>

<h1>IZ*ONE PROFILE</h1>

<?php
 foreach( $content as $data ){
     $mus_title = $data->getElementsByTagName("Stage_Name")->item(0)->nodeValue;
     $mus_title = $data->getElementsByTagName("Birth_Name")->item(0)->nodeValue;
     $mus_artist = $data->getElementsByTagName("Birthday")->item(0)->nodeValue;
     $mus_genre = $data->getElementsByTagName("Rank")->item(0)->nodeValue;
     $mus_writer = $data->getElementsByTagName("Position")->item(0)->nodeValue;
     echo "<ul>
            <h2>$Stage_Name</h2>
              <ul>
                  <li>Birth_Name: $Birth_Name </li>
                  <li>Birthday: $Birthday </li>
                  <li>Rank:$Rank </li>
                  <li>Position: $Position</li>
              </ul>
          </ul>";
 }
?>
