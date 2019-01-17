<?php 

$buyerToolsPages = get_pages([
    'parent' => get_page_by_path('buyer-tools')->ID,
    'sort_column' => "menu_order",
    'sort_order' => 'ASC',
]);

$activePage = (object) ['ID' => -111];

foreach($buyerToolsPages as $p){
    if($p->ID == $page->ID){
        $activePage = $p;
        break;
    }
}

load_include('breadcrumbs-pages', [
    'active' => $activePage,
    'pages' => $buyerToolsPages,
]);