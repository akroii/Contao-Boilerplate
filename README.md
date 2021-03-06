# Contao-Boilerplate for Contao 3.5.x
- You can take care of contao alone
- Contao-Boilerplate delivers files/folders you create anyway

## What you see is what you get :)
- Get a default file & folder-skeleton
- Basic configuration
- Basic stylesheets
- little Helpers in your workflow

## Installation
1. Donwload Contao-Boilerplate-Master.zip
2. Unzip
3. Copy folder-structure to your Contao root -> insert & merge with existing folders. Do NOT replace!
4. Set `$GLOBALS['TL_ASSETS']['JQUERY'] = '2.2.4';` in localconfig.php
5. Set `width=device-width, initial-scale=1` set Layout/Theme-Settings

## Details
1. To get the relative font-path in `font-import.css` set `../font/` like:  `src: url('../font/rubik-medium.eot');`

## Recommended snippets
```
<body id="top" class="{{ua::class}} {{page::pageTitle|standardize|strtolower}} {{page::parentAlias|standardize|strtolower}} <?php echo ($this->replaceInsertTags('{{page::alias}}') != "index" ? "sub" : "main");?><?php if ($this->class) echo ' ' . $this->class; ?>"<?php if ($this->onload): ?> onload="<?= $this->onload ?>"<?php endif; ?>>
```

## Recommended modules for Contao
- dma_elementgenerator
- contao-ce-access
- inherit_article
- contao-easy_themes
- easyFavicon
- easyupdate3
- m17-sticky-backend-footer
- notification_center
- contao-protectedselect
- contao-conditionalformfields
- contao-conditionalselectmenu
- newsMetaTitle
- newsDescription
- inputvar
- contao-formrecipient
- rel-canonical
- mailusername
- backendUserHistory
- backend_user_online
- contao-lang_to_url
- m17-sticky-backend-footer
- i18nl10n
- contao-cookiebar
- zcearchpro
- Contao hidefiles
- htaccess-Wartungsseite
