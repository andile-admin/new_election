<?php
/*
Template Name: Stats
*/
get_header(); ?>

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
                                    //$total = mysql_query("SELECT SUM(votecount) AS total_count FROM wp_colorcounter");
                                    //$row = mysql_fetch_assoc($total); 
                                    //$sum = $row['total_count'];
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
                                        $percentage = mysql_query("SELECT partyname,((votecount * 100) / (SELECT MAX( votecount ) FROM wp_colorcounter )) FROM wp_colorcounter AS perc");
                                        while ($row1 = mysql_fetch_array($percentage)) {
                                            if($row['partyname']==$row1[0]){
                                                $perc_row = $row1[1];
                                            }
                                        }
                                        echo '<td class="voting-percentage">' . $perc_row . ' %</td>';
                                        echo '<td class="voting-percentage-image"><img src="'.$site_link . '/wp-content/themes/twentytwelve/images/11-20.png"/></td>';
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