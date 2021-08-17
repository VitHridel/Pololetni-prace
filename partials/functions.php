<?php 
function item_selected($item) {
    if ($item == basename($_SERVER['SCRIPT_NAME'])) {
        return 'class="selected"';
    }
}

?>