<?php
$GLOBALS['archfr']['site_url'] = "//www.archlinux-es.org";

/* nav_link: array (key => array (label, link, title)) */
$GLOBALS['archfr']['nav_link'] = array (
    "home"      => array ("Portada", "//www.archlinux-es.org/", "anb-home", "Sitio de Arch Linux"),
    "forum"     => array ("Foros", "//foros.archlinux-es.org/", "anb-forums", "Foros de Arch Linux"),
    "wiki"      => array ("Wiki", "//wiki.archlinux.org/", "anb-wiki", "Wiki de Arch Linux"),
    "bug"       => array ("Bugs", "//bugs.archlinux.org/", "anb-bugs", "Enlace a bugs.archlinux.org"),
    "packages"  => array ("Paquetes", "//www.archlinux.org/packages/", "anb-packages", "Enlace a archlinux.org"),
    "aur"       => array ("AUR", "//aur.archlinux.org/index.php?setlang=es", "anb-aur", "Enlace a aur.archlinux.org"),
    "download"  => array ("Descargar", "//www.archlinux-es.org/descarga", "anb-download", "Descarga Arch Linux"),
    "planet"    => array ("Planeta", "//planeta.archlinux-es.org/", "anb-planet", "Planeta Hispano de Arch Linux"),
);

function print_arch_header($selected = "home", $utf8 = true)
{
?>

<div id="archnavbar" class="<?php echo $GLOBALS['archfr']['nav_link'][$selected][2]; ?>">
    <div id="archnavbarlogo">
        <h1><a href="//www.archlinux-es.org" title="Arch Linux">Arch Linux</a></h1>
    </div>
    <div id="archnavbarmenu">
        <i id="archnavbaropenmenu"></i>
        <ul id="archnavbarlist"><?php
            foreach ($GLOBALS['archfr']['nav_link'] as $key => $data):
                if ($selected == $key)
                    echo '<li id="' . $data[2] . '" class="anb-selected">';
                else
                    echo '<li id="' . $data[2] . '" >';
                $url = '<a target="_top" href="' . $data[1] . '" title="' . $data[3] . '">' . $data[0] . "</a></li>\n";
                if (!$utf8)
                    $url = utf8_decode($url);
                echo $url;
            endforeach;
        ?></ul>
    </div>
</div>

<?php
}

function print_arch_favicon()
{
    echo '<link rel="icon" href="' . $GLOBALS['archfr']['site_url'] . 'commun/images/favicon.ico" type="image/png" />';
}

function print_arch_footer($complement = "", $utf8 = true)
{
?>

<div id="footer">
    <p>Diseño basado en
        <a href="https://www.archlinux.org" title="archlinux.org">archlinux.org</a>
        <br />
	El nombre de Arch Linux y su logo son marcas reconocidas. Algunos derechos reservados por sus propietarios.
	<br />
        <?php
            $str = "© 2004-2016 archlinux-es.org ~ Comunidad Hispana de Arch Linux";
            if (!$utf8)
                $str = utf8_decode($str);
            echo $str;
        ?>
    </p>
</div>

<?php
}
?>