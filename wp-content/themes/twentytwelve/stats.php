<?php
/*
Template Name: Stats
*/
get_header(); ?>

<div id="main" class="wrapper-home">

<div class="title-section">
    <p>»Statistics</p>
</div>

<div class="margin-10"></div>
    
    <div id="primary-container">
    
        <div id="primary1" class="site-content1">
            <div id="content1" role="main">
                <div id = "voting-container">
                    <!--<div id = "voting-p">
                        <span class="voting-headr">Polls</span>
                    </div>-->

                    <div id = "voting-polls">
                            <table class="voting-table">
                                <tr>
                                    <!--<th class="voting-headr">Elections</th>-->
                                </tr>                
                            
                                <?php
                                    /*function percent($numpassed, $numtotal) {
                                        $count1 = $numpassed / $numtotal;
                                        $count2 = $count1 * 100;
                                        $count = number_format($count2, 0);
                                        echo $count;
                                    }
                                    */

                                    function demographics($perc_value)
                                    {
                                        $link_url = get_bloginfo('url');

                                        if($perc_value < 10)
                                        {
                                            $value = '<img src="'. $link_url . '/wp-content/themes/twentytwelve/images/0-10.png"/>';
                                        }
                                        else if($perc_value > 10 && $perc_value <= 20)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/11-20.png"/>'; 
                                        }
                                         else if($perc_value > 20 && $perc_value <= 30)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/21-30.png"/>'; 
                                        }
                                         else if($perc_value > 30 && $perc_value <= 40)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/31-40.png"/>'; 
                                        }
                                         else if($perc_value > 40 && $perc_value <= 50)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/41-50.png"/>'; 
                                        }
                                         else if($perc_value > 50 && $perc_value <= 60)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/51-60.png"/>'; 
                                        }
                                         else if($perc_value > 60 && $perc_value <= 70)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/61-70.png"/>'; 
                                        }
                                         else if($perc_value > 70 && $perc_value <= 80)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/71-80.png"/>'; 
                                        }
                                         else if($perc_value > 80 && $perc_value <= 90)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/81-90.png"/>'; 
                                        }
                                        else if($perc_value > 90 && $perc_value <= 100)
                                        {
                                            $value = '<img src="'.$link_url . '/wp-content/themes/twentytwelve/images/91-100.png"/>'; 
                                        }

                                        return $value;
                                    }

                                    function doublemax($mylist){ 
                                      $maxvalue=max($mylist); 
                                      while(list($key,$value)=each($mylist)){ 
                                        if($value==$maxvalue)$maxindex=$key; 
                                      } 
                                      return array("m"=>$maxvalue,"i"=>$maxindex); 
                                    } 

                                    $total = mysql_query("SELECT SUM(votecount) AS total_count FROM wp_colorcounter");
                                    $row = mysql_fetch_assoc($total); 
                                    $sum = $row['total_count'];
                                    //var_dump($sum);
                                    

                                    //print_r($perc_rows);
                                    //print_r($perc_rows);
                                    //echo '<pre>';
                                    //print_r($perc_rows);
                                    //echo '</pre>';
                                    $site_link = get_bloginfo( 'url' );
                                    $i = 1;
                                    $rs = mysql_query("SELECT * FROM wp_colorcounter ORDER by votecount DESC") or die ('Cannot process SQL count totals query');
                                    while ($row = mysql_fetch_assoc($rs)) {
                                        echo '<tr class="voting-r">';
                                        echo '<td class="voting-num">' . $i . '. </td>';
                                        echo '<td class="voting-img"> <img src="' . $site_link . '/' . $row['images_path'] .'"/></td>';
                                        echo '<td class="voting-p">' . $row['partyname'] . '</td>';
                                        echo '<td class="voting-v">' . $row['votecount'] . ' <span style="">votes</span></td>';
                                        //$vote = $row['votecount'];
                                        //$percent = percent($row['votecount'], $sum);
                                        //$percentage = mysql_query("SELECT partyname,((votecount * 100) / (SELECT MAX( votecount ) FROM wp_colorcounter )) FROM wp_colorcounter AS perc");
                                        /*while ($row1 = mysql_fetch_array($percentage)) {
                                            if($row['partyname']==$row1[0]){
                                                $perc_row = $row1[1];
                                            }
                                        }
                                        */
                                        $the_perc = $row['votecount'] / $sum * 100;
                                        $final_perc = number_format($the_perc, 2);
                                        $array  = array($final_perc);
                                        $maximum_num = doublemax($array);
                                        //var_dump($maximum_num);
                                        foreach ($array as $key => $value) {
                                          $result[$key] = $value['m'];
                                        }
                                        $max = max($result);
                                        //echo '<pre>';
                                         //   echo $max;
                                        //echo '</pre>';
                                        //$max_value = max($array);
                                        //var_dump($max_value);

                                        $demogr = demographics($final_perc);

                                        //var_dump($demo);
                                        $check=0;
                                        if($check<1){
                                            echo '<td class="leader-image"><img src="'.$site_link. '/' . $row['stats_images'] .'" /></td>';
                                            $check++;
                                        }else{}
                                        echo '<td class="voting-percentage-image">' .$demogr. '</td>';
                                        echo '<td class="voting-percentage">0 - ' . $final_perc . ' %</td>';
                                        echo '</tr>';
                                        $i++;
                                    }
                                ?>
                            </table>
                    </div><!--voting container-->
                </div><!--voting container-->

            </div><!-- #content -->
        </div><!-- #primary -->

        <?php //get_sidebar(); ?>
    </div>
<?php get_footer(); ?>