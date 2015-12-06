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
    <?php 

        if(!isset($search)) {
            // Generic view, show all properties in the database.
            $results = DB::select(constant('ALL_PROPERTIES'));             
        } else {

            $s = $search['search-box-property-id'];

            // We came from a search box somewhere, filter based on search query.
            if(strlen($search['region']) == 0) {
                // No region was specified, look through address or city columns in properties table
                $results = DB::select(constant('PROPERTIES_FILTERED') . " '%$s%' OR `city` LIKE '%$s%'");
            } else {
                // Filter by similarities in the region AND the search query.
                $results = DB::select(constant('PROPERTIES_FILTERED') . " '%$s%' AND `city` LIKE '%" . $search['region'] . "%'");
            }
        }
    ?>
    <div class="container">
        <div class="row">
            <!-- Results -->
            <div class="col-md-9 col-sm-9">
                <section id="results">
                    <header><h1>Properties Listing</h1></header>
                    <section id="search-filter">
                        <figure><h3><i class="fa fa-search"></i>Search Results:</h3>
                            <span class="search-count">{!! count($results); !!}</span>
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
                        if(count($results) == 0 && isset($search)) {
                            ?>
                                <section id="properties" class="display-lines">
                                    <h2 class="error">Whoops! We couldn't find anything for "<?php echo $s ?>". <a href="{{ URL('/') }}">Try again?</a></h2>
                                </section>
                            <?php
                        } else {
                            foreach($results as $row) {
                    ?>  
                    <section id="properties" class="display-lines">
                        <div class="property">
                            <?php
                                $img = $row->{'featured-image'};
                                $id = $row->id;
                            ?>
                            <div class="property-image">
                                <a href="{{ URL('detail', array('id' => $id)) }}">
                                    {!! '<img alt="" src="' . $img . '">' !!}
                                </a>
                            </div>
                            <div class="info">
                                <header>
                                    <a href="{{ URL('detail', array('id' => $id)) }}"><h3>{!! stripslashes($row->address) !!}</h3></a>
                                    <figure>{!! stripslashes($row->city) . ', ' . $row->province !!}</figure>
                                </header>
                                <div class="tag price">${!! $row->price !!}</div>
                                <aside>
                                    <p>
                                        <?php 
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
                                            <dd>{!! $row->area !!} ft<sup>2</sup></dd>
                                        <dt>Beds:</dt>
                                            <dd>{!! $row->rooms !!}</dd>
                                        <dt>Baths:</dt>
                                            <dd>{!! $row->baths !!}</dd>
                                    </dl>
                                </aside>
                                <a href="{{ URL('detail', array('id' => $id)) }}" class="link-arrow">Read More</a>
                            </div>
                        </div><!-- /.property -->
                        <?php 
                                } // This ends the foreach loop 
                            } // Closes the else statement.
                        ?>

                        {{-- Consider adding this somewhere between properties? --}}
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