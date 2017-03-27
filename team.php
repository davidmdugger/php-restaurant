<?php include('includes/header.php'); ?>

<div id="team-members" class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2>Dugger's Deli Team Members</h2>
            <p>We make the best sandwhiches this side of the Missouri River. Once you try our signature PB&J, you'll be wondering why the world hasn't discovered Dugger's Deli.</p>
        </div>
    </div>
    <div class="row">
        <?php
            foreach($teamMembers as $member){
        ?>
        <div class="col-xs-6 col-sm-4">
            <img src="css/img/<?php echo $member['img']; ?>.png" alt="<?php echo $member['name']; ?>" />
            <h4><?php echo $member['name']; ?></h4>
            <p><?php echo $member['bio']; ?></p>
        </div>
           <?php
                }
           ?>
    </div>
</div>

<?php include('includes/footer.php'); ?>
