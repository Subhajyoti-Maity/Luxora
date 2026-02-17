<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in config.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation with icons.
 */
function nav_menu($sep = ' | ')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    $icons = [
        '' => 'fas fa-home',
        'about-us' => 'fas fa-info-circle',
        'products' => 'fas fa-shopping-bag',
        'contact' => 'fas fa-envelope'
    ];
    
    foreach ($nav_items as $uri => $name) {
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $class = $query_string == $uri ? ' active' : '';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $icon = isset($icons[$uri]) ? '<i class="' . $icons[$uri] . '"></i> ' : '';
        
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $icon . $name . '</a>' . $sep;
    }

    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.phtml';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.phtml';
    }

    echo file_get_contents($path);
}

/**
 * Displays breadcrumb navigation.
 */
function breadcrumb_nav()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : '';
    $nav_items = config('nav_menu');
    
    echo '<a href="' . config('site_url') . '/">Home</a>';
    
    if (!empty($page) && isset($nav_items[$page])) {
        echo '<span class="breadcrumb-sep">›</span>';
        echo '<span>' . ucwords(str_replace('-', ' ', $page)) . '</span>';
    }
}

/**
 * Checks if current page should display featured section.
 */
function is_featured_page()
{
    $featured_pages = array('about-us', 'products');
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    
    return in_array($page, $featured_pages);
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}
