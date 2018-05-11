<?php

// ENGLISH
$txt['smf_repair_settings']['en'] = 'SMF %1$s Settings Repair Tool'; 
$txt['smf11_repair_settings']['en'] = 'SMF 1.x Settings Repair Tool'; 
$txt['no_value']['en'] = '<em style="font-weight: normal; color: red;">Value not found!</em>'; 
$txt['default_value']['en'] = 'Recommended value'; 
$txt['other_possible_value']['en'] = 'Other possible value'; 
$txt['no_default_value']['en'] = 'No recommended value'; 
$txt['save_settings']['en'] = 'Save Settings'; 
$txt['remove_file']['en'] = 'Remove this file. Careful, it may not work in all servers!'; 
$txt['restore_all_settings']['en'] = 'Restore all settings'; 
$txt['not_writable']['en'] = 'Settings.php cannot be written to by your webserver.  Please modify the permissions on this file to allow write access.'; 
$txt['recommend_blank']['en'] = '<em>(blank)</em>'; 
$txt['database_settings_hidden']['en'] = 'Some settings are not being shown because the database connection information is incorrect.<br />Check your database login details, table prefix and that the database actually contains your SMF tables.'; 
$txt['no_sources']['en'] = 'We were unable to detect your Sources folder. This is crucial for this tool to work. Please be sure it exists.'; 
$txt['settings_saved']['en'] = 'Your settings were saved. Please confirm all the paths and URLs below, and that your forum works.<br /><b>Make sure you remove this file!</b>'; 

$txt['remove_hooks']['en'] = 'Remove all hooks'; 
$txt['disable_hooks']['en'] = 'Disable all hooks'; 
$txt['hooks_removed']['en'] = 'All your existing hooks were removed from the database. Do note that existing MODs that rely on hooks will not work anymore.<br /><b>Make sure you remove this file!</b>'; 
$txt['hooks_disabled']['en'] = 'All your existing hooks were disabled. Do note that existing MODs that rely on hooks will not work anymore. You can enable these again from Forum Maintenance<br /><b>Make sure you remove this file!</b>'; 

$txt['critical_settings']['en'] = 'Critical Settings'; 
$txt['critical_settings_info']['en'] = 'These are the settings most likely to be screwing up your board, but try the things below (especially the path and URL ones) if these don\'t help.  You can click on the recommended value to use it.'; 
$txt['maintenance']['en'] = 'Maintenance Mode'; 
$txt['maintenance0']['en'] = 'Off (recommended)'; 
$txt['maintenance1']['en'] = 'Enabled'; 
$txt['maintenance2']['en'] = 'Unusable <em>(not recommended!)</em>'; 
$txt['language']['en'] = 'Language File'; 
$txt['cookiename']['en'] = 'Cookie Name'; 
$txt['queryless_urls']['en'] = 'Queryless URLs'; 
$txt['queryless_urls0']['en'] = 'Off (recommended)'; 
$txt['queryless_urls1']['en'] = 'On'; 
$txt['enableCompressedOutput']['en'] = 'Output Compression'; 
$txt['enableCompressedOutput0']['en'] = 'Off (recommended if you have problems)'; 
$txt['enableCompressedOutput1']['en'] = 'On (saves a lot of bandwidth)'; 
$txt['databaseSession_enable']['en'] = 'Database driven sessions'; 
$txt['databaseSession_enable0']['en'] = 'Off (not recommended)'; 
$txt['databaseSession_enable1']['en'] = 'On (recommended)'; 
$txt['theme_default']['en'] = 'Set SMF Default theme as overall forum default<br />for all users'; 
$txt['theme_default0']['en'] = 'No (keep the current users\' theme settings)'; 
$txt['theme_default1']['en'] = 'Yes (recommended if you have problems)'; 

$txt['database_settings']['en'] = 'Database Info'; 
$txt['database_settings_info']['en'] = 'This is the server, username, password, and database for your server.'; 
$txt['db_type']['en'] = 'Database Engine'; 
$txt['db_server']['en'] = 'Server'; 
$txt['db_name']['en'] = 'Database name'; 
$txt['db_user']['en'] = 'Username'; 
$txt['db_passwd']['en'] = 'Password'; 
$txt['ssi_db_user']['en'] = 'SSI Username'; 
$txt['ssi_db_passwd']['en'] = 'SSI Password'; 
$txt['ssi_db_user_desc']['en'] = '(Optional)'; 
$txt['ssi_db_passwd_desc']['en'] = '(Optional)'; 
$txt['db_prefix']['en'] = 'Table prefix'; 
$txt['db_persist']['en'] = 'Connection type'; 
$txt['db_persist0']['en'] = 'Standard (recommended)'; 
$txt['db_persist1']['en'] = 'Persistent (might cause problems)'; 
$txt['db_mysql']['en'] = 'MySQL'; 
$txt['db_postgresql']['en'] = 'PostgreSQL'; 
$txt['db_sqlite']['en'] = 'SQLite'; 

$txt['cache_settings']['en'] = 'Cache Settings'; 
$txt['cache_settings_info']['en'] = 'These are the cache settings to your SMF installation, and can cause big problems when they are wrong.'; 
$txt['cache_accelerator']['en'] = 'Cache System'; 
$txt['cache_accelerator_help']['en'] = 'Choose: apc, eaccelerator, memcache, mmcache, output_cache, smf, or xcache'; 
$txt['cache_enable']['en'] = 'Enable Caching'; 
$txt['cache_enable0']['en'] = 'Off'; 
$txt['cache_enable1']['en'] = 'On (recommended)'; 
$txt['cachedir']['en'] = 'Cache Directory'; 
$txt['cache_memcached']['en'] = 'Memcache Servers'; 

$txt['path_url_settings']['en'] = 'Paths &amp; URLs'; 
$txt['path_url_settings_info']['en'] = 'These are the paths and URLs to your SMF installation, and can cause big problems when they are wrong.  Sorry, there are a lot of them.'; 
$txt['boardurl']['en'] = 'Forum URL'; 
$txt['boarddir']['en'] = 'Forum Directory'; 
$txt['sourcedir']['en'] = 'Sources Directory'; 
$txt['tasksdir']['en'] = 'Tasks Directory'; 
$txt['packagesdir']['en'] = 'Packages Directory'; 
$txt['attachmentUploadDir']['en'] = 'Attachment Directory'; 
$txt['avatar_url']['en'] = 'Avatar URL'; 
$txt['avatar_directory']['en'] = 'Avatar Directory'; 
$txt['custom_avatar_url']['en'] = 'Custom Avatar URL'; 
$txt['custom_avatar_dir']['en'] = 'Custom Avatar Directory'; 
$txt['smileys_url']['en'] = 'Smileys URL'; 
$txt['smileys_dir']['en'] = 'Smileys Directory'; 
$txt['theme_url']['en'] = 'Default Theme URL'; 
$txt['images_url']['en'] = 'Default Theme Images URL'; 
$txt['theme_dir']['en'] = 'Default Theme Directory'; 

$txt['theme_path_url_settings']['en'] = 'Paths &amp; URLs For Themes'; 
$txt['theme_path_url_settings_info']['en'] = 'These are the paths and URLs to your SMF themes.';


// FRENCH
$txt['smf_repair_settings']['fr'] = 'SMF %1$s - Outils de r&eacute;paration des param&eacute;tres<br />Version fran&ccedil;aise';
$txt['smf11_repair_settings']['fr'] = 'SMF 1.x - Outils de r&eacute;paration des param&eacute;tres<br />Version fran&ccedil;aise';
$txt['no_value']['fr'] = '<em style="font-weight: normal; color: red;">Valeur introuvable !</em>';
$txt['default_value']['fr'] = 'Valeur recommand&eacute;e.';
$txt['other_possible_value']['fr'] = 'Autre valeur possible.';
$txt['no_default_value']['fr'] = 'Valeur non recommand&eacute;e.';
$txt['save_settings']['fr'] = 'Sauvegarder les param&eacute;tres';
$txt['remove_file']['fr'] = 'Supprimer ce fichier. Attention, peut ne pas fonctionner sur certains serveurs';
$txt['restore_all_settings']['fr'] = 'Restaurer tous les param&eacute;tres';
$txt['not_writable']['fr'] = 'Le fichier Settings.php ne peut pas &ecirc;tre &eacute;crit. Modifiez les droits d\'acc&egrave;s &agrave; ce fichier.';
$txt['recommend_blank']['fr'] = '<em>(blank)</em>';
$txt['database_settings_hidden']['fr'] = 'Certains param&egrave;tres ne sont pas affich&eacute;s car les informations de connexion &agrave; la base de donn&eacute;es sont incorrectes.<br />V&eacute;rifiez les d&eacute;tails de connexion de votre base de donn&eacute;es, le pr&eacute;fixe des tables et que la base de donn&eacute;es contient bien vos tables SMF.';
$txt['no_sources']['fr'] = 'Le dossier Sources n\'a pas &eacute;t&eacute; trouv&eacute;. Ce dossier est essentiel pour que cet outil fonctionne. Assurez-vous qu\'il existe.';
$txt['settings_saved']['fr'] = 'Vos param&egrave;tres ont &eacute;t&eacute; sauvegard&eacute;s. Confirmez tous les chemins et les URLs ci-dessous, et v&eacute;rifiez que votre forum fonctionne.<br /> <b> Assurez-vous de supprimer ce fichier !</b>';

$txt['remove_hooks']['fr'] = 'Retirer tous les hooks';
$txt['disable_hooks']['fr'] = 'D&eacute;sactiver tous les hooks';
$txt['hooks_removed']['fr'] = 'Tous les hooks existants ont &eacute;t&eacute; retir&eacute;s de la base de donn&eacute;es. Notez que les MODs existants qui d&eacute;pendent des hooks ne fonctionneront plus.<br /><b>Assurez-vous de supprimer ce fichier !</b>';
$txt['hooks_disabled']['fr'] = 'Tous les hooks existants ont &eacute;t&eacute; d&eacute;sactiv&eacute;s. Notez que les MODs existants qui d&eacute;pendent des hooks ne fonctionneront plus. Vous pouvez les r&eacute;activer depuis la maintenance du forum.<br /><b>Assurez-vous de supprimer ce fichier !</b>';

$txt['critical_settings']['fr'] = 'Param&eacute;tres critiques';
$txt['critical_settings_info']['fr'] = 'Ce sont les param&egrave;tres les plus susceptibles de paralyser votre forum, mais essayez les actions ci-dessous (en particulier les chemins d\'acc&egrave;s et les URLs). Si cela ne vous aide pas, vous pouvez cliquer sur la valeur recommand&eacute;e pour l\'utiliser.';
$txt['maintenance']['fr'] = 'Mode Maintenance ';
$txt['maintenance0']['fr'] = 'Off (recommand&eacute;)';
$txt['maintenance1']['fr'] = 'Activ&eacute;';
$txt['maintenance2']['fr'] = 'Inutilisable <em>(non recommand&eacute; !)</em>';
$txt['language']['fr'] = 'Fichier de langue ';
$txt['cookiename']['fr'] = 'Nom du Cookie ';
$txt['queryless_urls']['fr'] = 'URLs simplifi&eacute;es';
$txt['queryless_urls0']['fr'] = 'Off (recommand&eacute;)';
$txt['queryless_urls1']['fr'] = 'On';
$txt['enableCompressedOutput']['fr'] = 'Compression des pages ';
$txt['enableCompressedOutput0']['fr'] = 'Off (recommand&eacute; si vous avez des probl&egrave;mes)';
$txt['enableCompressedOutput1']['fr'] = 'On (pr&eacute;serve votre bande passante)';
$txt['databaseSession_enable']['fr'] = 'Sessions en base de donn&eacute;es ';
$txt['databaseSession_enable0']['fr'] = 'Off (non recommand&eacute;)';
$txt['databaseSession_enable1']['fr'] = 'On (recommand&eacute;)';
$txt['theme_default']['fr'] = 'D&eacute;finir le th&egrave;me par d&eacute;faut de SMF en tant que th&egrave;me<br />pour tous les utilisateurs ';
$txt['theme_default0']['fr'] = 'Non (conserver les param&eacute;tres actuels des utilisateurs)';
$txt['theme_default1']['fr'] = 'Oui (recommand&eacute; si vous avez des probl&egrave;mes)';

$txt['database_settings']['fr'] = 'Informations de la base de donn&eacute;es';
$txt['database_settings_info']['fr'] = 'Il s\'agit du serveur, du nom d\'utilisateur, du mot de passe et de la base de donn&eacute;es de votre serveur.';
$txt['db_type']['fr'] = 'Moteur de base de donn&eacute;es ';
$txt['db_server']['fr'] = 'Serveur ';
$txt['db_name']['fr'] = 'Nom de la base ';
$txt['db_user']['fr'] = 'Non d\'utilisateur ';
$txt['db_passwd']['fr'] = 'Mot de passe ';
$txt['ssi_db_user']['fr'] = 'Non d\'utilisateur SSI ';
$txt['ssi_db_passwd']['fr'] = 'Mot de passe SSI ';
$txt['ssi_db_user_desc']['fr'] = '(Optionnel)';
$txt['ssi_db_passwd_desc']['fr'] = '(Optionnel)';
$txt['db_prefix']['fr'] = 'Pr&eacute;fixe des tables ';
$txt['db_persist']['fr'] = 'Type de connexion ';
$txt['db_persist0']['fr'] = 'Standard (recommand&eacute;)';
$txt['db_persist1']['fr'] = 'Persistante (peut causer des probl&egrave;mes)';
$txt['db_mysql']['fr'] = 'MySQL';
$txt['db_postgresql']['fr'] = 'PostgreSQL';
$txt['db_sqlite']['fr'] = 'SQLite';

$txt['cache_settings']['fr'] = 'Param&egrave;tres du cache';
$txt['cache_settings_info']['fr'] = 'Il s\'agit des param&egrave;tres du cache de votre installation de SMF. Ils peuvent causer de gros probl&egrave;mes quand ils sont &eacute;rron&eacute;s.';
$txt['cache_accelerator']['fr'] = 'Cache Syst&egrave;me ';
$txt['cache_accelerator_help']['fr'] = 'Choississez: apc, eaccelerator, memcache, mmcache, output_cache, smf, ou xcache';
$txt['cache_enable']['fr'] = 'Activer le cache ';
$txt['cache_enable0']['fr'] = 'Off';
$txt['cache_enable1']['fr'] = 'On (recommand&eacute;)';
$txt['cachedir']['fr'] = 'R&eacute;pertoire du cache ';
$txt['cache_memcached']['fr'] = 'Serveurs Memcache ';

$txt['path_url_settings']['fr'] = 'Chemins &amp; URLs';
$txt['path_url_settings_info']['fr'] = 'Il s\'agit des chemins et URLs de votre installation de SMF. Ils peuvent causer de gros probl&egrave;mes quand ils sont &eacute;rron&eacute;s.  D&eacute;sol&eacute;, il y en a beaucoup.';
$txt['boardurl']['fr'] = 'URL du forum ';
$txt['boarddir']['fr'] = 'R&eacute;pertoire du Forum ';
$txt['sourcedir']['fr'] = 'R&eacute;pertoire "Sources" ';
$txt['tasksdir']['fr'] = 'R&eacute;pertoire "Tasks" ';
$txt['packagesdir']['fr'] = 'R&eacute;pertoire "Packages" ';
$txt['attachmentUploadDir']['fr'] = 'R&eacute;pertoire "Attachment" ';
$txt['avatar_url']['fr'] = 'URL des avatars ';
$txt['avatar_directory']['fr'] = 'R&eacute;pertoire des avatars ';
$txt['custom_avatar_url']['fr'] = 'URL des avatars personnalis&eacute;s ';
$txt['custom_avatar_dir']['fr'] = 'R&eacute;pertoire des avatars personnalis&eacute;s ';
$txt['smileys_url']['fr'] = 'URL des smileys ';
$txt['smileys_dir']['fr'] = 'R&eacute;pertoire des smileys ';
$txt['theme_url']['fr'] = 'URL du th&egrave;me par d&eacute;faut ';
$txt['images_url']['fr'] = 'URL des imgages du th&egrave;me par d&eacute;faut ';
$txt['theme_dir']['fr'] = 'R&eacute;pertoire du th&egrave;me par d&eacute;faut ';

$txt['theme_path_url_settings']['fr'] = 'Chemins &amp; URLs des th&egrave;mes';
$txt['theme_path_url_settings_info']['fr'] = 'Il s\'agit des chemins et th&egrave;mes de votre installation de SMF.';


//
