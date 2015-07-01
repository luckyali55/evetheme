<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="searchfld">
        <input type="text" placeholder="Search " value="<?php echo get_search_query(); ?>" name="s" id="s" />
    </div>
</form>