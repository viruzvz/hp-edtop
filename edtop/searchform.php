<form class="widget-search" action="<?php echo home_url( '/' ); ?>">
    <input class="form-control rounded-0" id="search" type="search" placeholder="Buscar no site" value="<?php echo get_search_query(); ?>" name="s" />
    <button class="btn btn-orange rounded-0" type="submit">
        <i class="fa-magnifying-glass fa-solid" aria-hidden="true"></i>
    </button>
</form>