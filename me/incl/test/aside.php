<nav class="vmenu">
    
    <?php
        // Menyn definierad som en multi-array.
        // Key i huvudarrayen är H4 (rubrik) för delområdet
        // Key i subarrayen är namnet på länken och value i subarrayen är innehållet i p-parametern.
    
        $theMenu = array(
            "Kmom02" => array(
                            "Ändra style på sidan" => "kmom02-pagestyle"
                        ),
            "Kmom03" => array(
                            "Visa <code>\$_GET</code>" => "kmom03-get",
                            "Form med get" => "kmom03-getform",
                            "Form med post" => "kmom03-postform",
                            "Validera inkommande" => "kmom03-validate",
                            "Validera inkommande (2)" => "kmom03-validate2",
                            "Visa <code>\$_SERVER</code>" => "kmom03-server",
                            "Förstör sessionen" => "kmom03-sessiondestroy",
                            "Visa <code>\$_SESSION</code>" => "kmom03-session",
                            "Ändra värden i sessionen" => "kmom03-sessionchange",
                            "Information om sessionen" => "kmom03-sessioninfo",
                            "Kryptera lösen" => "kmom03-create-password"
                        )
        );
    
        $menuId = isset($_GET['p']) ? $_GET['p'] : "";
        
        // Sätter class="highlighted" på menyval för aktuell sida.
        function highlight($str, $menuId) {
            if(strcmp($str, $menuId) == 0) {
                return " class='highlighted'";
            } else {
                return "";
            }
        } 
    ?>
    
  <!-- Skriv ut menyn -->
  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <?php
        foreach ($theMenu as $key => $value) {
            echo "<li><h4>" . $key . "</h4>";
            echo "<ul>";
            foreach ($value as $subkey => $subvalue) {
                echo "<li" . highlight($subvalue, $menuId) . "><a href='?p=" . $subvalue . "'>" . $subkey . "</a>";
            }
            echo "</ul>";
        }
    ?>
  </ul>
  
</nav>