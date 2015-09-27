<!-- sidebar -->

{{-- Used for all DB queries as constants  --}}
<?php include_once(app_path()."/queries.php") ?>

<div class="col-md-3 col-sm-3">
    <section id="sidebar">
        <aside id="edit-search">
            <header><h3>Search Properties</h3></header>
            <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                <div class="form-group">
                    <select name="type">
                        <option value="">Status</option>
                        <option value="1">Rent</option>
                        <option value="2">Sale</option>
                    </select>
                </div><!-- /.form-group -->
                <div class="form-group">
                    <select name="city">
                        <option value="">City</option>
                        <?php 
                            $results = DB::select(constant('ALL_LOCATIONS'));
                            $ctr = 1;
                            foreach($results as $data) {
                                echo "<option value=\"$ctr\">" . $data->city . "</option>";
                                $ctr++;
                            }
                        ?>
                    </select>
                </div><!-- /.form-group -->
                <div class="form-group">
                    <select name="property-type">
                        <option value="">Property Type</option>
                        <option value="1">Apartment</option>
                        <option value="2">Condominium</option>
                        <option value="5">House</option>
                    </select>
                </div><!-- /.form-group -->
                <div class="form-group">
                    <div class="price-range">
                        <input id="price-input" type="text" name="price" value="1000;299000">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Search Now</button>
                </div><!-- /.form-group -->
            </form><!-- /#form-map -->
        </aside><!-- /#edit-search -->
    </section><!-- /#sidebar -->
</div><!-- /.col-md-3 -->
<!-- end Sidebar -->