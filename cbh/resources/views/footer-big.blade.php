<footer id="page-footer">
    <div class="inner">
        <aside id="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <article>
                            <h3>About Us</h3>
                            <p>
                                Cross border housing enhances and simplifies the off campus living experience for incoming international students. We provide quality guaranteed listings with customizable amenities, discounts at local hot-spots, and ongoing support the entire way.
                            </p>
                            <hr>
                            <a href="{{ URL('about') }}" class="link-arrow">Read More</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class="col-md-3 col-sm-3">
                        <article>

                            <?php include_once(app_path()."/queries.php"); ?>

                            <?php
                                $results = DB::select(constant("PROPERTIES_BY_DATE_DESC"));

                                if (count($results) < 2) die("Lacking sufficient properties");
                            ?>

                            <h3>Recent Properties</h3>
                            <div class="property small">
                                <a href="{{ URL('property-detail') }}">
                                    <div class="property-image">
                                        <?php 
                                            $img = $results[0]->{'featured-image'};
                                            echo "<img alt=\"\" src=\"$img\" />";
                                        ?>
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="{{ URL('property-detail') }}"><h4><?php echo $results[0]->address ?></h4></a>
                                    <figure><?php echo $results[0]->city, " ", $results[0]->province; ?></figure>
                                    <div class="tag price">$<?php echo $results[0]->price; ?></div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="{{ URL('property-detail') }}">
                                    <div class="property-image">
                                        <?php 
                                            $img = $results[1]->{'featured-image'};
                                            echo "<img alt=\"\" src=\"$img\" />";
                                        ?>
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="{{ URL('property-detail') }}"><h4><?php echo $results[1]->address ?></h4></a>
                                    <figure><?php echo $results[0]->city, " ", $results[1]->province; ?></figure>
                                    <div class="tag price">$<?php echo $results[1]->price; ?></div>
                                </div>
                            </div><!-- /.property -->
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class="col-md-3 col-sm-3">
                        <article>
                            <h3>Contact</h3>
                            <address>
                                <strong>Cross Border Housing Inc.</strong>
                                <br>
                                500 Glenridge Ave.
                                <br>
                                St. Catharines, ON L2S 3A1
                            </address>
                            +1 (647) 404-3067
                            <br>
                            <a href="mailto:requests@cbhousing.ca">requests&#64;cbhousing.ca</a>
                        </article>
                    </div><!-- /.col-sm-3 -->
                    <div class="col-md-3 col-sm-3">
                        <article>
                            <h3>Useful Links</h3>
                            <ul class="list-unstyled list-links">
                                <li><a href="{{ URL('/list-lines')}}">All Properties</a></li>
                                <li><a href="{{ URL('/faq')}}">FAQ</a></li>
                                <li><a href="{{ asset('/tos.pdf')}}">Terms and Conditions</a></li>
                            </ul>
                        </article>
                    </div><!-- /.col-sm-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </aside><!-- /#footer-main -->
        
    </div><!-- /.inner -->
</footer>
<!-- end Page Footer -->