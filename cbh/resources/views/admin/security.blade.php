<section>
    <?php

        $trusted = array(
            'alex@cbhousing.ca',
            'cody@cbhousing.ca',
            'j_earle@hotmail.com'
        );

        if(!Auth::check() || !in_array(Auth::user()->email, $trusted)) {
            // Unwanted user, redirect home.
            header("Location: http://");
            die(1);
        }
    ?>
</section>