<!-- sidebar -->

{{-- Used for all DB queries as constants  --}}
<?php include_once(app_path()."/queries.php") ?>

<div class="col-md-3 col-sm-3">
    <section id="sidebar">
        <aside id="edit-search">
            <header><h3>Search More Properties</h3></header>
                {!! Form::open(['url' => 'list-lines', 'id' => 'form-sidebar', 'class' => 'form-search']) !!}
                    <div class="form-group">
                        {!! Form::text('search-box-property-id', null, ['class' => 'form-control', 'placeholder' => 'Address, City, etc.']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::select('region', [
                            '' => 'Region',
                            'Niagara Falls' => 'Niagara Falls',
                            'Niagara-on-the-Lake' => 'Niagara-on-the-Lake',
                            'St. Catharines' => 'St. Catharines',
                            'Thorold' => 'Thorold',
                            'Welland' => 'Welland'
                        ]) !!}
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        {!! Form::submit('Serach Now', ['class' => 'btn btn-default']) !!}
                    </div><!-- /.form-group -->
                    {!! Form::token() !!}
                {!! Form::close() !!}
        </aside><!-- /#edit-search -->
    </section><!-- /#sidebar -->
</div><!-- /.col-md-3 -->
<!-- end Sidebar -->