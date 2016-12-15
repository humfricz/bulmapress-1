<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form control is-grouped" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <p class="control is-expanded is-marginless">
        <label for="<?php echo $unique_id; ?>">
            <span class="sr-only"><?php echo _x( 'Search for:', 'label' ); ?></span>
        </label>
        <input type="search" id="<?php echo $unique_id; ?>" class="search-field input is-expanded" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
    </p>
    <p class="control">
        <button type="submit" class="search-submit button is-dark">
            <i class="fa fa-search" aria-hidden="true"></i>
            <span class="sr-only"><?php echo _x( 'Search', 'submit button' ); ?></span>
        </button>
    </p>
</form>
