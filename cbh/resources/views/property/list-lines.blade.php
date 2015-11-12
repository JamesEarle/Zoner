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
    <?php $results = DB::select(constant('ALL_PROPERTIES')); ?>
    <div class="container">
        <div class="row">
            <!-- Results -->
            <div class="col-md-9 col-sm-9">
                <section id="results">
                    <header><h1>Properties Listing</h1></header>
                    <section id="search-filter">
                        <figure><h3><i class="fa fa-search"></i>Search Results:</h3>
                            <span class="search-count"><?php echo count($results); ?></span>
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
                        foreach($results as $row) {
                    ?>  
                    <section id="properties" class="display-lines">
                        <div class="property">
                            <?php
                                $img_dir = scandir($row->image);
                                // Always start at index 2, indices 0,1 are reserved for '.' and '..'

                                $img = $row->{'featured-image'};

                                // Should consider below if we want varying sizes for thumbnails.
                                // $info = getimagesize($img);
                                // $width = $info[0];
                                // $height = $info[1];
                            ?>
                            <div class="property-image">
                                <a href="property-detail.html">
                                    <?php echo '<img alt="" src="' . $img . '">'; ?>
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="property-detail.html"><h3><?php echo stripslashes($row->address); ?></h3></a>
                                    <figure><?php echo stripslashes($row->city) . ', ' . $row->province; ?></figure>
                                </header>
                                <div class="tag price">$ <?php echo $row->price; ?></div>
                                <aside>
                                    <p><?php 
                                            $desc = stripslashes($row->description);
                                            if(strlen($desc) > 150) {
                                                echo substr($desc, 0, 155) . '...';
                                            } else {
                                                while(strlen($desc) < 150) {
                                                    $desc .= "<br>";
                                                }
                                                echo $desc;
                                            }
                                        ?>
                                    </p>
                                    <dl>
                                        <dt>Area:</dt>
                                            <dd><?php echo $row->area; ?> ft<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                            <dd><?php echo $row->rooms; ?></dd>
                                        <dt>Baths:</dt>
                                            <dd><?php echo $row->baths; ?></dd>
                                    </dl>
                                </aside>
                                <a href="property-detail.html" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <?php 
                            } // This ends the foreach loop 
                        ?>

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