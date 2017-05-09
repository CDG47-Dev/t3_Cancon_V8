<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3_Cancon".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'cancon',
    'description' => 'cancon gabarit v8',
    'category' => 'fe',
    'constraints' => array(
        'depends' => array(
            'bootstrap_package' => '8.0.0 - 8.99.99',
            'typo3' => '8.7.1 - 8.99.99',
			'indexed_search' => '8.7.0 - 8.99.99',
			'news' => '6.0.0 - 6.9.99',			
			'dd_googlesitemap' => '*',
			
        ),
        'conflicts' => array(),
    ),
    'state' => 'beta',
    'uploadfolder' => 1,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'O. Pommaret, Y.Berton',
    'author_email' => 'services.internet@cdg47.fr',
    'author_company' => 'CDG47',
    'version' => '8.7.1',
);
?>
