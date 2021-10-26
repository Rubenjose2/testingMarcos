<?php
        function string($Firts,$Second,$callback)
        {
            $results = 'This is your new name '.$Firts.' '.$Second;
            if(is_callable($callback)){
                call_user_func($callback,$results);
            }
        }

        string('alex','castro',function($name){
            echo $name;
        });

?>