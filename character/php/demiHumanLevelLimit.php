<?php
/*Fighter Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Gnome")
    {
        if($level <= 7)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 7;
        }
    }
   
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}




?>