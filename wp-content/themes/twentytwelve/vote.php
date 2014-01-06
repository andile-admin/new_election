<?php /* Template Name: Vote */ ?>
<?php get_header(); ?>
<div id="main" class="wrapper-home">
<div class="title-section">
    <p>
        <?php wp_title();?>
    </p>
</div>

<div class="margin-10"></div>

<div class="vote-container">

    <div class="follow-text">
        <!--<p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia
            animi, id est laborum et dolorum fuga.
        </p>-->
    </div>


    <form id="myform" name="myform">
        <div id="containter-one">
            <table class="voting-containter" style="border:1px solid black;">
                <tbody>
                    <tr>
                        <td valign="middle" class="party-name">African National Congress</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/manifestoes-anc_03.png" />
                        </td>
                        <td valign="middle" class="party-short-name">ANC</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/zuma-manifestoes_05.png" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_anc" name="party_name" party="ANC" />
                           <label for="r_anc" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Agang SA</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/agang-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">AGANG</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/agang-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_agang" name="party_name" party="AGANG" />
                           <label for="r_agang" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Economic Freedom Fighters</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/EFF-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">EFF</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/EFF-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_eff" name="party_name" party="EFF" />
                           <label for="r_eff" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Democratic Alliance</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/DA-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">DA</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/DA-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_da" name="party_name" party="DA" />
                           <label for="r_da" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Mo Flava</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/mo-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">MO</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MoFlava-e1387373085642.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_mo" name="party_name" party="MO" />
                           <label for="r_mo" class="css-label"></label> 
                        </td>
                    </tr>

                    <tr>
                        <td valign="middle" class="party-name">Inkatha Freedom Party</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/IFP-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">IFP</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/IFP-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_ifp" name="party_name" party="IFP" />
                           <label for="r_ifp" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Congress of the People</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/cope-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">COPE</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/cope-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_cope" name="party_name" party="COPE" />
                           <label for="r_cope" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">United Democratic Movement</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/UDM-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">UDM</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/UDM-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_udm" name="party_name" party="UDM" />
                           <label for="r_udm" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Minority Front</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MF-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">MF</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MF-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_mf" name="party_name" party="MF" />
                           <label for="r_mf" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Azanian People Organization</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Azapo-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">AZAPO</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Azapo-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div> <input type="radio" class="radio_voting" id="r_azapo" name="party_name" party="AZAPO" />
                           <label for="r_azapo" class="css-label"></label>
                        </td>
                    </tr>

                    <tr>
                        <td valign="middle" class="party-name">Pan Africanist Congress of Azania</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/PAC-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">PAC</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/PAC-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_pac" name="party_name" party="PAC" />
                           <label for="r_pac" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">African Christian Democratic Party</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/ACDP-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">ACDP</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/ACDP-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_acpd" name="party_name" party="ACDP" />
                           <label for="r_acpd" class="css-label"></label> 
                        </td>
                    </tr>
                    <tr>
                        <td valign="middle" class="party-name">Patriotic Aliance</td>
                        <td valign="middle" class="party-image">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Pa-logo.jpg" />
                        </td>
                        <td valign="middle" class="party-short-name">PA</td>
                        <td valign="middle" class="party-leader">
                            <img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Pa-leader.jpg" />
                        </td>
                        <td valign="middle" class="voting">
                            <div id='show-me' style='display:none'>X</div><input type="radio" class="radio_voting" id="r_pa" name="party_name" party="PA" />
                           <label for="r_pa" class="css-label"></label> 
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </form>



</div>

<div class="margin-10"></div>

<!--<script>
$('#myform').change(function() {
    if ($('#watch-me').attr('checked')) {
        $('#show-me').show();
    } else {
        $('#show-me').hide();
    }
});
</script>-->

<?php get_footer();?>