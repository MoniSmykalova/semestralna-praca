<?php
include('partials/header.php');
?>
<main>
    <?php
        include('partials/banner.php');
        include('partials/quote.php');
    ?>
    
    <section class="container">
        <?php
            $team = $team->get_team();          //vypise vsetky polozky
            print_r($team);
            for ($i=0;$i<count($team);$i++){
                $temp_i = $i+1;
                if($temp_i%4==1){
                    echo '<div class="row">';
                    echo '<div class="col-25 team text-white textcenter" style = "background-image: url(\''.$team[$i]->image.'\');"'.'>';
                    echo $team[$i]->name;
                    echo '</div>';
                }
                elseif($temp_i%4==0){
                    echo '<div class="col-25 team text-white textcenter" style = "background-image: url(\''.$team[$i]->image.'\');"'.'>';
                    echo $team[$i]->name;
                    echo '</div>';
                    echo '</div>';
                }
                else{
                    echo '<div class="col-25 team text-white textcenter" style = "background-image: url(\''.$team[$i]->image.'\');"'.'>';
                    echo $team[$i]->name;
                    echo '</div>';
                }
                }
        ?>       
    </section>
</main>
<?php
include('partials/footer.php');
?>