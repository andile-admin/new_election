<?php 
        // if this is a postback ...
        if(isset($_POST['party_name'])) {

            echo "<script>
                    if(confirm('Are you sure you want to vote for " . $_POST['party_name'] . "?'))
                        return true;
                    else
                        return false;
                  </script>";
            // create array of acceptable values
            $ok = array('ANC', 'AGANG', 'EFF', 'DA', 'MO','IFP','COPE','UDM','MF','AZAPO','PAC','ACDP', 'PA');
            //if (in_array($_POST['party_name'], $ok)) {
            //    echo "EXIST";
            //}
            //else{
            //    echo "Not there NIgga!";}

            //var_dump($ok);
            //in_array($_POST['partyname'], $ok);
            // if we have an acceptable value for party_name ...
            
            if(in_array($_POST['party_name'], $ok)) {
                // update the counter for that color
                //echo "yo".$_POST['party_name'];
               $q = mysql_query("UPDATE wp_colorcounter SET votecount = votecount + 1 WHERE partyname = '" . $_POST['party_name'] . "'  ");

                $to = "kweyamaandile@gmail.com";
                $name = $_REQUEST['name'] ;
                $answer = $_REQUEST['answer'] ;
                $subject = "RSVP from: $name";
                $number = $_REQUEST['number'] ;
                $headers = "RSVP";
                $body = "From: $name, \n\n I(we) will be attending the event. There will be $number of us. \n\n Thanks for the invite.";
                $sent = mail($to, $subject, $body, $headers) ;
                if($sent)
                {
                    echo
                    "<script>
                        confirm('Thank you for participating!');
                    </script>";
                }
                else
                {
                    echo "<script>
                            confirm('Error sending mail.');
                          </script>";
                }
            }
        }

    ?>