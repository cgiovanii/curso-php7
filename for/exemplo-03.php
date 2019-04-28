<?php

/** for com select combo */

echo "<select>";
for ($i=date("Y"); $i > date("Y")-100 ; $i--) {
    
    echo '<option value="">'. $i .'</option>';
}
echo "</select>";
?>