<?php

/**
 * CategorySelect
 *
 * A CategorySelect extension for MediaWiki
 * Provides an interface for managing categories in article without editing whole article
 *
 * @author Maciej Błaszkowski (Marooned) <marooned at wikia-inc.com>
 * @date 2009-01-13
 * @copyright Copyright (C) 2009 Maciej Błaszkowski, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @package MediaWiki
 *
 * To activate this functionality, place this file in your extensions/
 * subdirectory, and add the following line to LocalSettings.php:
 *     require_once("$IP/extensions/wikia/CategorySelect/CategorySelect.php");
 */

$messages = array();

$messages['en'] = array(
	'categoryselect-code-view' => 'Code view',
	'categoryselect-visual-view' => 'Visual view',
	'categoryselect-infobox-caption' => 'Category options',
	'categoryselect-infobox-category' => 'Provide the name of the category:',
	'categoryselect-infobox-sortkey' => 'Alphabetize this article on the "$1" category page under the name:',
	'categoryselect-addcategory-button' => 'Add category',
	'categoryselect-suggest-hint' => 'Press Enter when done',
	'categoryselect-tooltip' => "'''New!''' Category tagging toolbar. Try it out or see [[Help:CategorySelect|help]] to learn more",
	'categoryselect-unhandled-syntax' => 'Unhandled syntax detected - switching back to visual mode impossible.',
	'categoryselect-edit-summary' => 'Adding categories',
	'categoryselect-empty-name' => 'Provide category name (part before |)',
	'categoryselect-button-save' => 'Save',
	'categoryselect-button-cancel' => 'Cancel',
	'categoryselect-error-not-exist' => 'Article [id=$1] does not exist.',
	'categoryselect-error-user-rights' => 'User rights error.',
	'categoryselect-error-db-locked' => 'Database is locked.',
	'categoryselect-desc' => 'Provides an interface for managing categories in article without editing whole article.',
	'tog-disablecategoryselect' => 'Disable Category Tagging'
);

/** Message documentation (Message documentation)
 * @author EugeneZelenko
 */
$messages['qqq'] = array(
	'categoryselect-button-save' => '{{Identical|Save}}',
	'categoryselect-button-cancel' => '{{Identical|Cancel}}',
);

/** Afrikaans (Afrikaans)
 * @author Naudefj
 */
$messages['af'] = array(
	'categoryselect-addcategory-button' => 'Voeg kategorie by',
	'categoryselect-suggest-hint' => "Druk 'Enter' as u klaar is",
	'categoryselect-button-save' => 'Stoor',
	'categoryselect-button-cancel' => 'Kanselleer',
	'categoryselect-error-not-exist' => 'Artikel [id=$1] bestaan nie.',
	'categoryselect-error-db-locked' => 'Databasis is gesluit.',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author EugeneZelenko
 */
$messages['be-tarask'] = array(
	'categoryselect-button-save' => 'Захаваць',
	'categoryselect-button-cancel' => 'Адмяніць',
);

/** Breton (Brezhoneg)
 * @author Y-M D
 */
$messages['br'] = array(
	'categoryselect-visual-view' => 'Sell dre gwelet',
	'categoryselect-infobox-caption' => 'Dibarzhioù ar rummad',
	'categoryselect-infobox-category' => 'Roit anv ar rummad :',
	'categoryselect-addcategory-button' => 'Ouzhpennañ rummadoù',
	'categoryselect-suggest-hint' => 'Pouezit war "Enter" evit echuiñ',
	'categoryselect-edit-summary' => 'Ouzhpennañ ur rummad',
	'categoryselect-button-save' => 'Enrollañ',
	'categoryselect-button-cancel' => 'Nullañ',
	'categoryselect-error-not-exist' => "N'eus ket eus ar pennad [id=$1].",
	'categoryselect-error-user-rights' => 'Fazi en aotreoù implijerien.',
	'categoryselect-error-db-locked' => 'Stanket eo ar bank roadennoù',
);

/** German (Deutsch) */
$messages['de'] = array(
	'categoryselect-code-view' => 'Quelltext',
	'categoryselect-visual-view' => 'Grafische Ansicht',
	'categoryselect-infobox-caption' => 'Kategorie-Optionen',
	'categoryselect-infobox-category' => 'Gib den Namen der Kategorie an:',
	'categoryselect-infobox-sortkey' => 'Ordne diesen Artikel in der Kategorie „$1“ unter folgendem Namen ein:',
	'categoryselect-addcategory-button' => 'Kategorie hinzufügen',
	'categoryselect-suggest-hint' => 'Mit Eingabetaste beenden',
	'categoryselect-tooltip' => "'''Neu!:''' Unsere KategorieAuswahl-Leiste. Probier sie aus oder lies die [[Hilfe:KategorieAuswahl|Hilfe]] für weitere Informationen.",
	'categoryselect-unhandled-syntax' => 'Nicht unterstützte Syntax entdeckt - Wechsel in grafische Ansicht nicht möglich.',
	'categoryselect-edit-summary' => 'Kategorien hinzufügen',
	'categoryselect-empty-name' => 'Kategorie-Name (der Teil vor |)',
	'categoryselect-button-save' => 'Speichern',
	'categoryselect-button-cancel' => 'Abbrechen',
	'categoryselect-error-not-exist' => 'Der angegebene Artikel [id=$1] existiert nicht (mehr).',
	'categoryselect-error-user-rights' => 'Keine ausreichenden Benutzerrechte.',
	'categoryselect-error-db-locked' => 'Die Datenbank ist vorübergehend gesperrt.',
	'tog-disablecategoryselect' => 'Vereinfachtes Kategorisieren ausschalten',
);

/** Spanish (Español) */
$messages['es'] = array(
	'categoryselect-code-view' => 'Vista de código',
	'categoryselect-visual-view' => 'Vista visual',
	'categoryselect-infobox-caption' => 'Opciones de categoría',
	'categoryselect-infobox-category' => 'Pon el nombre de la categoría:',
	'categoryselect-infobox-sortkey' => 'Clasifica este artículo en la categoría "$1" con el nombre:',
	'categoryselect-addcategory-button' => 'Añadir categoría',
	'categoryselect-suggest-hint' => 'Presiona Enter cuando termines',
	'categoryselect-tooltip' => "'''¡Nuevo!''' Barra de etiquetas de categoría. Pruebala o échale un vistazo a [[Help:CategorySelect|ayuda]] para aprender más",
	'categoryselect-unhandled-syntax' => 'Detectada sintaxis inmanipulable - imposible cambiar al modo visual.',
	'categoryselect-edit-summary' => 'Añadiendo categorías',
	'categoryselect-empty-name' => 'Pon el nombre de la categoría (parte antes de |)',
	'categoryselect-button-save' => 'Guardar',
	'categoryselect-button-cancel' => 'Cancelar',
	'tog-disablecategoryselect' => 'Desactivar el Etiquetador de Categorías (Category Tagging)',
);

/** Persian (فارسی) */
$messages['fa'] = array(
	'categoryselect-addcategory-button' => 'افزودن رده',
	'categoryselect-suggest-hint' => 'پس از اتمام دکمه اینتر را فشار دهید',
	'categoryselect-edit-summary' => 'افزودن رده',
	'categoryselect-button-save' => 'ذخیره رده',
	'categoryselect-button-cancel' => 'لغو',
);

/** Finnish (Suomi)
 * @author Crt
 */
$messages['fi'] = array(
	'categoryselect-code-view' => 'Näytä koodi',
	'categoryselect-visual-view' => 'Näytä visuaalisena',
	'categoryselect-infobox-caption' => 'Luokan asetukset',
	'categoryselect-infobox-category' => 'Syötä luokan nimi:',
	'categoryselect-infobox-sortkey' => 'Aakkosta tämä artikkeli "$1" luokkasivulle nimellä:',
	'categoryselect-addcategory-button' => 'Lisää luokka',
	'categoryselect-suggest-hint' => 'Paina Enter, kun olet valmis',
	'categoryselect-tooltip' => "'''Uusi!''' Luokan lisäystyökalurivi. Testaa sitä tai katso [[Help:CategorySelect|ohjesta]] lisätietoa.",
	'categoryselect-unhandled-syntax' => 'Käsittelemätön syntaksi havaittu - visuaalisen moodin takaisin kytkentä on mahdotonta.',
	'categoryselect-edit-summary' => 'Luokkien lisääminen',
	'categoryselect-empty-name' => 'Syötä luokan nimi (osa ennen |)',
	'categoryselect-button-save' => 'Tallenna',
	'categoryselect-button-cancel' => 'Peruuta',
	'tog-disablecategoryselect' => 'peru luokkien lisäys',
);

/** French (Français)
 * @author Peter17
 */
$messages['fr'] = array(
	'categoryselect-code-view' => 'Voir le code',
	'categoryselect-visual-view' => 'Vue visuelle',
	'categoryselect-infobox-caption' => 'Options de la catégorie',
	'categoryselect-infobox-category' => 'Ecrivez le nom de la catégorie :',
	'categoryselect-infobox-sortkey' => 'Mettre cet article dans la catégorie « $1 » sous le nom suivant :',
	'categoryselect-addcategory-button' => 'Ajouter des catégories',
	'categoryselect-suggest-hint' => 'Taper sur "Entrée" pour finir',
	'categoryselect-tooltip' => "'''Nouveau ! :''' Barre d'outils de sélection de catégorie. Essayez-la ou lisez [[Help:CategorySelect|l'aide]] pour en apprendre plus.",
	'categoryselect-unhandled-syntax' => "Il y a un problème de syntaxe inconnue. Il n'est pas possible de changer en vue graphique.",
	'categoryselect-edit-summary' => 'Ajouter une catégorie',
	'categoryselect-empty-name' => "Nom de la catégorie (ce qu'on écrit devant |)",
	'categoryselect-button-save' => 'Enregistrer',
	'categoryselect-button-cancel' => 'Annuler',
	'categoryselect-error-not-exist' => "L'article [id=$1] n'existe pas.",
	'categoryselect-error-user-rights' => "Erreur de droits d'utilisateurs.",
	'categoryselect-error-db-locked' => 'La base de données est verrouillée.',
	'categoryselect-desc' => "Fournit une interface permettant de gérer les catégories d'un article sans avoir à éditer tout l'article.",
	'tog-disablecategoryselect' => 'Désactiver le balisage des catégories',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'categoryselect-code-view' => 'Vista do código',
	'categoryselect-visual-view' => 'Vista visual',
	'categoryselect-infobox-caption' => 'Opcións de categoría',
	'categoryselect-infobox-category' => 'Escriba o nome da categoría:',
	'categoryselect-infobox-sortkey' => 'Clasificar este artigo na categoría "$1" co nome:',
	'categoryselect-addcategory-button' => 'Engadir a categoría',
	'categoryselect-suggest-hint' => 'Prema a tecla Intro cando remate',
	'categoryselect-tooltip' => "'''Novo!''' Barra de ferramentas de selección de categoría. Próbaa ou olle a [[Help:CategorySelect|axuda]] para saber máis",
	'categoryselect-unhandled-syntax' => 'Detectouse unha sintaxe descoñecida; non é posible voltar ao modo visual.',
	'categoryselect-edit-summary' => 'Inserción de categorías',
	'categoryselect-empty-name' => 'Dea o nome da categoría (o que se escribe antes de |)',
	'categoryselect-button-save' => 'Gardar',
	'categoryselect-button-cancel' => 'Cancelar',
	'categoryselect-error-not-exist' => 'O artigo [id=$1] non existe.',
	'categoryselect-error-user-rights' => 'Erro de dereitos de usuario.',
	'categoryselect-error-db-locked' => 'A base de datos está bloqueada.',
	'categoryselect-desc' => 'Proporciona unha interface para xestionar as categorías dos artigos sen editar todo o artigo.',
	'tog-disablecategoryselect' => 'Desactivar a etiquetaxe de categorías',
);

/** Hungarian (Magyar)
 * @author Glanthor Reviol
 */
$messages['hu'] = array(
	'categoryselect-button-save' => 'Mentés',
	'categoryselect-button-cancel' => 'Mégse',
);

/** Japanese (日本語)
 * @author Tommy6
 */
$messages['ja'] = array(
	'categoryselect-code-view' => 'ウィキコードを表示',
	'categoryselect-visual-view' => 'ビジュアルモードで表示',
	'categoryselect-infobox-caption' => 'カテゴリのオプション',
	'categoryselect-infobox-category' => 'カテゴリ名を入力',
	'categoryselect-infobox-sortkey' => '"$1"カテゴリで記事のソートに使用する名前を入力',
	'categoryselect-addcategory-button' => 'カテゴリを追加',
	'categoryselect-suggest-hint' => 'エンターキーを押すと終了',
	'categoryselect-tooltip' => "'''New!''' カテゴリタギングツールバー。詳しくは[[Help:カテゴリセレクト|ヘルプ]]を参照してください。",
	'categoryselect-unhandled-syntax' => '処理できない構文が検出されました - ビジュアルモードに移行できません。',
	'categoryselect-edit-summary' => 'カテゴリを追加',
	'categoryselect-empty-name' => 'カテゴリ名を入力（"|"より前の部分）',
	'categoryselect-button-save' => '保存',
	'categoryselect-button-cancel' => '取り消し',
	'categoryselect-error-not-exist' => '記事 [id=$1] が存在しません。',
	'categoryselect-error-user-rights' => '利用者権限のエラーです。',
	'categoryselect-error-db-locked' => 'データベースがロックされています',
	'categoryselect-desc' => '記事を編集することなくカテゴリを操作するためのインターフェースを提供する',
	'tog-disablecategoryselect' => 'カテゴリタグ付け機能を無効にする。',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'categoryselect-code-view' => 'Коден изглед',
	'categoryselect-visual-view' => 'Визуелен изглед',
	'categoryselect-infobox-caption' => 'Нагодувања за категории',
	'categoryselect-infobox-category' => 'Наведете го името на категоријата:',
	'categoryselect-infobox-sortkey' => 'Азбучно заведи ја статијава во категоријата „$1“ под името:',
	'categoryselect-addcategory-button' => 'Додај категорија',
	'categoryselect-suggest-hint' => 'Пристиснете Enter кога сте готови',
	'categoryselect-tooltip' => "'''Ново!''' Алатник за означување на категории. Испробајте го или одете на [[Help:CategorySelect|помош]] за да дознаете повеќе",
	'categoryselect-unhandled-syntax' => 'Пронајдена е необработена синтакса - не можам да ве вратам во визуелен режим.',
	'categoryselect-edit-summary' => 'Додавање на категории',
	'categoryselect-empty-name' => 'Наведете има на категоријата (делот пред |)',
	'categoryselect-button-save' => 'Зачувај',
	'categoryselect-button-cancel' => 'Откажи',
	'categoryselect-error-not-exist' => 'Статијата [id=$1] не постои.',
	'categoryselect-error-user-rights' => 'Грешка со корисничките права.',
	'categoryselect-error-db-locked' => 'Базата на податоци е заклучена.',
	'categoryselect-desc' => 'Дава интерфејс за раководење со категориите во една статија без да треба да се уредува целата статија.',
	'tog-disablecategoryselect' => 'Оневозможи означување на категории',
);

/** Dutch (Nederlands)
 * @author Siebrand
 */
$messages['nl'] = array(
	'categoryselect-code-view' => 'Wikitekstweergave',
	'categoryselect-visual-view' => 'Visuele weergave',
	'categoryselect-infobox-caption' => 'Categoriemogelijkheden',
	'categoryselect-infobox-category' => 'Geef de naam van een categorie op:',
	'categoryselect-infobox-sortkey' => 'Rngschik deze pagina in de categoriepagina "$1" onder:',
	'categoryselect-addcategory-button' => 'Categorie toevoegen',
	'categoryselect-suggest-hint' => 'Druk "Enter" als u klaar bent',
	'categoryselect-tooltip' => "'''Nieuw!''' Werkbalk voor categorielabels.
Probeer het uit of zie [[Help:CategorySelect|help]] voor meer informatie.",
	'categoryselect-unhandled-syntax' => 'Er is ongeldige wikitekst gedetecteerd.
Terugschakelen naar visuele weergave is niet mogelijk.',
	'categoryselect-edit-summary' => 'Bezig met het toevoegen van categorieën',
	'categoryselect-empty-name' => 'Geef de categoriemaan op (het deel voor "|")',
	'categoryselect-button-save' => 'Opslaan',
	'categoryselect-button-cancel' => 'Annuleren',
	'categoryselect-error-not-exist' => 'De pagina [id=$1] bestaat niet.',
	'categoryselect-error-user-rights' => 'Fout in de gebruikersrechten.',
	'categoryselect-error-db-locked' => 'De database zit op slot.',
	'categoryselect-desc' => 'Biedt een interface voor het beheren van categorieën in een pagina zonder de hele pagina te bewerken.',
	'tog-disablecategoryselect' => 'Categorielabels uitschakelen',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'categoryselect-code-view' => 'Visualisé ël còdes',
	'categoryselect-visual-view' => 'Visualisassion visual',
	'categoryselect-infobox-caption' => 'Opsion ëd categorìa',
	'categoryselect-infobox-category' => 'Dà ël nòm ëd la categorìa',
	'categoryselect-infobox-sortkey' => 'Buté st\'artìcol-sì ant la pàgina ëd categorìa "$1" an órdin alfabétich sota ël nòm:',
	'categoryselect-addcategory-button' => 'Gionta categorìa',
	'categoryselect-suggest-hint' => 'Sgnaché su Mandé quand fàit',
	'categoryselect-tooltip' => "'''Neuv!''' Bara dj'utiss ëd j'etichëtte ëd categorìa. Ch'a la preuva o ch'a varda [[Help:CategorySelect|agiut]] për savèjne ëd pi",
	'categoryselect-unhandled-syntax' => "Trovà sintassi pa gestìa - a l'é pa possìbil torné andré a modalità visual.",
	'categoryselect-edit-summary' => 'Gionté categorìe',
	'categoryselect-empty-name' => 'Dé nòm a la categorìa (part prima |)',
	'categoryselect-button-save' => 'Salva',
	'categoryselect-button-cancel' => 'Scancelé',
	'categoryselect-error-not-exist' => "L'artìcol [id=$1] a esist pa.",
	'categoryselect-error-user-rights' => "Eror dij drit dj'utent.",
	'categoryselect-error-db-locked' => "La base ëd dàit a l'é blocà.",
	'categoryselect-desc' => "A dà n'antërfacia për gestì categorìe ant j'artìcoj sensa modifiché tut l'artìcol.",
	'tog-disablecategoryselect' => 'Disabìlita etichëtté categorìe',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Jesielt
 */
$messages['pt-br'] = array(
	'categoryselect-addcategory-button' => 'Adicione uma categoria',
	'categoryselect-suggest-hint' => 'Pressione "Enter" depois de digitar',
	'categoryselect-button-save' => 'Salvar',
	'categoryselect-button-cancel' => 'Cancelar',
);

/** Russian (Русский)
 * @author Lockal
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'categoryselect-code-view' => 'Просмотр кода',
	'categoryselect-visual-view' => 'Визуальный просмотр',
	'categoryselect-infobox-caption' => 'Настройки категории',
	'categoryselect-infobox-category' => 'Укажите имя категории:',
	'categoryselect-infobox-sortkey' => 'Приводить эту статью на странице категории «$1» под следующем именем:',
	'categoryselect-addcategory-button' => 'Добавить категорию',
	'categoryselect-suggest-hint' => 'Нажмите Enter, когда закончите',
	'categoryselect-tooltip' => "'''Новое!''' Панель категоризации. Попробуйте. Подробнее см. в [[Help:CategorySelect|справке]]",
	'categoryselect-unhandled-syntax' => 'Обнаружен неподдерживаемый синтаксис — невозможно вернуть назад к наглядному режиму.',
	'categoryselect-edit-summary' => 'Добавление категорий',
	'categoryselect-empty-name' => 'Укажите название категории (часть до |)',
	'categoryselect-button-save' => 'Сохранить',
	'categoryselect-button-cancel' => 'Отмена',
	'categoryselect-error-not-exist' => 'Статья [id=$1] не существует.',
	'categoryselect-error-user-rights' => 'Ошибка прав участника.',
	'categoryselect-error-db-locked' => 'База данных заблокирована.',
	'categoryselect-desc' => 'Предоставляет интерфейс для управления категориями в статье без редактирования всей статьи.',
	'tog-disablecategoryselect' => 'Отключить Category Taging',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'categoryselect-button-save' => 'భద్రపరచు',
	'categoryselect-button-cancel' => 'రద్దుచేయి',
);

/** Ukrainian (Українська)
 * @author Prima klasy4na
 */
$messages['uk'] = array(
	'categoryselect-infobox-category' => 'Вкажіть назву категорії:',
	'categoryselect-addcategory-button' => 'Додати категорію',
	'categoryselect-button-save' => 'Зберегти',
	'categoryselect-button-cancel' => 'Скасувати',
	'categoryselect-error-not-exist' => 'Статті [id=$1] не існує.',
	'categoryselect-error-user-rights' => 'Помилка прав користувача.',
	'categoryselect-desc' => 'Забезпечує інтерфейс для управління категоріями у статті без редагування всієї статті.',
);

/** Chinese (中文) */
$messages['zh'] = array(
	'categoryselect-infobox-caption' => '分類選項',
	'categoryselect-infobox-category' => '分類的名稱',
	'categoryselect-infobox-sortkey' => '此文章在"$1"分類中使用以下的名義排序:',
	'categoryselect-addcategory-button' => '增加分類',
	'categoryselect-suggest-hint' => '完成時請鍵入＜ＥＮＴＥＲ＞',
	'categoryselect-button-save' => '儲存',
	'categoryselect-button-cancel' => '取消',
);

