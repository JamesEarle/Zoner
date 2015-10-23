@extends('app')

@section('body-tag')

@stop

@section('content')

{{-- Include the Queries for DB access --}}
<?php include_once(app_path()."/queries.php"); ?>

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Property Listing</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <div class="row">
            <!-- Results -->
            <div class="col-md-9 col-sm-9">
                <section id="results">
                    <header><h1>Properties Listing</h1></header>
                    <section id="search-filter">
                        <figure><h3><i class="fa fa-search"></i>Search Results:</h3>
                            <span class="search-count">28</span>
                            <div class="sorting">
                                <div class="form-group">
                                    <select name="sorting">
                                        <option value="">Sort By</option>
                                        <option value="1">Lowest price first</option>
                                        <option value="2">Highest price first</option>
                                        <option value="3">Date added</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div>
                        </figure>
                    </section>
                    <?php 
                        $results = DB::select(constant('ALL_PROPERTIES'));

                        foreach($results as $row) {
                    ?>  
                    <section id="properties" class="display-lines">
                        <div class="property">
                            <?php
                                $img_dir = scandir($row->image);
                                // Always start at index 2, indices 0,1 are reserved for '.' and '..'
                                $img = $row->image . '/' . $img_dir[2];
                            ?>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <?php echo '<img alt="" src="' . $img . '">'; ?>
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3><?php echo stripslashes($row->address); ?></h3></a>
                                    <figure><?php echo stripslashes($row->city) . ', ' . stripslashes($row->province); ?></figure>
                                </header>
                                <div class="tag price">$ <?php echo $row->price; ?></div>
                                <aside>
                                    <p><?php 
                                            $desc = stripslashes($row->description);
                                            if(strlen($desc) > 150) {
                                                echo substr($desc, 0, 170) . '...';
                                            } else {
                                                echo $desc;
                                            }
                                        ?>
                                    </p>
                                    <dl>
                                        <dt>Area:</dt>
                                            <dd><?php echo $row->area; ?>ft<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                            <dd><?php echo $row->rooms; ?></dd>
                                        <dt>Baths:</dt>
                                            <dd><?php echo $row->baths; ?></dd>
                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <?php } // This ends the foreach loop ?>
                        <div class="property">
                            <figure class="type" title="House Boat"><img src="{{ asset('/img/property-types/houseboat.png') }}" alt=""></figure>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <img alt="" src="{{ asset('/img/properties/property-03.jpg') }}">
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3>987 Cantebury Drive</h3></a>
                                    <figure>Golden Valley, MN 55427</figure>
                                </header>
                                <div class="tag price">$ 38,000</div>
                                <aside>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                                    </p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>Sale</dd>
                                        <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>

                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <div class="property no-border">
                            <figure class="type" title="Single Family"><img src="{{ asset('/img/property-types/single-family.png') }}" alt=""></figure>
                            <figure class="tag status">For Rent</figure>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <img alt="" src="{{ asset('/img/properties/property-02.jpg') }}">
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3>2479 Murphy Court</h3></a>
                                    <figure>Minneapolis, MN 55402 </figure>
                                </header>
                                <div class="tag price">$ 100,000</div>
                                <aside>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                                    </p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>Sale</dd>
                                        <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>

                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->

                        <section id="advertising">
                            <a href="{{ URL('submit') }}">
                                <div class="banner">
                                    <div class="wrapper">
                                        <span class="title">Do you want your property to be listed here?</span>
                                        <span class="submit">Submit it now! <i class="fa fa-plus-square"></i></span>
                                    </div>
                                </div><!-- /.banner-->
                            </a>
                        </section><!-- /#adveritsing-->

                        <div class="property">
                            <figure class="tag status">For Sale</figure>
                            <figure class="type" title="Garage"><img src="{{ asset('/img/property-types/garage.png') }}" alt=""></figure>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <img alt="" src="{{ asset('/img/properties/property-05.jpg') }}">
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3>3542 Bryan Street</h3></a>
                                    <figure>Lexington, NC 27292 </figure>
                                </header>
                                <div class="tag price">$ 75,000</div>
                                <aside>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                                    </p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>Sale</dd>
                                        <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>
                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <div class="property">
                            <figure class="tag status">For Sale</figure>
                            <figure class="type" title="Apartment"><img src="{{ asset('/img/property-types/apartment.png') }}" alt=""></figure>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <img alt="" src="{{ asset('/img/properties/property-06.jpg') }}">
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3>2186 Rinehart Road</h3></a>
                                    <figure>Doral, FL 33178</figure>
                                </header>
                                <div class="tag price">$ 238,000</div>
                                <aside>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                                    </p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>Sale</dd>
                                        <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>
                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <div class="property">
                            <figure class="type" title="Villa"><img src="{{ asset('/img/property-types/villa.png') }}" alt=""></figure>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <img alt="" src="{{ asset('/img/properties/property-08.jpg') }}">
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3>1949 Tennessee Avenue</h3></a>
                                    <figure>Westland, MI 48185 </figure>
                                </header>
                                <div class="tag price">$ 38,000</div>
                                <aside>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum,
                                        bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt...
                                    </p>
                                    <dl>
                                        <dt>Status:</dt>
                                        <dd>Sale</dd>
                                        <dt>Area:</dt>
                                        <dd>860 m<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                        <dd>3</dd>
                                        <dt>Baths:</dt>
                                        <dd>2</dd>

                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->

                        <!-- Pagination -->
                        <div class="center">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul><!-- /.pagination-->
                        </div><!-- /.center-->
                    </section><!-- /#properties-->
                </section><!-- /#results -->
            </div><!-- /.col-md-9 -->
            <!-- end Results -->

            @include('sidebar-search')

        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

@endsection