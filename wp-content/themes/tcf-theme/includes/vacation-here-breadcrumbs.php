<?php 

$vacationHerePages = get_pages([
    'parent' => get_page_by_path('vacation-here')->ID,
    'sort_column' => "menu_order",
    'sort_order' => 'ASC',
]);

$activePage = (object) ['ID' => -111];

foreach($vacationHerePages as $p){
    if($p->ID == $page->ID){
        $activePage = $p;
        break;
    }
}

load_include('breadcrumbs-pages', [
    'active' => $activePage,
    'pages' => $vacationHerePages,
]);