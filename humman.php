<!DOCTYPE html>
<html>
    <body>
        <?php
            $extract = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum imperdiet aliquet. Duis non molestie orci. Ut eget nibh nec augue ultricies porttitor.';
            $characters = count_chars($extract, 1);            
            asort($characters);
            foreach($characters as $character => $occurrence)
            {
               echo 'There';
               if($occurrence > 1)
               {
                   echo ' were ' . $occurrence . ' occurrences of ';
               }
               else
               {
                   echo ' was '. $occurrence . ' occurrence of ';
               }
               echo '"<strong>' . chr($character) . '</strong>" in the extract.<br />';
               $characterFreq[chr($character)] = $occurrence;              
            }
            print_r($characterFreq);
        ?>
    </body>
</html>