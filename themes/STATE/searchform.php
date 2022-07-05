<div class="form-wrapper">
    <button title="Close" type="button" class="search-close alt-font">×</button>
    <form id="search-form" role="search" method="get" class="search-form text-start" action="<?php echo home_url()?>/">
        <div class="search-form-box">
            <span class="search-label alt-font text-small text-uppercase text-medium-gray">¿Buscas algo?</span>
            <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Ingresa tu consulta..." name="s" value="<?php the_search_query()?>" type="text" autocomplete="off" required>
            <button type="submit" class="search-button">
                <i class="feather icon-feather-search" aria-hidden="true"></i>
            </button>
        </div>
    </form>
</div>