<?php
/** Tok Pisin (Tok Pisin)
 *
 * @ingroup Language
 * @file
 *
 * @author Caffelice (on tpi.wikipedia.org)
 * @author Iketsi
 * @author Wantok
 * @author Wytukaze
 * @author לערי ריינהארט
 */

$specialPageAliases = array(
	'Confirmemail'              => array( 'Orait long imel' ),
	'Contributions'             => array( 'Ol senis bilong yusa' ),
	'CreateAccount'             => array( 'Mekim nupela login' ),
	'Emailuser'                 => array( 'Imel yusa' ),
	'Preferences'               => array( 'Ol laik bilong mi' ),
	'Randompage'                => array( 'Soim wanpela pes' ),
	'Recentchanges'             => array( 'Nupela senis' ),
	'Specialpages'              => array( 'Sipesol pes' ),
	'Upload'                    => array( 'Salim media fail' ),
	'Userlogin'                 => array( 'Yusa login' ),
	'Userlogout'                => array( 'Yusa logaut' ),
	'Watchlist'                 => array( 'Lukautbuk' ),
	'Whatlinkshere'             => array( 'Ol link ikam long hia' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Putim lain ananit long ol link:',
'tog-highlightbroken'         => 'Soim ol link long ol pes i no stap yet <a href="" class="new">olsem</a> (o: olsem<a href="" class="internal">?</a>).',
'tog-justify'                 => "Soim ol paragraf i pulmapim sipes long lephan i go long raithan (''justify'')",
'tog-hideminor'               => 'Noken soim ol liklik senis insait long ol nupela senis',
'tog-hidepatrolled'           => 'Noken soim ol lukluk senis insait long ol nupela senis',
'tog-newpageshidepatrolled'   => 'Noken soim ol lukluk senis insait long ol nupela pes',
'tog-extendwatchlist'         => 'Larim lukautbuk i go longpela long soim olgeta senis',
'tog-usenewrc'                => 'Moa beta stail bilong nupela senis (i nidim JavaScript)',
'tog-numberheadings'          => 'Putim ol namba i go long wanwan hap bilong pes',
'tog-showtoolbar'             => 'Soim ol liklik link long wokim senis kwiktaim (i nidim JavaScript)',
'tog-editondblclick'          => 'Senisim pes taim yu paitim tupela taim kwiktaim (i nidim JavaScript)',
'tog-editsection'             => 'Soim ol [senisim] link long wanwan hap bilong ol pes',
'tog-editsectiononrightclick' => 'Senisim ol hap bilong pes taim yu paitim nem bilong hap<br />wantaim raithan-klik (i nidim Javascript)',
'tog-showtoc'                 => 'Soim ol nem bilong hap insait long liklik bokis, taim igat antap long 3 hap long pes',
'tog-rememberpassword'        => 'Holim nem bilong yusa bilong mi long dispela kompiuta (for a maximum of $1 {{PLURAL:$1|day|days}})',
'tog-watchcreations'          => 'Putim ol nupela pes mi wokim long lukautbuk',
'tog-watchdefault'            => 'Putim ol pes mi senisim long lukautbuk bilong mi',
'tog-watchmoves'              => 'Putim ol pes mi surikim long lukautbuk bilong mi',
'tog-watchdeletion'           => 'Putim ol pes mi rausim long lukautbuk bilong mi',
'tog-minordefault'            => 'Makim ol senis mi wokim olsem ol i liklik, sapos mi no makim',
'tog-previewontop'            => 'Soim pes mi senisim (pastaim long raitim) antap long bokis bilong wokim senis',
'tog-previewonfirst'          => 'Soim pes mi senisim pastaim long raitim',
'tog-enotifwatchlistpages'    => 'Salim imel (e-mail) long mi taim wanpela pes mi lukautim i senis',
'tog-shownumberswatching'     => 'Soim hamas yusa i lukautim pes',
'tog-uselivepreview'          => 'Soim ol senis kwiktaim taim mi wokim (i nidim Javascript)',
'tog-watchlisthideown'        => 'Haitim ol senis mi wokim long lukautbuk bilong mi',
'tog-watchlisthidebots'       => 'Haitim ol senis ol bot i wokim long lukautbuk bilong mi',
'tog-watchlisthideminor'      => 'Haitim ol liklik senis long lukautbuk bilong mi',
'tog-showhiddencats'          => 'Soim ol grup hait',

'underline-always' => 'Olgeta taim',
'underline-never'  => 'No gat',

# Font style option in Special:Preferences
'editfont-monospace' => 'Monospaced rait',
'editfont-sansserif' => 'Sans-serif rait',
'editfont-serif'     => 'Serif rait',

# Dates
'sunday'        => 'Sande',
'monday'        => 'Mande',
'tuesday'       => 'Tunde',
'wednesday'     => 'Trinde',
'thursday'      => 'Fonde',
'friday'        => 'Fraide',
'saturday'      => 'Sarere',
'sun'           => 'San',
'mon'           => 'Man',
'tue'           => 'Tun',
'wed'           => 'Tri',
'thu'           => 'Fon',
'fri'           => 'Frai',
'sat'           => 'Sar',
'january'       => 'Janueri',
'february'      => 'Februeri',
'march'         => 'Mas',
'april'         => 'Epril',
'may_long'      => 'Me',
'june'          => 'Jun',
'july'          => 'Julai',
'august'        => 'Ogas',
'september'     => 'Septemba',
'october'       => 'Oktoba',
'november'      => 'Novemba',
'december'      => 'Disemba',
'january-gen'   => 'Janueri',
'february-gen'  => 'Februeri',
'march-gen'     => 'Mas',
'april-gen'     => 'Epril',
'may-gen'       => 'Me',
'june-gen'      => 'Jun',
'july-gen'      => 'Julai',
'august-gen'    => 'Ogas',
'september-gen' => 'Septemba',
'october-gen'   => 'Oktoba',
'november-gen'  => 'Novemba',
'december-gen'  => 'Disemba',
'jan'           => 'Jan',
'feb'           => 'Feb',
'mar'           => 'Mas',
'apr'           => 'Epr',
'may'           => 'Me',
'jun'           => 'Jun',
'jul'           => 'Jul',
'aug'           => 'Oga',
'sep'           => 'Sep',
'oct'           => 'Okt',
'nov'           => 'Nov',
'dec'           => 'Dis',

# Categories related messages
'pagecategories'           => '{{PLURAL:$1|Grup|Ol grup}}',
'category_header'          => 'Ol pes insait long grup "$1"',
'subcategories'            => 'Ol grup insait long grup',
'category-media-header'    => 'Ol media (olsem piksa) insait long grup "$1"',
'category-empty'           => "''Dispela grup i no gat wanpela pes o media (olsem piksa) insait long en nau.''",
'hidden-categories'        => '{{PLURAL:$1|Grup hait|Ol grup hait}}',
'hidden-category-category' => 'Ol grup hait',
'listingcontinuesabbrev'   => 'moa',

'about'         => 'Long',
'article'       => 'Stori',
'newwindow'     => '(bai kamap long nupela windo)',
'cancel'        => 'Toromwe senis',
'moredotdotdot' => 'Moa...',
'mypage'        => 'Pes bilong mi',
'mytalk'        => 'Toktok bilong mi',
'anontalk'      => 'Toktok bilong dispela IP',
'navigation'    => 'Ol bikpela pes',
'and'           => '&#32;na',

'qbfind'         => 'Painim',
'qbbrowse'       => 'Lukim',
'qbpageoptions'  => 'Dispela pes',


'errorpagetitle'   => 'Samting i kranki',
'returnto'         => 'Go bek long $1',
'tagline'          => 'Long {{SITENAME}}',
'help'             => 'Halivim mi',
'search'           => 'Painim',
'searchbutton'     => 'Painim',
'go'               => 'Go',
'searcharticle'    => 'Go',
'history'          => 'Ol senis long dispela pes',
'history_short'    => 'Ol senis',
'print'            => 'Prinim',
'edit'             => 'Senisim',
'create'           => 'Kirapim',
'editthispage'     => 'Senisim dispela pes',
'delete'           => 'Rausim',
'deletethispage'   => 'Rausim dispela pes',
'protect'          => 'Tambuim',
'protect_change'   => 'senisim',
'newpage'          => 'Nupela pes',
'talkpage'         => 'Toktok bilong dispela pes',
'talkpagelinktext' => 'Toktok',
'specialpage'      => 'Sipesol pes',
'personaltools'    => 'Ol pes bilong mi',
'talk'             => 'Toktok',
'views'            => 'Ol lukluk',
'toolbox'          => 'Sipesol bokis',
'otherlanguages'   => 'Long ol narapela tokples',
'redirectedfrom'   => '(Nupela rot i pinis long $1)',
'redirectpagesub'  => 'Nupela rot',
'protectedpage'    => 'Pes i tambu',
'jumpto'           => 'Go stret long:',
'jumptonavigation' => 'ol bikpela pes',
'jumptosearch'     => 'painim',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'Long {{SITENAME}}',
'aboutpage'            => 'Project:Long',
'copyrightpage'        => '{{ns:project}}:Ol laisens',
'currentevents'        => 'Karen afeas',
'currentevents-url'    => 'Project:Karen afeas',
'disclaimers'          => 'Ol toksave bilong lo',
'disclaimerpage'       => 'Project:Ol tok warn long lo',
'edithelp'             => 'Halivim mi long pasin bilong wokim senis',
'edithelppage'         => 'Help:Senisim',
'mainpage'             => 'Fran Pes',
'mainpage-description' => 'Fran Pes',
'portal'               => 'Bung ples',
'portal-url'           => 'Project:Bung ples',
'privacy'              => 'Polisi long praivet',
'privacypage'          => 'Project:Polisi long praivet',

'badaccess' => 'Kranki long tok orait.',

'ok'                 => 'OK',
'retrievedfrom'      => 'Ikam long "$1"',
'youhavenewmessages' => '$1 i kam ($2).',
'newmessageslink'    => 'Ol nupela toksave',
'editsection'        => 'senisim',
'editold'            => 'senisim',
'viewsourceold'      => 'lukim as tok',
'editlink'           => 'senisim',
'viewsourcelink'     => 'lukim as tok',
'editsectionhint'    => 'Senisim seksen: $1',
'showtoc'            => 'soim',
'hidetoc'            => 'haitim',
'viewdeleted'        => 'Lukim $1?',
'restorelink'        => '{{PLURAL:$1|wanpela senis i raus pinis|$1 senis i raus pinis}}',
'feedlinks'          => 'Fid:',
'site-rss-feed'      => '$1 RSS toksave',
'site-atom-feed'     => '$1 Atom fid',
'page-rss-feed'      => '"$1" RSS fid',
'page-atom-feed'     => '"$1" Atom fid',
'red-link-title'     => '$1 (pes i nogat stap)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Stori',
'nstab-user'      => 'Pes bilong yusa',
'nstab-media'     => 'Media pes',
'nstab-special'   => 'Sipesol pes',
'nstab-project'   => 'Pes bilong projek',
'nstab-image'     => 'Fail',
'nstab-mediawiki' => 'Toksave',
'nstab-template'  => 'Templet',
'nstab-help'      => 'Pes bilong halivim',
'nstab-category'  => 'Grup',

# General errors
'error'      => 'Birua',
'badtitle'   => 'Nem bilong pes i no stret',
'viewsource' => 'Lukim as tok',

# Login and logout pages
'yourname'            => 'Yusanem:',
'yourpassword'        => 'Paswot:',
'logout'              => 'Logaut',
'userlogout'          => 'Logaut',
'gotaccountlink'      => 'Log in',
'createaccountmail'   => 'Long e-mel',
'createaccountreason' => 'As bilong en:',
'mailmypassword'      => 'E-mel nupela paswot',
'loginlanguagelabel'  => 'Tokples: $1',

# Edit page toolbar
'link_sample'    => 'Link taitel',
'extlink_sample' => 'http://www.example.com link taitel',
'media_tip'      => 'Link bilong fail',

# Edit pages
'summary'                => 'Liklik toksave bilong senis:',
'subject'                => 'Nem bilong pes (o hap bilong pes):',
'minoredit'              => 'Dispela emi liklik senis',
'watchthis'              => 'Putim dispela pes long lukautbuk bilong mi',
'savearticle'            => 'Raitim pes',
'preview'                => 'Pes wantaim senis (pastaim long raitim)',
'showpreview'            => 'Soim pes wantaim senis (pastaim long raitim)',
'showlivepreview'        => 'Soim senis kwiktaim taim mi wokim (pastaim long raitim)',
'showdiff'               => 'Soim ol senis',
'missingcommenttext'     => 'Plis raitim tingting daunbilo.',
'summary-preview'        => 'Toksave bilong senis bai luk olsem:',
'subject-preview'        => 'Nem bilong pes (o hap bilong pes) bai olsem:',
'blockedtitle'           => 'Yusa i pas',
'blockednoreason'        => 'Nogat as bilong en',
'newarticle'             => '(Nupela)',
'updated'                => '(i nupela)',
'editing'                => 'Senisim $1',
'editingsection'         => 'Senisim $1 (seksen)',
'editconflict'           => 'Kranki long senisim: $1',
'yourtext'               => 'Raitim bilong yu',
'yourdiff'               => 'Ol hap i senis',
'copyrightwarning'       => "Toksave: olgeta senis yu wokim long long {{SITENAME}} bai stap ananit long tokorait $2 (lukim $1 long painimaut moa long dispela). Sapos yu no laikim narapela manmeri long senisim olgeta, o salim dispela i go long ol kainkain hap, noken raitim long hia.<br />
Na tu yu tok tru nau olsem yu raitim dispela yu yet, o yu kisim long wanpela hap we lo i tok olsem i orait long kisim (Tok Inglis: <i>public domain</i>).
'''YU NOKEN RAITIM WANPELA SAMTING SAPOS YU NO WOKIM YU YET, O YU KISIM TOKORAIT LONG PUTIM LONG HIA!'''",
'copyrightwarning2'      => "Toksave: olgeta senis yu wokim long long {{SITENAME}} bai inap senis o raus long han bilong ol narapela manmeri. Sapos yu no laikim narapela manmeri long senisim olgeta samting yu raitim, o salim dispela i go long ol kainkain hap, noken raitim long hia.<br />
Na tu yu tok tru nau olsem yu raitim dispela yu yet, o yu kisim long wanpela hap we lo i tok olsem i orait long kisim (Tok Inglis: <i>public domain</i>). Lukim $1 long painimaut moa long dispela.<br />
'''YU NOKEN RAITIM WANPELA SAMTING IGAT COPYRIGHT LONG EN (NARAPELA MANMERI I RAITIM)!'''",
'templatesused'          => '{{PLURAL:$1|Templet|Ol templet}} dispela pes i yusim:',
'templatesusedpreview'   => '{{PLURAL:$1|Templet|Ol templet}} dispela pes i yusim (bihain long dispela senis):',
'template-protected'     => '(itambu)',
'template-semiprotected' => '(i hap tambu)',
'hiddencategories'       => 'Dispela pes emi stap insait long {{PLURAL:$1|wanpela grup hait|$1 grup hait}}:',
'log-fulllog'            => 'Lukim olgeta ripot',

# History pages
'viewpagelogs'     => 'Lukim ol ripot bilong dispela pes',
'previousrevision' => '← Moa olpela',
'nextrevision'     => 'Moa yangpela →',
'cur'              => 'nau',
'histfirst'        => 'Nambawan',
'histlast'         => 'Bilong nau',

# Revision feed
'history-feed-item-nocomment' => '$1 long $2',

# Revision deletion
'rev-delundel'               => 'soim/haitim',
'revdelete-show-file-submit' => 'Yes',
'revdelete-radio-set'        => 'Yes',
'revdelete-radio-unset'      => 'Nogat',
'pagehist'                   => 'Ol senis bilong pes',

# History merging
'mergehistory-from' => 'As pes:',

# Diffs
'lineno'   => 'Lain $1:',
'editundo' => 'go bek',

# Search results
'searchresults'                  => 'Ol painim',
'searchresults-title'            => 'Ol painim long "$1"',
'searchresulttext'               => 'Long moa infomesen bilong painim {{SITENAME}}, lukim [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitleinvalid'          => "Yu painim '''$1'''",
'viewprevnext'                   => 'Lukim ($1 {{int:pipe-separator}} $2) ($3)',
'searchprofile-images'           => 'Media',
'searchprofile-everything'       => 'Olgeta',
'searchprofile-articles-tooltip' => 'Painim long $1',
'searchprofile-project-tooltip'  => 'Painim long $1',
'search-result-size'             => '$1 ({{PLURAL:$2|1 wot|ol $2 wot}})',
'search-redirect'                => '(nupela rot long $1)',
'search-section'                 => '(seksen $1)',
'search-suggest'                 => 'Yu laik tok: $1',
'search-interwiki-default'       => '$1 ol painim:',
'search-interwiki-more'          => '(moa)',
'search-mwsuggest-enabled'       => 'halivim mi',
'search-mwsuggest-disabled'      => 'nogat halivim mi',
'searchall'                      => 'olgeta',
'powersearch'                    => 'Mobeta Painim',
'powersearch-legend'             => 'Mobeta Painim',
'powersearch-ns'                 => 'Painim long ol nem',
'powersearch-redir'              => 'Soim ol nupela rot',
'powersearch-field'              => 'Painim long',
'powersearch-toggleall'          => 'Olgeta',
'powersearch-togglenone'         => 'I nogat wanpela',


# Preferences page
'preferences'               => 'Ol laik',
'mypreferences'             => 'Ol laik bilong mi',
'prefs-edits'               => 'Hamas senis:',
'changepassword'            => 'Senis paswot',
'prefs-skin'                => 'Skin',
'skin-preview'              => 'pes mi senisim, pastaim long raitim',
'datedefault'               => 'Nogat laik',
'prefs-rc'                  => 'Nupela senis',
'prefs-watchlist'           => 'Lukautbuk',
'prefs-watchlist-days-max'  => 'Maximum $1 {{PLURAL:$1|day|days}}',
'prefs-watchlist-edits-max' => 'No moa long: 1000',
'prefs-resetpass'           => 'Senis paswot',
'saveprefs'                 => 'Holim long tingting',
'prefs-editing'             => 'Senisim',
'searchresultshead'         => 'Painim',
'recentchangesdays-max'     => 'No moa long $1 {{PLURAL:$1|de|ol de}}',
'timezoneregion-africa'     => 'Aprika',
'timezoneregion-america'    => 'Amerika',
'timezoneregion-antarctica' => 'Antatika',
'timezoneregion-asia'       => 'Esia',
'timezoneregion-atlantic'   => 'Atlantik solwara',
'timezoneregion-australia'  => 'Ostrelia',
'timezoneregion-europe'     => 'Yurop',
'timezoneregion-indian'     => 'Indian solwara',
'timezoneregion-pacific'    => 'Pasifik solwara',
'prefs-files'               => 'Ol fail',
'prefs-custom-css'          => 'Praivet CSS',
'prefs-custom-js'           => 'Praivet JavaScript',
'youremail'                 => 'E-mel:',
'username'                  => 'Yusanem:',
'uid'                       => 'Yusa ID:',
'yourrealname'              => 'Tru nem:',
'yourlanguage'              => 'Tokples:',
'yourgender'                => 'Man/Meri:',
'gender-male'               => 'Man',
'gender-female'             => 'Meri',
'email'                     => 'E-mel',
'prefs-info'                => 'Liklik infomesen',

# User rights
'editusergroup'           => 'Senisim ol grup bilong yusa',
'userrights-groupsmember' => 'Memba bilong:',
'userrights-reason'       => 'As bilong en:',

# Groups
'group'      => 'Grup:',
'group-user' => 'Ol yusa',
'group-bot'  => 'Ol bot',
'group-all'  => '(olgeta)',

'group-user-member' => 'yusa',
'group-bot-member'  => 'bot',

'grouppage-user' => '{{ns:project}}:Ol yusa',
'grouppage-bot'  => '{{ns:project}}:Ol bot',

# Rights
'right-read'           => 'Ridim ol pes',
'right-edit'           => 'Senisim ol pes',
'right-move'           => 'Surikim ol pes',
'right-movefile'       => 'Surikim ol fail',
'right-upload'         => 'Salim media fail',
'right-delete'         => 'Rausim ol pes',
'right-suppressionlog' => 'Lukim ol praivet ripot',

# User rights log
'rightslog'  => 'Ripot long ol pawa bilong ol yusa',
'rightsnone' => 'i nogat wanpela',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'          => 'ridim dispela pes',
'action-edit'          => 'senisim dispela pes',
'action-move'          => 'surikim dispela pes',
'action-move-subpages' => 'surikim dispela pes, na ol pes ananit long en',
'action-movefile'      => 'surikim dispela fail',
'action-delete'        => 'rausim dispela pes',

# Recent changes
'nchanges'                  => '$1 senis',
'recentchanges'             => 'Nupela senis',
'recentchanges-label-minor' => 'Dispela emi liklik senis',
'rcnote'                    => "Ananit yu lukim '''$1 senis''' long '''$2 de''' igo pinis, na i olsem long $3.",
'rcshowhideminor'           => '$1 ol liklik senis',
'rcshowhidebots'            => '$1 ol bot',
'rcshowhideliu'             => '$1 ol yusa',
'rcshowhideanons'           => '$1 ol IP yusa',
'rcshowhidemine'            => '$1 ol senis bilong mi',
'diff'                      => 'dispela senis',
'hist'                      => 'olgeta senis',
'hide'                      => 'Haitim',
'show'                      => 'Soim',
'minoreditletter'           => 'm',
'newpageletter'             => 'N',
'boteditletter'             => 'b',
'rc_categories'             => 'Soim ol senis insait long ol dispela grup tasol (raitim wantaim "|" namel long wanwan)',
'rc_categories_any'         => 'Olgeta',

# Recent changes linked
'recentchangeslinked'         => 'Ol senis klostu',
'recentchangeslinked-feed'    => 'Ol senis klostu',
'recentchangeslinked-toolbox' => 'Ol senis klostu',
'recentchangeslinked-page'    => 'Nem bilong pes:',

# Upload
'upload'          => 'Salim media fail',
'uploadbtn'       => 'Salim media fail',
'uploaderror'     => 'Salim i kranki',
'uploadlogpage'   => 'Ripot long salim',
'filename'        => 'Nem bilong fail',
'filesource'      => 'As:',
'watchthisupload' => 'Lukautim dispela fail',

'license'            => 'Laisens:',
'license-header'     => 'Laisens',
'upload_source_file' => '(fail long kompyuta bilong yu)',

# Special:ListFiles
'imgfile'        => 'fail',
'listfiles'      => 'Lista bilong ol fail',
'listfiles_date' => 'De',
'listfiles_name' => 'Nem',
'listfiles_user' => 'Yusa',

# File description page
'file-anchor-link'    => 'Fail',
'filehist'            => 'Ol senis bilong dispela fail',
'filehist-deleteall'  => 'rausim olgeta',
'filehist-deleteone'  => 'rausim',
'filehist-current'    => 'bilong nau',
'filehist-datetime'   => 'De/Taim',
'filehist-thumb'      => 'Liklik',
'filehist-user'       => 'Yusa',
'filehist-dimensions' => 'Ol sais',
'filehist-comment'    => 'Tingting',
'filehist-missing'    => 'Fail i no kamap',
'imagelinks'          => 'Ol fail link',
'linkstoimage'        => 'Dispela {{PLURAL:$1|pes i link|$1 pes i link}} long dispela fail:',
'shared-repo-from'    => 'long $1',

# File deletion
'filedelete'                  => 'Rausim $1',
'filedelete-legend'           => 'Rausim fail',
'filedelete-comment'          => 'As bilong en:',
'filedelete-submit'           => 'Rausim',
'filedelete-reason-otherlist' => 'Arapela as bilong en',

# Random page
'randompage' => 'Soim wanpela pes',

# Statistics
'statistics-pages' => 'Ol pes',

'withoutinterwiki-submit' => 'Soim',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories'             => '$1 {{PLURAL:$1|grup|grup}}',
'nmembers'                => '$1 {{PLURAL:$1|memba|memba}}',
'uncategorizedpages'      => 'Ol pes i no stap insait long grup',
'uncategorizedcategories' => 'Ol grup i no stap insait long grup',
'uncategorizedimages'     => 'Ol piksa i no stap insait long grup',
'uncategorizedtemplates'  => 'Ol templet i no stap insait long grup',
'unusedcategories'        => 'Ol grup i no gat samting insait long ol',
'unusedimages'            => 'Ol media (olsem piksa) i no gat wanpela pes i soim ol',
'wantedcategories'        => 'Ol grup i no stap yet tasol igat link i kam long ol',
'wantedpages'             => 'Ol pes i no stap yet tasol igat link i kam long ol',
'mostlinked'              => 'Ol pes i gat planti link i kam long ol',
'mostlinkedcategories'    => 'Ol grup igat planti link i kam long ol',
'mostlinkedtemplates'     => 'Ol templet igat planti link i kam long ol',
'mostcategories'          => 'Ol pes bilong buk istap insait long planti grup',
'listusers'               => 'Lista long ol yusa',
'newpages'                => 'Ol nupela pes',
'newpages-username'       => 'Yusanem:',
'ancientpages'            => 'Ol pes i lapun tru',
'move'                    => 'Surikim',
'movethispage'            => 'Surikim dispela pes',
'unusedcategoriestext'    => 'Ol dispela grup istap yet, tasol i no gat wanpela pes o grup i stap insait long ol.',

# Book sources
'booksources'               => 'Ol as bilong buk',
'booksources-search-legend' => 'Painim long ol buk as',
'booksources-go'            => 'Go',

# Special:Log
'specialloguserlabel'  => 'Yusa:',
'speciallogtitlelabel' => 'Nem:',
'log'                  => 'Ol ripot',

# Special:AllPages
'allpages'       => 'Olgeta pes',
'alphaindexline' => '$1 inap long $2',
'allarticles'    => 'Ol pes',
'allpagessubmit' => 'Go',

# Special:Categories
'categories'         => 'Ol grup',
'categoriespagetext' => 'Ol dispela grup istap.
[[Special:UnusedCategories|Unused categories]] are not shown here.
Also see [[Special:WantedCategories|wanted categories]].',

# Special:LinkSearch
'linksearch-ok' => 'Painim',

# Special:ListUsers
'listusers-submit' => 'Soim',

# Special:Log/newusers
'newuserlogpage' => 'Ripot long ol nupela yusa',

# Special:ListGroupRights
'listgrouprights-group'   => 'Grup',
'listgrouprights-members' => '(lista bilong ol memba)',

# E-mail user
'emailuser'       => 'E-mel dispela yusa',
'emailpage'       => 'E-mel yusa',
'defemailsubject' => '{{SITENAME}} e-mel',
'noemailtitle'    => 'Nogat e-mel',
'emailfrom'       => 'I kam long:',
'emailto'         => 'I go long:',
'emailmessage'    => 'Toksave:',
'emailsend'       => 'Salim',

# Watchlist
'watchlist'            => 'Lukautbuk bilong mi',
'mywatchlist'          => 'Lukautbuk bilong mi',
'watchlistfor2'        => 'Bilong $1 $2',
'nowatchlist'          => 'Nogat wanpela samting istap long lukautbuk bilong yu.',
'watchlistanontext'    => 'Yu mas $1 long lukim o senisim ol samting long lukautbuk bilong yu.',
'watchnologintext'     => 'Yu mas [[Special:UserLogin|login]] long senisim lukautbuk bilong yu.',
'addedwatchtext'       => "Pes \"[[:\$1]]\" igo insait long [[Special:Watchlist|lukautbuk]] bilong yu nau.
Bai yu lukim ol nupela senis long dispela pes, na pes toktok bilong en, long lukautbuk,
na dispela pes bai kamap '''strongpela''' long [[Special:RecentChanges|pes bilong ol nupela senis]]
na olsem bai isi long lukim em.

Sapos yu laik rausim dispela pes long lukautbuk bilong yu bihain, paitim \"Pinis long lukautim\" taim yu lukim pes.",
'removedwatchtext'     => 'Pes "[[:$1]]" i raus pinis long [[Special:Watchlist|lukautbuk bilong yu]].',
'watch'                => 'Lukautim',
'watchthispage'        => 'Lukautim dispela pes',
'unwatch'              => 'Pinis long lukautim',
'unwatchthispage'      => 'Pinis long lukautim',
'watchlist-details'    => '$1 pes istap long lukautbuk (dispela namba i no kaunim ol pes bilong toktok).',
'wlheader-showupdated' => "* Ol pes i senis pinis bihain long taim yu lukim ol igat nem i '''strongpela'''",
'wlshowlast'           => 'Lukim dispela $1 aua $2 de $3',
'watchlist-options'    => 'Ol laik bilong Lukautbuk',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Wet liklik, i go insait long lukautbuk nau...',
'unwatching' => 'Wet liklik, i raus nau long lukautbuk...',

'enotif_reset'                 => 'Makim olgeta pes olsem mi lukim pinis',
'enotif_newpagetext'           => 'Dispela emi nupela pes.',
'enotif_impersonal_salutation' => 'yusa long {{SITENAME}}',
'changed'                      => 'i senisim',
'created'                      => 'i kirapim',
'enotif_subject'               => '$PAGEEDITOR $CHANGEDORCREATED pes $PAGETITLE long {{SITENAME}}',
'enotif_anon_editor'           => 'IP yusa $1',

# Delete
'deletepage'            => 'Rausim dispela pes',
'delete-confirm'        => 'Rausim $1',
'delete-legend'         => 'Rausim',
'dellogpage'            => 'Ripot long rausim ol pes',
'deletecomment'         => 'As bilong en:',
'deletereasonotherlist' => 'Arapela as bilong en',

# Protect
'protectlogpage'            => 'Ripot long tambuim ol pes',
'protectedarticle'          => 'tambuim "[[$1]]"',
'modifiedarticleprotection' => 'senisim tambu bilong "[[$1]]"',
'prot_1movedto2'            => '[[$1]] i surik i go long [[$2]] pinis',
'protectcomment'            => 'As bilong en:',
'protect-othertime'         => 'Arapela taim:',
'protect-othertime-op'      => 'arapela taim',
'protect-otherreason'       => 'Arapela/moa as bilong en',
'protect-otherreason-op'    => 'Arapela as bilong en',

# Restrictions (nouns)
'restriction-edit'   => 'Senisim',
'restriction-move'   => 'Surikim',
'restriction-create' => 'Kirapim',

# Undelete
'undeletelink'              => 'soim/restore',
'undeleteviewlink'          => 'lukim',
'undeletecomment'           => 'As bilong en:',
'undelete-search-submit'    => 'Painim',
'undelete-show-file-submit' => 'Yes',

# Namespace form on various pages
'invert'         => 'Tanbek',
'blanknamespace' => '(Nambawan)',

# Contributions
'contributions'       => 'Ol senis yusa i wokim',
'contributions-title' => 'Ol yusa senis long $1',
'mycontris'           => 'Ol senis mi wokim',
'contribsub2'         => 'Long $1 ($2)',
'uctop'               => '(antap)',
'month'               => 'Long mun (na bifo):',
'year'                => 'Long yia (na bifo):',

'sp-contributions-blocklog' => 'ripot long pasim ol yusa',
'sp-contributions-talk'     => 'toktok',
'sp-contributions-submit'   => 'Painim',

# What links here
'whatlinkshere'            => 'Ol link ikam long hia',
'whatlinkshere-page'       => 'Pes:',
'isredirect'               => 'nupela rot',
'isimage'                  => 'link long piksa',
'whatlinkshere-links'      => '← ol link',
'whatlinkshere-hideredirs' => '$1 ol nupela rot',
'whatlinkshere-hidelinks'  => '$1 ol link',

# Block/unblock
'blockip'            => 'Pasim yusa (Block user)',
'ipboptions'         => '2 awa:2 hours,1 de:1 day,3 de:3 days,1 wik:1 week,2 wik:2 weeks,1 mun:1 month,3 mun:3 months,6 mun:6 months,1 yia:1 year,oltaim:infinite',
'ipbotheroption'     => 'narapela',
'ipblocklist'        => 'Ol IP adres na yusanem i pas',
'ipblocklist-submit' => 'Painim',
'blocklink'          => 'pasim',
'unblocklink'        => 'larim',
'change-blocklink'   => 'senis pasim',
'contribslink'       => 'wok',
'blocklogpage'       => 'Ripot long pasim ol yusa',

# Move page
'move-page'        => 'Surikim $1',
'move-page-legend' => 'Surikim pes',
'movearticle'      => 'Surikim pes:',
'newtitle'         => 'Nupela nem bilong pes:',
'movepagebtn'      => 'Surikim',
'pagemovedsub'     => 'Pes i surik pinis',
'movepage-moved'   => '\'\'\'"$1" i surikim pinis long "$2"\'\'\'',
'articleexists'    => 'Wanpela pes wantaim dispela nem i stap pinis, o dispela nem i no stret.
Yu mas painim narapela nem.',
'talkexists'       => "'''Pes bilong buk i surik pinis, tasol pes bilong toktok i no inap surik, bilong wanem wanpela pes bilong toktok istap pinis wantaim dispela nam.  Yu mas pasim wantaim tupela pes bilong toktok yu yet.'''",
'movedto'          => 'i surik i go long',
'movetalk'         => 'Surikim pes bilong toktok wantaim',
'movelogpage'      => 'Buk bilong ol surik',
'movelogpagetext'  => 'Hia yumi lukim ol pes i surik pinis.',
'movereason'       => 'As bilong en:',
'revertmove'       => 'go bek',

# Namespace 8 related
'allmessages'               => 'Ol toksave bilong sistem',
'allmessagesname'           => 'Nem',
'allmessages-filter-all'    => 'Olgeta',
'allmessages-language'      => 'Tokples:',
'allmessages-filter-submit' => 'Go',

# Thumbnails
'thumbnail-more' => 'Moa bikpela',

# Tooltip help for the actions
'tooltip-pt-userpage'            => 'Pes bilong yu (Your user page)',
'tooltip-pt-preferences'         => 'Ol laik bilong yu (Your preferences)',
'tooltip-pt-mycontris'           => 'Lista long ol senis yu wokim (List of your contributions)',
'tooltip-pt-logout'              => 'Logaut',
'tooltip-ca-talk'                => 'Toktok long dispela pes',
'tooltip-ca-addsection'          => 'Kirapim nupela seksen',
'tooltip-ca-viewsource'          => 'Dispela pes i tambu long senisim.
Yu inap lukim as tok bilong em',
'tooltip-ca-protect'             => 'Tambuim dispela pes',
'tooltip-ca-delete'              => 'Rausim dispela pes',
'tooltip-ca-move'                => 'Surikim dispela pes (Move this page)',
'tooltip-ca-watch'               => 'Skruim dispela pes long lukautbuk bilong yu',
'tooltip-ca-unwatch'             => 'Rausim dispela pes long lukautbuk bilong yu (Remove this page from your watchlist)',
'tooltip-search'                 => 'Painim long {{SITENAME}}',
'tooltip-search-fulltext'        => 'Painim dispela hap tok insait long olgeta pes',
'tooltip-p-logo'                 => 'Lukim fran pes (Visit the main page)',
'tooltip-n-mainpage'             => 'Lukim fran pes (Visit the main page)',
'tooltip-n-mainpage-description' => 'Lukim fran pes (Visit the main page)',
'tooltip-n-help'                 => 'Ples long painim halivim',
'tooltip-feed-rss'               => 'RSS fid bilong dispela pes',
'tooltip-feed-atom'              => 'Atom fid bilong dispela pes',
'tooltip-t-emailuser'            => 'Salim e-mel long dispela yusa',
'tooltip-t-upload'               => 'Sutim ol fail olsem piksa igo insait',
'tooltip-t-specialpages'         => 'Lista long ol sipesol pes (List of all special pages)',
'tooltip-ca-nstab-main'          => 'Lukim stori (View the content page)',
'tooltip-ca-nstab-user'          => 'Lukim pes bilong yusa',
'tooltip-ca-nstab-media'         => 'Lukim media pes (View the media page)',
'tooltip-ca-nstab-image'         => 'Lukim pes bilong fail',
'tooltip-ca-nstab-template'      => 'Lukim templet',
'tooltip-ca-nstab-category'      => 'Lukim grup',
'tooltip-save'                   => 'Raitim senis bilong yu (Save your changes)',

# Attribution
'siteuser' => '{{SITENAME}} yusa $1',
'others'   => 'ol narapela',

# Browsing diffs
'previousdiff' => '← Moa olpela senis',
'nextdiff'     => 'Moa nupela senis →',

# Media information
'show-big-image' => 'Bikpela piksa',

# Special:NewFiles
'showhidebots' => '($1 ol bot)',
'ilsubmit'     => 'Painim',

# Metadata
'metadata' => 'Metadata',

# EXIF tags
'exif-imagedescription' => 'Nem bilong piksa',

'exif-meteringmode-255' => 'Narapela',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'olgeta',
'namespacesall' => 'ol',
'monthsall'     => 'olgeta',
'limitall'      => 'olgeta',

# Scary transclusion
'scarytranscludetoolong' => '[URL i longpela tumas]',

# action=purge
'confirm_purge_button' => 'OK',

# Multipage image navigation
'imgmultigo' => 'Go!',

# Table pager
'table_pager_limit_submit' => 'Go',

# Watchlist editor
'watchlistedit-numitems'       => 'Igat {{PLURAL:$1|1 samting|$1 samting}} insait long lukautbuk bilong yu (ol pes bilong toktok i no stap long dispela namba).',
'watchlistedit-noitems'        => 'Nogat wanpela samting long lukautbuk bilong yu.',
'watchlistedit-normal-title'   => 'Senisim lukautbuk',
'watchlistedit-normal-legend'  => 'Rausim ol samting long lukautbuk',
'watchlistedit-normal-explain' => 'Ananit yu lukim ol samting long lukautbuk. Long rausim wanpela samting, makim liklik boxis long sait bilong en, na paitim "Rausim ol samting".  Na tu yu inap [[Special:EditWatchlist/raw|senisim lukautbuk long wanpela bokis]].',
'watchlistedit-normal-submit'  => 'Rausim ol samting',
'watchlistedit-normal-done'    => '{{PLURAL:$1|Wanpela|$1}} samting i raus pinis long lukautbuk bilong yu:',
'watchlistedit-raw-title'      => 'Senisim lukautbuk long wanpela bokis',
'watchlistedit-raw-legend'     => 'Senisim lukautbuk insait long wanpela bokis',
'watchlistedit-raw-explain'    => 'Ananit yu lukim ol samting long lukautbuk bilong yu insait long wanpela bokis.
	Yu inap putim sampela moa samting igo insait, o rausim sampela ol samting. Putim
	wanpela samting i go long wanwan lain.  Taim yu pinisim ol senis, paitim "Senisim lukautbuk".
	Na tu yu inap [[Special:EditWatchlist|senisim lukautbuk long planti liklik bokis]].',
'watchlistedit-raw-titles'     => 'Ol samting:',
'watchlistedit-raw-submit'     => 'Senisim lukautbuk',
'watchlistedit-raw-done'       => 'Lukautbuk bilong yu i senis pinis.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|wanpela|$1}} samting igo insait:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|Wanpela|$1}} samting i raus pinis:',

# Watchlist editing tools
'watchlisttools-view' => 'Lukim ol senis',
'watchlisttools-edit' => 'Lukim na senisim lukautbuk',
'watchlisttools-raw'  => 'Senisim lukautbuk insait long wanpela bokis',

# Special:Version
'version-other'            => 'Narapela',
'version-license'          => 'Laisens',
'version-poweredby-others' => 'ol narapela',

# Special:FilePath
'filepath-page'   => 'Fail:',
'filepath-submit' => 'Go',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'Nem bilong fail:',
'fileduplicatesearch-submit'   => 'Painim',

# Special:SpecialPages
'specialpages'                 => 'Ol sipesol pes',
'specialpages-group-other'     => 'Ol narapela sipesol pes',
'specialpages-group-pages'     => 'Lista long ol pes',
'specialpages-group-pagetools' => 'Ol tul bilong pes',

# Special:Tags
'tags-edit' => 'senisim',

# Special:ComparePages
'compare-page1' => 'Pes 1',
'compare-page2' => 'Pes 2',

# HTML forms
'htmlform-selectorother-other' => 'Narapela',

);
