<?php

function uiSelectSemantic($idname, $items, $clases = '')
{
    echo '<select id="'.$idname.'" class="ui ' . $clases .' dropdown">';
    echo '<option value=""> </option>';
    if (count($items) > 0) {
        for ($i=0; $i < count($items); $i++) {
            echo '<option value="'.$items[$i]->id.'">'.pinta($items[$i]->nombre) .'</option>';
        }
    }
    echo '</select>';
}
