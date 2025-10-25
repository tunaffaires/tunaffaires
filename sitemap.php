<?php
// -------------------------------
// CONFIGURATION
// -------------------------------
$rootDir = __DIR__; // dossier racine du site
$ignoreDirs = ['assets', 'images', 'css', 'js', 'vendor']; // dossiers à ignorer
$changeFreqDefault = 'weekly';
$priorityDefault = '0.8';
$homePriority = '1.0'; // priorité de la page d'accueil
$homeFiles = ['index.php', 'index.html']; // fichiers considérés comme "home"

// -------------------------------
// FONCTION POUR PARCOURIR LES FICHIERS
// -------------------------------
function getFiles($dir, $ignoreDirs) {
    $files = [];
    $items = scandir($dir);
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        $path = $dir . DIRECTORY_SEPARATOR . $item;

        if (is_dir($path)) {
            if (!in_array($item, $ignoreDirs)) {
                $files = array_merge($files, getFiles($path, $ignoreDirs));
            }
        } elseif (preg_match('/\.(php|html?|htm)$/i', $item)) {
            $files[] = $path;
        }
    }
    return $files;
}

// -------------------------------
// RÉCUPÉRER TOUS LES FICHIERS
// -------------------------------
$allFiles = getFiles($rootDir, $ignoreDirs);

// -------------------------------
// DÉTECTER AUTOMATIQUEMENT LE "BASE URL"
// -------------------------------
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])) . '/';
$baseUrl = $protocol . $host . $scriptDir;

// -------------------------------
// CRÉER LE SITEMAP XML
// -------------------------------
$xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset/>');
$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($allFiles as $file) {
    $relPath = str_replace($rootDir . DIRECTORY_SEPARATOR, '', $file);
    $url = $baseUrl . str_replace(DIRECTORY_SEPARATOR, '/', $relPath);

    $urlElement = $xml->addChild('url');
    $urlElement->addChild('loc', $url);
    $urlElement->addChild('lastmod', date('c', filemtime($file)));
    $urlElement->addChild('changefreq', $changeFreqDefault);

    // Priorité : page d'accueil = 1.0, autres = 0.8
    $filename = basename($file);
    $priority = in_array($filename, $homeFiles) ? $homePriority : $priorityDefault;
    $urlElement->addChild('priority', $priority);
}

// -------------------------------
// ENREGISTRER LE SITEMAP
// -------------------------------
$sitemapFile = $rootDir . DIRECTORY_SEPARATOR . 'sitemap.xml';
$xml->asXML($sitemapFile);

echo "✅ Sitemap généré avec succès : " . $sitemapFile;
?>
