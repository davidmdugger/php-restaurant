<!--    START OF FOOTER   -->
    <div id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <p><strong>Phone</strong></p>
                    <p>402-432-1989</p>
                    <hr>
                </div>
                <div class="col-sm-4">
                    <p><strong>Location</strong></p>
                    <p>123 Main Street</p>
                    <p>Omaha, NE 68131</p>
                    <hr>
                </div>
                <div class="col-sm-4">
                    <p><strong>Hours</strong></p>
                    <p>Monday - Friday:</p> <p>10:00am - 9:00pm</p>
                    <p><span><?php
                    date_default_timezone_set('America/Chicago');
                    echo "Today is " . date('l') . " and it is " . date('h:ia');
                    ?></span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p>&copy;2017 David Dugger - All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>