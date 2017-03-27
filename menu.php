<?php
    include('includes/header.php');
?>

    <div class="container">
        <div id="menu-info" class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Dugger's Delicious Menu</h2>
                <p>Like our team, our menu is small but it sure does pack powerful flavor to punctuate your palate. It's Perfect!</p>
                <p><em>Click on a menu itime to learn more about it.</em></p>
                
                <hr>
                
                <ul>
                    <?php
                        foreach($menuItems as $dish => $item){ ?>
                        
                    <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item['title']; ?></a> $<?php echo $item['price']; ?></li>
                    
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>


<?php include('includes/footer.php'); ?>
