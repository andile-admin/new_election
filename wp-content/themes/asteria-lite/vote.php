<?php
/*
Template Name: Vote
*/
?>
<?php global $asteria;?>
<?php get_header(); ?>

<div class="title-section">
    <p><?php wp_title();?></p>
</div>

<div class="margin-10"></div>

<div class="video-container">

    <div class="follow-text">
        <p>
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
        </p>
    </div>

    <div id = "containter-one">
        <table class="voting-containter" style="border:1px solid black;">
            <tbody>
                <tr>
                    <td class="party-name">African National Congress</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/manifestoes-anc_03.png"/></td><td class="party-short-name">ANC</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/zuma-manifestoes_05.png"/></td><td class="voting"><input type="radio" name="test" id="ANC" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Agang SA</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/agang-logo.jpg"/></td><td class="party-short-name">AGANG</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/agang-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="AGANG" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Economic Freedom Fighters</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/EFF-logo.jpg"/></td><td class="party-short-name">EFF</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/EFF-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="EFF" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Democratic Alliance</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/DA-logo.jpg"/></td><td class="party-short-name">DA</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/DA-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="DA" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Mo Flava</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/mo-logo.jpg"/></td><td class="party-short-name">MO</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MoFlava-e1387373085642.jpg"/></td><td class="voting"><input type="radio" name="test" id="MO" onclick="confirmParty(this)";/></td>
                </tr>

                <tr>
                    <td class="party-name">Inkatha Freedom Party</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/IFP-logo.jpg"/></td><td class="party-short-name">IFP</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/IFP-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="IFP" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Congress of the People</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/cope-logo.jpg"/></td><td class="party-short-name">COPE</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/cope-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="COPE" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">United Democratic Movement</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/UDM-logo.jpg"/></td><td class="party-short-name">UDM</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/UDM-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="UDM" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Minority Front</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MF-logo.jpg"/></td><td class="party-short-name">MF</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/MF-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="MF" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Azanian People Organization</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Azapo-logo.jpg"/></td><td class="party-short-name">AZAPO</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Azapo-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="AZAPO" onclick="confirmParty(this)";/></td>
                </tr>

                <tr>
                    <td class="party-name">Pan Africanist Congress of Azania</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/PAC-logo.jpg"/></td><td class="party-short-name">PAC</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/PAC-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="PAC" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">African Christian Democratic Party</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/ACDP-logo.jpg"/></td><td class="party-short-name">ACDP</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/ACDP-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="ACDP" onclick="confirmParty(this)";/></td>
                </tr>
                <tr>
                    <td class="party-name">Patriotic Aliance</td><td class="party-image"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Pa-logo.jpg"/></td><td class="party-short-name">PA</td><td class="party-leader"><img src="<?php bloginfo('url');?>/wp-content/uploads/2013/12/Pa-leader.jpg"/></td><td class="voting"><input type="radio" name="test" id="PA" onclick="confirmParty(this)";/></td>
                </tr>
               
            </tbody>
        </table>
    </div>
    
</div>

<div class="margin-10"></div>

<script>
    function confirmParty(control)
    {
        alert("You want to vote for " + control.id + "?");
    }

</script>

<?php get_footer();?>
