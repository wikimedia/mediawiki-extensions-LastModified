<?php
/**
 * Wikimedia Foundation
 *
 * LICENSE
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * @author Katie Horn <khorn@wikimedia.org>, Jeremy Postlethwaite <jpostlethwaite@wikimedia.org>
 */

/**
 * Internationalisation for LastModified extension
 */

$messages = array();

/** English
 * @author Katie Horn, Jeremy Postlethwaite
 */
$messages['en'] = array(
	'lastmodified-desc' => 'Generates last modified times for pages',
	'lastmodified' => 'Last Modified',
	'lastmodified-title-tag' => 'View the revision history for this page.',
	'lastmodified-seconds' => 'Last updated {{PLURAL:$1|$1 second|$1 seconds}} ago',
	'lastmodified-minutes' => 'Last updated {{PLURAL:$1|$1 minute|$1 minutes}} ago',
	'lastmodified-hours' => 'Last updated {{PLURAL:$1|$1 hour|$1 hours}} ago',
	'lastmodified-days' => 'Last updated {{PLURAL:$1|$1 day|$1 days}} ago',
	'lastmodified-months' => 'Last updated {{PLURAL:$1|$1 month|$1 months}} ago',
	'lastmodified-years' => 'Last updated {{PLURAL:$1|$1 year|$1 years}} ago',
);

/** Message documentation (Message documentation)
 * @author Beta16
 * @author Jeremy Postlethwaite
 * @author Lloffiwr
 * @author Shirayuki
 */
$messages['qqq'] = array(
	'lastmodified-desc' => '{{desc|name=Last Modified|url=http://www.mediawiki.org/wiki/Extension:LastModified}}',
	'lastmodified' => '{{doc-special|LastModified}}
{{Identical|Last modified}}',
	'lastmodified-title-tag' => 'Title tag for the link to the revision history.',
	'lastmodified-seconds' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of seconds
{{Related|Lastmodified}}',
	'lastmodified-minutes' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of minutes
{{Related|Lastmodified}}',
	'lastmodified-hours' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of hours
{{Related|Lastmodified}}',
	'lastmodified-days' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of days
{{Related|Lastmodified}}',
	'lastmodified-months' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of months
{{Related|Lastmodified}}',
	'lastmodified-years' => 'Text displayed on page if page to show how long ago the page was updated. Parameters:
* $1 - number of years
{{Related|Lastmodified}}',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'lastmodified-desc' => 'Xenera les hores del últimu cambiu de les páxines',
	'lastmodified' => 'Últimu cambiu',
	'lastmodified-title-tag' => "Ver el historial de revisiones d'esta páxina.",
	'lastmodified-seconds' => 'Últimu anovamientu hai {{PLURAL:$1|$1 segundu|$1 segundos}}',
	'lastmodified-minutes' => 'Últimu anovamientu hai {{PLURAL:$1|$1 minutu|$1 minutos}}',
	'lastmodified-hours' => 'Últimu anovamientu hai {{PLURAL:$1|$1 hora|$1 hores}}',
	'lastmodified-days' => 'Últimu anovamientu hai {{PLURAL:$1|$1 día|$1 díes}}',
	'lastmodified-months' => 'Últimu anovamientu hai {{PLURAL:$1|$1 mes|$1 meses}}',
	'lastmodified-years' => 'Últimu anovamientu hai {{PLURAL:$1|$1 añu|$1 años}}',
);

/** Bashkir (башҡортса)
 * @author Haqmar
 */
$messages['ba'] = array(
	'lastmodified' => 'Һуңғы үҙгәртеү',
	'lastmodified-seconds' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 секунд}} элек', # Fuzzy
	'lastmodified-minutes' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 минут}} элек', # Fuzzy
	'lastmodified-hours' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 сәғәт}} элек', # Fuzzy
	'lastmodified-days' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 көн}} элек', # Fuzzy
	'lastmodified-months' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 ай}} элек', # Fuzzy
	'lastmodified-years' => 'Һуңғы үҙгәртеү {{PLURAL:$1|$1 йыл}} элек', # Fuzzy
);

/** Belarusian (Taraškievica orthography) (беларуская (тарашкевіца)‎)
 * @author EugeneZelenko
 * @author Wizardist
 */
$messages['be-tarask'] = array(
	'lastmodified-desc' => 'Генэруецца час апошняй зьмены для старонак',
	'lastmodified' => 'Зьмененыя апошнімі',
	'lastmodified-title-tag' => 'Паказаць апошнюю вэрсію гэтай старонкі.',
	'lastmodified-seconds' => 'Апошніяе абнаўленьне — {{PLURAL:$1|$1 сэкунду|$1 сэкунды|$1 сэкундаў}} таму',
	'lastmodified-minutes' => 'Апошняе абнаўленьне — {{PLURAL:$1|$1 хвіліну|$1 хвіліны|$1 хвілінаў}} таму',
	'lastmodified-hours' => 'Апошніяе абнаўленьне — {{PLURAL:$1|$1 гадзіну|$1 гадзіны|$1 гадзінаў}} таму',
	'lastmodified-days' => 'Апошняе абнаўленьне — {{PLURAL:$1|$1 дзень|$1 дні|$1 дзён}} таму',
	'lastmodified-months' => 'Апошніяе абнаўленьне — {{PLURAL:$1|$1 месяц|$1 месяцы|$1 месяцаў}} таму',
	'lastmodified-years' => 'Апошніяе абнаўленьне — {{PLURAL:$1|$1 год|$1 гады|$1 гадоў}} таму',
);

/** Breton (brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'lastmodified' => 'Kemmet da ziwezhañ',
	'lastmodified-title-tag' => 'Gwelet istor an adweladennoù evit ar pennad-mañ.',
	'lastmodified-seconds' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 eilenn|$1 eilenn}} zo',
	'lastmodified-minutes' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 vunutenn|$1 munutenn}} zo',
	'lastmodified-hours' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 eurvezh|$1 eurvezh}} zo',
	'lastmodified-days' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 devezh|$1 devezh}} zo',
	'lastmodified-months' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 miz|$1 miz}} zo',
	'lastmodified-years' => 'Hizivaet da ziwezhañ {{PLURAL:$1|$1 bloaz|$1 bloaz}} zo',
);

/** Catalan (català)
 * @author Martorell
 */
$messages['ca'] = array(
	'lastmodified' => 'Darrera modificació de la pàgina: $1.',
);

/** Chechen (нохчийн)
 * @author Умар
 */
$messages['ce'] = array(
	'lastmodified-minutes' => 'Карлайаьккхина {{PLURAL:$1|$1 минут}} хьалха', # Fuzzy
	'lastmodified-hours' => 'Карлайаьккхина {{PLURAL:$1|$1 сахьт}} хьалха', # Fuzzy
	'lastmodified-days' => 'Карлайаьккхина {{PLURAL:$1|$1 де}} хьалха', # Fuzzy
	'lastmodified-months' => 'Карлайаьккхина {{PLURAL:$1|$1 бутт}} хьалха', # Fuzzy
	'lastmodified-years' => 'Карлаяьккхина {{PLURAL:$1|$1 шо}} хьалха', # Fuzzy
);

/** Czech (česky)
 * @author Jkjk
 */
$messages['cs'] = array(
	'lastmodified-desc' => 'Přidává na stránku čas od poslední změny',
	'lastmodified' => 'Poslední změna',
	'lastmodified-title-tag' => 'Zobrazit historii verzí této stránky.',
	'lastmodified-seconds' => 'Naposledy změněno před {{PLURAL:$1|$1 sekundou|$1 sekundami}}',
	'lastmodified-minutes' => 'Naposledy změněno před {{PLURAL:$1|$1 minutou|$1 minutami}}',
	'lastmodified-hours' => 'Naposledy změněno před {{PLURAL:$1|$1 hodinou|$1 hodinami}}',
	'lastmodified-days' => 'Naposledy změněno před {{PLURAL:$1|$1 dnem|$1 dny}}',
	'lastmodified-months' => 'Naposledy změněno před {{PLURAL:$1|$1 měsícem|$1 měsíci}}',
	'lastmodified-years' => 'Naposledy změněno před {{PLURAL:$1|$1 rokem|$1 roky}}',
);

/** Danish (dansk)
 * @author Christian List
 */
$messages['da'] = array(
	'lastmodified-desc' => 'Genererer senest ændret tider for sider',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'lastmodified-desc' => 'Ermöglicht die Anzeige der Zeitspanne seit der letzten Änderung der Wikiseite',
	'lastmodified' => 'Zuletzt geändert',
	'lastmodified-title-tag' => 'Die Versionsgeschichte dieser Seite anzeigen.',
	'lastmodified-seconds' => 'Zuletzt vor {{PLURAL:$1|einer Sekunde|$1 Sekunden}} aktualisiert',
	'lastmodified-minutes' => 'Zuletzt vor {{PLURAL:$1|einer Minute|$1 Minuten}} aktualisiert',
	'lastmodified-hours' => 'Zuletzt vor {{PLURAL:$1|einer Stunde|$1 Stunden}} aktualisiert',
	'lastmodified-days' => 'Zuletzt vor {{PLURAL:$1|einem Tag|$1 Tag}} aktualisiert',
	'lastmodified-months' => 'Zuletzt vor {{PLURAL:$1|einem Monat|$1 Monaten}} aktualisiert',
	'lastmodified-years' => 'Zuletzt vor {{PLURAL:$1|einem Jahr|$1 Jahren}} aktualisiert',
);

/** Zazaki (Zazaki)
 * @author Erdemaslancan
 */
$messages['diq'] = array(
	'lastmodified' => 'Timar kerdışo Peyên',
	'lastmodified-days' => 'Newekerdışo peyen verde {{PLURAL:$1|$1 roco|$1 rocano}}',
);

/** Lower Sorbian (dolnoserbski)
 * @author Michawiki
 */
$messages['dsb'] = array(
	'lastmodified-desc' => 'Pokazujo case slědnych změnow za boki',
	'lastmodified' => 'Slědny raz změnjony',
	'lastmodified-title-tag' => 'Wersijowu historiju toś togo boka zwobrazniś.',
	'lastmodified-seconds' => 'Pśed {{PLURAL:$1|$1 sekundu|$1 sekundoma|$1 sekundami|sekundami}} zaktualizěrowany.',
	'lastmodified-minutes' => 'Pśed {{PLURAL:$1|$1 minutu|$1 minutoma|$1 minutami|minutami}} zaktualizěrowany.',
	'lastmodified-hours' => 'Pśed $1 {{PLURAL:$1|góźinu|góźinoma|góźinami|góźinami}} zaktualizěrowany.',
	'lastmodified-days' => 'Pśed $1 {{PLURAL:$1|dnjom|dnjoma|dnjami|dnjami}} zaktualizěrowany.',
	'lastmodified-months' => 'Pśed $1 {{PLURAL:$1|mjasecom|mjasecoma|mjasecami|mjasecami}} zaktualizěrowany.',
	'lastmodified-years' => 'Pśed $1 {{PLURAL:$1|lětom|lětoma|lětami|lětami}} zaktualizěrowany.',
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 */
$messages['el'] = array(
	'lastmodified' => 'Τελευταία Επεξεργάστηκε',
);

/** Spanish (español)
 * @author Armando-Martin
 */
$messages['es'] = array(
	'lastmodified-desc' => 'Genera las fechas de la última modificación de los artículos',
	'lastmodified' => 'Última modificación',
	'lastmodified-title-tag' => 'Ver el historial de revisión de esta página.',
	'lastmodified-seconds' => 'Última actualización hace  {{PLURAL:$1|$1 segundo|$1 segundos}}',
	'lastmodified-minutes' => 'Última actualización hace {{PLURAL:$1|$1 minuto|$1 minutos}}',
	'lastmodified-hours' => 'Última actualización hace {{PLURAL:$1|$1 hora|$1 horas}}',
	'lastmodified-days' => 'Última actualización hace {{PLURAL:$1|$1 día|$1 días}}',
	'lastmodified-months' => 'Última actualización hace {{PLURAL:$1|$1 mes|$1 meses}}',
	'lastmodified-years' => 'Última actualización hace {{PLURAL:$1|$1 año|$1 años}}',
);

/** Persian (فارسی)
 * @author ZxxZxxZ
 */
$messages['fa'] = array(
	'lastmodified-desc' => 'زمان آخرین ویرایش برای صفحه‌ها را تولید می‌کند',
	'lastmodified' => 'آخرین ویرایش',
	'lastmodified-title-tag' => 'نمایش تاریخچهٔ ویرایش‌های این صفحه.',
	'lastmodified-seconds' => 'آخرین به‌روزرسانی در {{PLURAL:$1|$1 ثانیهٔ|$1 ثانیهٔ}} پیش',
	'lastmodified-minutes' => 'آخرین ویرایش در {{PLURAL:$1|$1 دقیقهٔ|$1 دقیقهٔ}} پیش',
	'lastmodified-hours' => 'آخرین ویرایش در {{PLURAL:$1|$1 ساعت|$1 ساعت}} پیش',
	'lastmodified-days' => 'آخرین ویرایش در {{PLURAL:$1|$1 روز|$1 روز}} پیش',
	'lastmodified-months' => 'آخرین ویرایش در {{PLURAL:$1|$1 ماه|$1 ماه}} پیش',
	'lastmodified-years' => 'آخرین ویرایش در {{PLURAL:$1|$1 سال|$1 سال}} پیش',
);

/** Finnish (suomi)
 * @author Beluga
 * @author Crt
 * @author Nedergard
 * @author VezonThunder
 */
$messages['fi'] = array(
	'lastmodified-desc' => 'Näyttää, milloin sivuja on muokattu viimeksi',
	'lastmodified' => 'Viimeksi muokattu',
	'lastmodified-title-tag' => 'Näytä sivun muutoshistoria.',
	'lastmodified-seconds' => 'Päivitetty viimeksi {{PLURAL:$1|$1 sekunti|$1 sekuntia}} sitten',
	'lastmodified-minutes' => 'Päivitetty viimeksi {{PLURAL:$1|$1 minuutti|$1 minuuttia}} sitten',
	'lastmodified-hours' => 'Päivitetty viimeksi {{PLURAL:$1|$1 tunti|$1 tuntia}} sitten',
	'lastmodified-days' => 'Päivitetty viimeksi {{PLURAL:$1|$1 päivä|$1 päivää}} sitten',
	'lastmodified-months' => 'Päivitetty viimeksi {{PLURAL:$1|$1 kuukausi|$1 kuukautta}} sitten',
	'lastmodified-years' => 'Päivitetty viimeksi {{PLURAL:$1|$1 vuosi|$1 vuotta}} sitten',
);

/** Faroese (føroyskt)
 * @author לערי ריינהארט
 */
$messages['fo'] = array(
	'lastmodified' => 'Hendan síðan varð seinast broytt $1.',
);

/** French (français)
 * @author Gomoko
 * @author Grondin
 * @author Shirayuki
 * @author Toliño
 * @author Urhixidur
 */
$messages['fr'] = array(
	'lastmodified-desc' => 'Génère les horodatages de dernière modification pour les articles',
	'lastmodified' => 'Dernière mise à jour',
	'lastmodified-title-tag' => 'Afficher l’historique des révisions pour cet article.',
	'lastmodified-seconds' => 'Dernière mise à jour il y a {{PLURAL:$1|$1 seconde|$1 secondes}}',
	'lastmodified-minutes' => 'Dernière mise à jour il y a {{PLURAL:$1|$1 minute|$1 minutes}}',
	'lastmodified-hours' => 'Dernière mise à jour il y a {{PLURAL:$1|$1 heure|$1 heures}}',
	'lastmodified-days' => 'Dernière mise à jour il y a {{PLURAL:$1|$1 jour|$1 jours}}',
	'lastmodified-months' => 'Dernière mise à jour il y a {{PLURAL:$1|$1 mois}}',
	'lastmodified-years' => 'Dernière modification il y a {{PLURAL:$1|$1 année|$1 années}}',
);

/** Franco-Provençal (arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'lastmodified' => 'Dèrriér changement de ceta pâge lo $1.',
);

/** Friulian (furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'lastmodified' => 'Ultin cambiament',
	'lastmodified-title-tag' => 'Cjale il storic di cheste pagjine.',
	'lastmodified-seconds' => 'Ultin cambiament {{PLURAL:$1|$1 secont|$1 seconts}} indaûr',
	'lastmodified-minutes' => 'Ultin cambiament {{PLURAL:$1|$1 minût|$1 minûts}} indaûr',
	'lastmodified-hours' => 'Ultin cambiament {{PLURAL:$1|$1 ore|$1 oris}} indaûr',
	'lastmodified-days' => 'Ultin cambiament {{PLURAL:$1|$1 zornade|$1 zornadis}} indaûr',
	'lastmodified-months' => 'Ultin cambiament {{PLURAL:$1|$1 mês}} indaûr',
	'lastmodified-years' => 'Ultin cambiament {{PLURAL:$1|$1 an|$1 agns}} indaûr',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'lastmodified-desc' => 'Xera a data de última modificación dos artigos',
	'lastmodified' => 'Última modificación',
	'lastmodified-title-tag' => 'Ollar o historial de revisións deste artigo.',
	'lastmodified-seconds' => 'Última actualización hai {{PLURAL:$1|$1 segundo|$1 segundos}}',
	'lastmodified-minutes' => 'Última actualización hai {{PLURAL:$1|$1 minuto|$1 minutos}}',
	'lastmodified-hours' => 'Última actualización hai {{PLURAL:$1|$1 hora|$1 horas}}',
	'lastmodified-days' => 'Última actualización hai {{PLURAL:$1|$1 día|$1 días}}',
	'lastmodified-months' => 'Última actualización hai {{PLURAL:$1|$1 mes|$1 meses}}',
	'lastmodified-years' => 'Última actualización hai {{PLURAL:$1|$1 ano|$1 anos}}',
);

/** Swiss German (Alemannisch)
 * @author Als-Chlämens
 */
$messages['gsw'] = array(
	'lastmodified-desc' => 'Zeigt d Zitspanne syt dr letschte Änderig vo de Syte aa',
	'lastmodified' => 'Zletscht gänderet',
	'lastmodified-title-tag' => 'D Versionsgschicht vo däm Artikel aaluege.',
	'lastmodified-seconds' => 'Zum letschte Mool vor $1 Sekunde aktualisiert', # Fuzzy
	'lastmodified-minutes' => 'Zum letschte Mool vor $1 Minute aktualisiert', # Fuzzy
	'lastmodified-hours' => 'Zum letschte Mool vor $1 Stunde aktualisiert', # Fuzzy
	'lastmodified-days' => 'Zum letschte Mool vor $1 Dääg aktualisiert', # Fuzzy
	'lastmodified-months' => 'Zum letschte Mool vor $1 Monet aktualisiert', # Fuzzy
	'lastmodified-years' => 'Zum letschte Mool vor $1 Joor aktualisiert', # Fuzzy
);

/** Gujarati (ગુજરાતી)
 * @author לערי ריינהארט
 */
$messages['gu'] = array(
	'lastmodified' => 'આ પાના ને છેલ્લે $1 પર બદલવામાં આવ્યુ હતુ.',
);

/** Hebrew (עברית)
 * @author Amire80
 * @author Nirofir
 * @author Ofekalef
 */
$messages['he'] = array(
	'lastmodified-desc' => 'יצירת זמן השינוי האחרון של דפים',
	'lastmodified' => 'שינוי אחרון',
	'lastmodified-title-tag' => 'הצגת היסטוריית שינויים לדף הזה.',
	'lastmodified-seconds' => 'עודכן לאחרונה לפני {{PLURAL:$1|שנייה אחת|$1 שניות}}',
	'lastmodified-minutes' => 'עודכן לאחרונה לפני {{PLURAL:$1|דקה אחת|$1 דקות}}',
	'lastmodified-hours' => 'עודכן לאחרונה לפני {{PLURAL:$1|שעה אחת|שעתיים|$1 שעות}}',
	'lastmodified-days' => 'עודכן לאחרונה לפני {{PLURAL:$1|יום אחד|יומיים|$1 ימים}}',
	'lastmodified-months' => 'עודכן לאחרונה לפני {{PLURAL:$1|חודש אחד|חודשיים|$1 חודשים}}',
	'lastmodified-years' => 'עודכן לאחרונה לפני {{PLURAL:$1|שנה אחת|שנתיים|$1 שנים}}',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'lastmodified-desc' => 'Pokazuje časy poslednich změnow za strony',
	'lastmodified' => 'Posledni raz změnjeny',
	'lastmodified-title-tag' => 'Wersijowu historiju tuteje strony zwobraznić.',
	'lastmodified-seconds' => 'Před $1 {{PLURAL:$1|sekundu|sekundomaj|sekundami}} zaktualizowana.',
	'lastmodified-minutes' => 'Před $1 {{PLURAL:$1|mjeńšinu|mjeńšinomaj|mjeńšinami|mjeńšinami}} zaktualizowana.',
	'lastmodified-hours' => 'Před $1 {{PLURAL:$1|hodźinu|hodźinomaj|hodźinami|hodźinami}} zaktualizowana.',
	'lastmodified-days' => 'Před $1 {{PLURAL:$1|dnjom|dnjomaj|dnjemi|dnjemi}} zaktualizowana.',
	'lastmodified-months' => 'Před $1 {{PLURAL:$1|měsacom|měsacomaj|měsacami|měsacami}} zaktualizowana.',
	'lastmodified-years' => 'Před $1 {{PLURAL:$1|lětom|lětomaj|lětami|lětami}} zaktualizowana.',
);

/** Hungarian (magyar)
 * @author Dj
 */
$messages['hu'] = array(
	'lastmodified-desc' => 'Lapok utolsó módosítási idejének generálása',
	'lastmodified' => 'Utoljára módosítva',
	'lastmodified-title-tag' => 'Laptörténet megjelenítése.',
	'lastmodified-seconds' => 'Utoljára {{PLURAL:$1|egy másodperce|$1 másodperce}} módosítva',
	'lastmodified-minutes' => 'Utoljára {{PLURAL:$1|egy perce|$1 perce}} módosítva',
	'lastmodified-hours' => 'Utoljára {{PLURAL:$1|egy órája|$1 órája}} módosítva',
	'lastmodified-days' => 'Utoljára {{PLURAL:$1|egy napja|$1 napja}} módosítva',
	'lastmodified-months' => 'Utoljára {{PLURAL:$1|egy hónapja|$1 hónapja}} módosítva',
	'lastmodified-years' => 'Utoljára {{PLURAL:$1|egy éve|$1 éve}} módosítva',
);

/** Armenian (Հայերեն)
 * @author Chaojoker
 * @author Togaed
 */
$messages['hy'] = array(
	'lastmodified' => 'Վերջին անգամ փոփոխվել է՝',
	'lastmodified-days' => 'Վերջին անգամ փոփոխվել է {{PLURAL:$1|$1 օր}} առաջ',
);

/** Interlingua (interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'lastmodified-desc' => 'Genera horas de ultime modification pro articulos',
	'lastmodified' => 'Ultime modification',
	'lastmodified-title-tag' => 'Vider le historia de versiones de iste articulo.',
	'lastmodified-seconds' => 'Ultime actualisation {{PLURAL:$1|$1 secunda|$1 secundas}} retro',
	'lastmodified-minutes' => 'Ultime actualisation {{PLURAL:$1|$1 minuta|$1 minutas}} retro',
	'lastmodified-hours' => 'Ultime actualisation {{PLURAL:$1|$1 hora|$1 horas}} retro',
	'lastmodified-days' => 'Ultime actualisation {{PLURAL:$1|$1 die|$1 dies}} retro',
	'lastmodified-months' => 'Ultime actualisation {{PLURAL:$1|$1 mense|$1 menses}} retro',
	'lastmodified-years' => 'Ultime actualisation {{PLURAL:$1|$1 anno|$1 annos}} retro',
);

/** Icelandic (íslenska)
 * @author Snævar
 * @author לערי ריינהארט
 */
$messages['is'] = array(
	'lastmodified' => 'Þessari síðu var síðast breytt $1.',
	'lastmodified-seconds' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 sekúndu|$1 sekúndum}} síðan',
	'lastmodified-minutes' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 mínótu|$1 mínótum}} síðan',
	'lastmodified-hours' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 klukkutíma|$1 klukkutímum}} síðan',
	'lastmodified-days' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 dag|$1 dögum}} síðan',
	'lastmodified-months' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 mánuði|$1 mánuðum}} síðan',
	'lastmodified-years' => 'Síðast uppfærð fyrir {{PLURAL:$1|$1 ári|$1 árum}} síðan',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'lastmodified-desc' => "Genera l'ora dell'ultima modifica per le pagine",
	'lastmodified' => 'Ultima modifica',
	'lastmodified-title-tag' => 'Visualizza la cronologia delle versioni per questa pagina.',
	'lastmodified-seconds' => 'Ultima modifica {{PLURAL:$1|$1 secondo|$1 secondi}} fa',
	'lastmodified-minutes' => 'Ultima modifica {{PLURAL:$1|$1 minuto|$1 minuti}} fa',
	'lastmodified-hours' => 'Ultima modifica {{PLURAL:$1|$1 ora|$1 ore}} fa',
	'lastmodified-days' => 'Ultima modifica {{PLURAL:$1|$1 giorno|$1 giorni}} fa',
	'lastmodified-months' => 'Ultima modifica {{PLURAL:$1|$1 mese|$1 mesi}} fa',
	'lastmodified-years' => 'Ultima modifica {{PLURAL:$1|$1 anno|$1 anni}} fa',
);

/** Japanese (日本語)
 * @author Fryed-peach
 * @author Shirayuki
 */
$messages['ja'] = array(
	'lastmodified-desc' => 'ページが最後に変更された時刻を生成',
	'lastmodified' => '最終更新',
	'lastmodified-title-tag' => 'このページの変更履歴を表示します。',
	'lastmodified-seconds' => '{{PLURAL:$1|$1秒}}前に最終更新',
	'lastmodified-minutes' => '{{PLURAL:$1|$1分}}前に最終更新',
	'lastmodified-hours' => '{{PLURAL:$1|$1時間}}前に最終更新',
	'lastmodified-days' => '{{PLURAL:$1|$1日}}前に最終更新',
	'lastmodified-months' => '{{PLURAL:$1|$1か月}}前に最終更新',
	'lastmodified-years' => '{{PLURAL:$1|$1年}}前に最終更新',
);

/** Javanese (Basa Jawa)
 * @author NoiX180
 */
$messages['jv'] = array(
	'lastmodified-desc' => 'Tokaké wektu pangowahan pungkasan kanggo kaca',
	'lastmodified' => 'Diowah Pungkasan',
	'lastmodified-title-tag' => 'Delok riwayat rèvisi kanggo kaca iki.',
	'lastmodified-seconds' => 'Dianyari pungkasan {{PLURAL:$1|$1 detik|$1 detik}} kapungkur',
	'lastmodified-minutes' => 'Dianyari pungkasan {{PLURAL:$1|$1 menit|$1 menit}} kapungkur',
	'lastmodified-hours' => 'Dianyari pungkasan {{PLURAL:$1|$1 jam|$1 jam}} kapungkur',
	'lastmodified-days' => 'Dianyari pungkasan {{PLURAL:$1|$1 dina|$1 dinat}} kapungkur',
	'lastmodified-months' => 'Dianyari pungkasan {{PLURAL:$1|$1 sasi|$1 sasi}} kapungkur',
	'lastmodified-years' => 'Dianyari pungkasan {{PLURAL:$1|$1 taun|$1 taun}} kapungkur',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author David1010
 */
$messages['ka'] = array(
	'lastmodified' => 'გვერდი ბოლოს განახლდა $1.',
	'lastmodified-seconds' => 'ბოლოს განახლებული {{PLURAL:$1|$1 წამის|$1 წამის}} წინ',
	'lastmodified-minutes' => 'ბოლოს განახლებული {{PLURAL:$1|$1 წუთის|$1 წუთის}} წინ',
	'lastmodified-hours' => 'ბოლოს განახლებული {{PLURAL:$1|$1 საათის|$1 საათის}} წინ',
	'lastmodified-days' => 'ბოლოს განახლებული {{PLURAL:$1|$1 დღის|$1 დღის}} წინ',
	'lastmodified-months' => 'ბოლოს განახლებული {{PLURAL:$1|$1 თვის|$1 თვის}} წინ',
	'lastmodified-years' => 'ბოლოს განახლებული {{PLURAL:$1|$1 წლის|$1 წლის}} წინ',
);

/** Korean (한국어)
 * @author Klutzy
 * @author 아라
 */
$messages['ko'] = array(
	'lastmodified-desc' => '문서에 대한 마지막으로 수정한 시간 생성',
	'lastmodified' => '마지막 수정',
	'lastmodified-title-tag' => '이 문서에 대한 판 역사를 봅니다.',
	'lastmodified-seconds' => '{{PLURAL:$1|$1초}} 전에 마지막으로 업데이트함',
	'lastmodified-minutes' => '{{PLURAL:$1|$1분}} 전에 마지막으로 업데이트함',
	'lastmodified-hours' => '{{PLURAL:$1|$1시간}} 전에 마지막으로 업데이트함',
	'lastmodified-days' => '{{PLURAL:$1|$1일}} 전에 마지막으로 업데이트함',
	'lastmodified-months' => '{{PLURAL:$1|$1달}} 전에 마지막으로 업데이트함',
	'lastmodified-years' => '{{PLURAL:$1|$1년}} 전에 마지막으로 업데이트함',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'lastmodified-desc' => 'Määd_et müjjelesch, för jeede Sigg em Wikki aanzezeije, wi lang et her es, dat se et läz jeändert woode es.',
	'lastmodified' => 'Et lez verändert',
	'lastmodified-title-tag' => 'Donn en leß met de Versione un de Verjangeheit vun heh dä Sigg aanzeije.',
	'lastmodified-seconds' => 'Et läz vör {{PLURAL:$1|eine Sekond|$1 Sekonde|nit ens ein Sekond}} jeändert.',
	'lastmodified-minutes' => '!Et läz vör {{PLURAL:$1|ein Menutt|$1 Menutte|nit ens ein Menutt}} jeändert.',
	'lastmodified-hours' => 'Et läz vör {{PLURAL:$1|ener Schtund|$1 Schtunde|nit ens ein Schtund}} jeändert.',
	'lastmodified-days' => 'Et läz vör {{PLURAL:$1|enem Daach|$1 Dääsch|nit ens enem Daach}} jeändert.',
	'lastmodified-months' => 'Et läz vör {{PLURAL:$1|enem Mohnd|$1 Mohnde|nit ens enem Mohnd}} jeändert.',
	'lastmodified-years' => 'Et läz vör {{PLURAL:$1|enem Johr|$1 Johre|nit ens enem Johr}} jeändert.',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'lastmodified-desc' => 'Generéiert den Zäitpunkt vun der leschter Ännerung vun Artikelen',
	'lastmodified' => 'Lescht Ännerung',
	'lastmodified-title-tag' => 'Den Historique vun de Versioune vun dësem Artikel weisen.',
	'lastmodified-seconds' => 'Lescht Ännerung  {{PLURAL:$1|virun 1 Sekonn|viru(n) $1 Sekonnen}}',
	'lastmodified-minutes' => 'Lescht Ännerung {{PLURAL:$1|virun 1 Minutt|viru(n) $1 Minutten}}',
	'lastmodified-hours' => 'Lescht Ännerung {{PLURAL:$1|virun 1 Stonn|viru(n) $1 Stonnen}}',
	'lastmodified-days' => 'Lescht Ännerung {{PLURAL:$1|virun 1 Dag|viru(n) $1 Deeg}}',
	'lastmodified-months' => 'Lescht Ännerung {{PLURAL:$1|virun 1 Mount|viru(n) $1 Méint}}',
	'lastmodified-years' => 'Lescht Ännerung {{PLURAL:$1|virun 1 Joer|viru(n) $1 Joer}}',
);

/** Latvian (latviešu)
 * @author Yyy
 */
$messages['lv'] = array(
	'lastmodified' => 'Šajā lapā pēdējās izmaiņas izdarītas $1.',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'lastmodified-desc' => 'Прикажува кога се извршении последните измени на статиите',
	'lastmodified' => 'Последна измена',
	'lastmodified-title-tag' => 'Преглед на историјата на промени во статијата.',
	'lastmodified-seconds' => 'Последните измени се направени пред {{PLURAL:$1|$1 секунда|$1 секунди}}',
	'lastmodified-minutes' => 'Последните измени се направени пред {{PLURAL:$1|$1 минута|$1 минути}}',
	'lastmodified-hours' => 'Последните измени се направени пред {{PLURAL:$1|$1 час|$1 часа}}',
	'lastmodified-days' => 'Последните измени се направени пред {{PLURAL:$1|$1 ден|$1 дена}}',
	'lastmodified-months' => 'Последните измени се направени пред {{PLURAL:$1|$1 месец|$1 месеци}}',
	'lastmodified-years' => 'Последните измени се направени пред {{PLURAL:$1|$1 година|$1 години}}',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'lastmodified-desc' => 'താളുകൾ അവസാനം പുതുക്കിയ സമയം നിർമ്മിക്കുന്നു',
	'lastmodified' => 'അവസാനം പുതുക്കിയത്',
	'lastmodified-title-tag' => 'ഈ താളിന്റെ പതിപ്പുകളുടെ നാൾവഴി കാണുക.',
	'lastmodified-seconds' => '{{PLURAL:$1|ഒരു സെക്കൻഡ്|$1 സെക്കൻഡ്}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
	'lastmodified-minutes' => '{{PLURAL:$1|ഒരു മിനിറ്റ്|$1 മിനിറ്റ്}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
	'lastmodified-hours' => '{{PLURAL:$1|ഒരു മണിക്കൂർ|$1 മണിക്കൂർ}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
	'lastmodified-days' => '{{PLURAL:$1|ഒരു ദിവസം|$1 ദിവസം}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
	'lastmodified-months' => '{{PLURAL:$1|ഒരു മാസം|$1 മാസം}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
	'lastmodified-years' => '{{PLURAL:$1|ഒരു വർഷം|$1 വർഷം}} മുമ്പാണ് അവസാനം പുതുക്കിയത്',
);

/** Malay (Bahasa Melayu)
 * @author Anakmalaysia
 */
$messages['ms'] = array(
	'lastmodified-desc' => 'Menjana waktu halaman kali terakhir diubah',
	'lastmodified' => 'Kali Terakhir Diubah',
	'lastmodified-title-tag' => 'Lihat sejarah semakan halaman ini.',
	'lastmodified-seconds' => 'Kali terakhir dikemaskinikan $1 saat lalu',
	'lastmodified-minutes' => 'Kali terakhir dikemaskinikan $1 minit lalu',
	'lastmodified-hours' => 'Kali terakhir dikemaskinikan $1 jam lalu',
	'lastmodified-days' => 'Kali terakhir dikemaskinikan $1 hari lalu',
	'lastmodified-months' => 'Kali terakhir dikemaskinikan $1 bulan lalu',
	'lastmodified-years' => 'Kali terakhir dikemaskinikan $1 tahun lalu',
);

/** Maltese (Malti)
 * @author Chrisportelli
 */
$messages['mt'] = array(
	'lastmodified' => 'L-aħħar modifika',
	'lastmodified-title-tag' => 'Ara l-kronoloġija għal din il-paġna.',
	'lastmodified-seconds' => 'L-aħħar modifika saret {{PLURAL:$1|sekonda|$1 sekondi}} ilu',
	'lastmodified-minutes' => 'L-aħħar modifika saret {{PLURAL:$1|minuta|$1 minuti}} ilu',
	'lastmodified-hours' => 'L-aħħar modifika saret {{PLURAL:$1|siegħa|$1 sigħat}} ilu',
	'lastmodified-days' => 'L-aħħar modifika saret {{PLURAL:$1|ġurnata|$1 ġranet}} ilu',
	'lastmodified-months' => 'L-aħħar modifika saret {{PLURAL:$1|xahar|$1 xhur}} ilu',
	'lastmodified-years' => 'L-aħħar modifika saret {{PLURAL:$1|sena|$1 snin}} ilu',
);

/** Norwegian Bokmål (norsk bokmål)
 */
$messages['nb'] = array(
	'lastmodified' => 'Denne siden ble sist endret $1.',
);

/** Low German (Plattdüütsch)
 * @author לערי ריינהארט
 */
$messages['nds'] = array(
	'lastmodified' => 'Disse Siet is toletzt üm $1 ännert worrn.',
);

/** Low Saxon (Netherlands) (Nedersaksies)
 * @author Servien
 * @author לערי ריינהארט
 */
$messages['nds-nl'] = array(
	'lastmodified' => 'Lest ewiezigd',
);

/** Dutch (Nederlands)
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'lastmodified-desc' => 'Genereert "laatste wijzing"-tijden voor pagina\'s',
	'lastmodified' => 'Deze pagina is het laatst bewerkt op $1.',
	'lastmodified-title-tag' => 'De versiegeschiedenis van dit artikel bekijken.',
	'lastmodified-seconds' => '{{PLURAL:$1|Eén seconde|$1 seconden}} geleden voor het laatst bijgewerkt',
	'lastmodified-minutes' => '{{PLURAL:$1|Eén minuut|$1 minuten}} geleden voor het laatst bijgewerkt',
	'lastmodified-hours' => '{{PLURAL:$1|Eén uur|$1 uur}} geleden voor het laatst bijgewerkt',
	'lastmodified-days' => '{{PLURAL:$1|Gisteren|$1 dagen geleden}} voor het laatst bijgewerkt',
	'lastmodified-months' => '{{PLURAL:$1|Eén maand|$1 maanden}} geleden voor het laatst bijgewerkt',
	'lastmodified-years' => '{{PLURAL:$1|Eén jaar|$1 jaar}} geleden voor het laatst bijgewerkt',
);

/** Pälzisch (Pälzisch)
 * @author SPS
 */
$messages['pfl'] = array(
	'lastmodified' => 'Die Seid isch um $1 es letschde Mol geännert worre.',
);

/** Polish (polski)
 * @author BeginaFelicysym
 * @author Sp5uhe
 * @author Woytecr
 */
$messages['pl'] = array(
	'lastmodified-desc' => 'Generuje czas ostatniej modyfikacji dla artykułów',
	'lastmodified' => 'Ostatnio modyfikowane',
	'lastmodified-title-tag' => 'Zobacz historię zmian tego artykułu.',
	'lastmodified-seconds' => 'Ostatnio zaktualizowano {{PLURAL:$1|sekundę|$1 sekundy|$1 sekund}} temu',
	'lastmodified-minutes' => 'Ostatnio zaktualizowano {{PLURAL:$1|minutę|$1 minuty|$1 minut}} temu',
	'lastmodified-hours' => 'Ostatnio zaktualizowano {{PLURAL:$1|godzinę|$1 godziny|$1 godzin}} temu',
	'lastmodified-days' => 'Ostatnio zaktualizowano {{PLURAL:$1|dzień|$1 dni|$1 dni}} temu',
	'lastmodified-months' => 'Ostatnio zaktualizowano {{PLURAL:$1|miesiąc|$1 miesiące|$1 miesięcy}} temu',
	'lastmodified-years' => 'Ostatnio zaktualizowano {{PLURAL:$1|rok|$1 lata|$1 lat}} temu',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Dragonòt
 */
$messages['pms'] = array(
	'lastmodified-desc' => "A génera j'orari dj'ùltime modifiche për le pàgine",
	'lastmodified' => 'Ùltima Modìfica',
	'lastmodified-title-tag' => 'Vëdde la stòria dle revision për costa pàgina.',
	'lastmodified-seconds' => 'Ùltima modìfica {{PLURAL:$1|$1 second}} fà',
	'lastmodified-minutes' => 'Ùltima modìfica {{PLURAL:$1|$1 minuta|$1 minute}} fà',
	'lastmodified-hours' => 'Ùltima modìfica {{PLURAL:$1|$1 ora|$1 ore}} fà',
	'lastmodified-days' => 'Ùltima modìfica {{PLURAL:$1|$1 di}} fà',
	'lastmodified-months' => 'Ùltima modìfica {{PLURAL:$1|$1 mèis}} fà',
	'lastmodified-years' => 'Ùltima modìfica {{PLURAL:$1|$1 ann|$1 agn}} fà',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'lastmodified-days' => 'وروستۍ اوسمهالېدنه {{PLURAL:$1|$1 ورځ|$1 ورځې}} دمخه',
);

/** Brazilian Portuguese (português do Brasil)
 * @author 555
 */
$messages['pt-br'] = array(
	'lastmodified-desc' => 'Mostra quando uma página foi alterada pela última vez',
	'lastmodified' => 'Última modificação',
	'lastmodified-title-tag' => 'Ver histórico de edições para esta página',
	'lastmodified-seconds' => 'Atualizado {{PLURAL:$1|$1 segundo|$1 segundos}} atrás',
	'lastmodified-minutes' => 'Atualizado {{PLURAL:$1|$1 minuto|$1 minutos}} atrás',
	'lastmodified-hours' => 'Atualizado {{PLURAL:$1|$1 hora|$1 horas}} atrás',
	'lastmodified-days' => 'Atualizado {{PLURAL:$1|$1 dia|$1 dias}} atrás',
	'lastmodified-months' => 'Atualizado {{PLURAL:$1|$1 mês|$1 meses}} atrás',
	'lastmodified-years' => 'Atualizado {{PLURAL:$1|$1 ano|$1 anos}} atrás',
);

/** Romani (Romani)
 * @author לערי ריינהארט
 */
$messages['rmy'] = array(
	'lastmodified' => 'O palutno paruvipen $1.',
);

/** Romanian (română)
 * @author Minisarm
 */
$messages['ro'] = array(
	'lastmodified' => 'Ultima modificare efectuată la $1.',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'lastmodified-desc' => "Genere l'orarie de l'urteme cangiaminde pe le pàggene",
	'lastmodified' => 'Urteme cangiamende',
	'lastmodified-title-tag' => "Vide 'u cunde d'a revisione pe sta pàgene.",
	'lastmodified-seconds' => 'Urteme aggiornamende {{PLURAL:$1|$1 seconde}} fà',
	'lastmodified-minutes' => 'Urteme aggiornamende {{PLURAL:$1|$1 minute}} fà',
	'lastmodified-hours' => 'Urteme aggiornamende {{PLURAL:$1|$1 ore}} fà',
	'lastmodified-days' => 'Urteme aggiornamende {{PLURAL:$1|$1 sciurne}} fà',
	'lastmodified-months' => 'Urteme aggiornamende {{PLURAL:$1|$1 mese|$1 mise}} fà',
	'lastmodified-years' => 'Urteme aggiornamende {{PLURAL:$1|$1 anne}} fà',
);

/** Russian (русский)
 * @author David1010
 * @author Kaganer
 * @author Kalan
 * @author Ole Yves
 */
$messages['ru'] = array(
	'lastmodified-desc' => 'Отображает время последнего изменения страниц',
	'lastmodified' => 'Последнее изменение',
	'lastmodified-title-tag' => 'Просмотреть историю изменений этой страницы.',
	'lastmodified-seconds' => 'Обновлено {{PLURAL:$1|$1 секунду|$1 секунд|$1 секунды}} назад',
	'lastmodified-minutes' => 'Обновлено {{PLURAL:$1|$1 минуту|$1 минут|$1 минуты}} назад',
	'lastmodified-hours' => 'Обновлено {{PLURAL:$1|$1 час|$1 часов|$1 часа}} назад',
	'lastmodified-days' => 'Обновлено {{PLURAL:$1|$1 день|$1 дней|$1 дня}} назад',
	'lastmodified-months' => 'Обновлено {{PLURAL:$1|$1 месяц|$1 месяцев|$1 месяца}} назад',
	'lastmodified-years' => 'Обновлено {{PLURAL:$1|$1 год|$1 лет|$1 года}} назад',
);

/** Sinhala (සිංහල)
 * @author පසිඳු කාවින්ද
 */
$messages['si'] = array(
	'lastmodified-desc' => 'පිටු සඳහා අවසන් වරට වෙනස්කරන ලද කාලයන් ජනිත කරනු ලබයි',
	'lastmodified' => 'අන්තිමට වෙනස් කලේ',
	'lastmodified-title-tag' => 'මෙම පිටුව සඳහා සංශෝධන ඉතිහාසය නරඹන්න.',
);

/** Slovak (slovenčina)
 */
$messages['sk'] = array(
	'lastmodified' => 'Čas poslednej úpravy tejto stránky je $1.',
);

/** Slovenian (slovenščina)
 * @author Dbc334
 * @author Eleassar
 */
$messages['sl'] = array(
	'lastmodified-desc' => 'Ustvari čase zadnjih sprememb strani',
	'lastmodified' => 'Zadnjič spremenjeno',
	'lastmodified-title-tag' => 'Ogled zgodovine redakcij strani.',
	'lastmodified-seconds' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 sekundo|$1 sekundama|$1 sekundami}}.',
	'lastmodified-minutes' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 minuto|$1 minutama|$1 minutami}}.',
	'lastmodified-hours' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 uro|$1 urama|$1 urami}}.',
	'lastmodified-days' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 dnevom|$1 dnema|$1 dnevi}}.',
	'lastmodified-months' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 mesecem|$1 mesecema|$1 meseci}}.',
	'lastmodified-years' => 'Zadnjič spremenjeno pred {{PLURAL:$1|$1 letom|$1 letoma|$1 leti}}.',
);

/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 * @author Rancher
 */
$messages['sr-ec'] = array(
	'lastmodified-desc' => 'Приказује када су направљене последње измене на страницама',
	'lastmodified' => 'Последња измена',
	'lastmodified-title-tag' => 'Преглед историје измена на овој страници.',
	'lastmodified-seconds' => 'Ажурирано пре {{PLURAL:$1|$1 секунде|$1 секунде|$1 секунди}}',
	'lastmodified-minutes' => 'Ажурирано пре {{PLURAL:$1|$1 минут|$1 минута|$1 минута}}',
	'lastmodified-hours' => 'Ажурирано пре {{PLURAL:$1|$1 сат|$1 сата|$1 сати}}',
	'lastmodified-days' => 'Ажурирано пре {{PLURAL:$1|$1 дан|$1 дана|$1 дана}}',
	'lastmodified-months' => 'Ажурирано пре {{PLURAL:$1|$1 месец|$1 месеца|$1 месеци}}',
	'lastmodified-years' => 'Ажурирано пре {{PLURAL:$1|$1 годину|$1 године|$1 година}}',
);

/** Serbian (Latin script) (srpski (latinica)‎)
 */
$messages['sr-el'] = array(
	'lastmodified-desc' => 'Prikazuje kada su napravljene poslednje izmene na stranicama',
	'lastmodified' => 'Poslednja izmena',
	'lastmodified-title-tag' => 'Pregled istorije izmena na ovoj stranici.',
	'lastmodified-seconds' => 'Ažurirano pre {{PLURAL:$1|$1 sekunde|$1 sekunde|$1 sekundi}}', # Fuzzy
	'lastmodified-minutes' => 'Ažurirano pre {{PLURAL:$1|$1 minut|$1 minuta|$1 minuta}}', # Fuzzy
	'lastmodified-hours' => 'Ažurirano pre {{PLURAL:$1|$1 sat|$1 sata|$1 sati}}', # Fuzzy
	'lastmodified-days' => 'Ažurirano pre {{PLURAL:$1|$1 dan|$1 dana|$1 dana}}', # Fuzzy
	'lastmodified-months' => 'Ažurirano pre {{PLURAL:$1|$1 mesec|$1 meseca|$1 meseci}}', # Fuzzy
	'lastmodified-years' => 'Ažurirano pre {{PLURAL:$1|$1 godinu|$1 godine|$1 godina}}', # Fuzzy
);

/** Swedish (svenska)
 * @author Ainali
 * @author Sannab
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'lastmodified-desc' => 'Genererar senast ändrade tider för sidor',
	'lastmodified' => 'Sidan ändrades senast $1.',
	'lastmodified-title-tag' => 'Visa revisionshistorik för denna sida.',
	'lastmodified-seconds' => 'Senast uppdaterad {{PLURAL:$1|$1 sekund|$1 sekunder}} sedan',
	'lastmodified-minutes' => 'Senast uppdaterad {{PLURAL:$1|$1 minut|$1 minuter}} sedan',
	'lastmodified-hours' => 'Senast uppdaterad {{PLURAL:$1|$1 timme|$1 timmar}} sedan',
	'lastmodified-days' => 'Senast uppdaterad {{PLURAL:$1|$1 dag|$1 dagar}} sedan',
	'lastmodified-months' => 'Senast uppdaterad {{PLURAL:$1|$1 månad|$1 månader}} sedan',
	'lastmodified-years' => 'Senast uppdaterad {{PLURAL:$1|$1 år}} sedan',
);

/** Tamil (தமிழ்)
 * @author Karthi.dr
 * @author Shanmugamp7
 */
$messages['ta'] = array(
	'lastmodified' => 'கடைசியாக மாற்றப்பட்டது',
	'lastmodified-seconds' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1 வினாடி|$1 வினாடிகள்}} முன்பு',
	'lastmodified-minutes' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1 நிமிடம்|$1 நிமிடங்கள்}} முன்பு',
	'lastmodified-hours' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1மணி|$1 மணிகள்}} முன்பு',
	'lastmodified-days' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1 நாள்|$1 நாட்கள்}} முன்பு',
	'lastmodified-months' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1 மாதம்|$1 மாதங்கள்}} முன்பு',
	'lastmodified-years' => 'கடைசியாக புதுப்பித்தது {{PLURAL:$1|$1 வருடம்|$1 வருடங்கள்}} முன்பு',
);

/** Telugu (తెలుగు)
 * @author Sunil Mohan
 * @author Veeven
 */
$messages['te'] = array(
	'lastmodified-desc' => 'వ్యాసాలలో చివరి మార్పు తేదీలను చూపిస్తుంది',
	'lastmodified' => 'ఈ పేజీకి $1న చివరి మార్పు జరిగినది.',
	'lastmodified-title-tag' => 'ఈ వ్యాసపు కూర్పుల చరిత్రను చూడండి',
	'lastmodified-seconds' => 'చివరి మార్పు $1 క్షణాల క్రితం', # Fuzzy
	'lastmodified-minutes' => 'చివరి మార్పు $1 నిమిషాల క్రితం', # Fuzzy
	'lastmodified-hours' => 'చివరి మార్పు $1 గంటల క్రితం', # Fuzzy
	'lastmodified-days' => 'చివరి మార్పు $1 రోజుల క్రితం', # Fuzzy
	'lastmodified-months' => 'చివరి మార్పు $1 నెలల క్రితం', # Fuzzy
	'lastmodified-years' => 'చివరి మార్పు $1 సంవత్సరాల క్రితం', # Fuzzy
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author לערי ריינהארט
 */
$messages['tl'] = array(
	'lastmodified-desc' => 'Lumilikha ng mga ulit ng huling pagbago para sa pahina',
	'lastmodified' => 'Huling binago ang pahinang ito noong $1.',
	'lastmodified-title-tag' => 'Tingnan ang kasaysayan ng rebisyon para sa pahinang ito.',
	'lastmodified-seconds' => 'Huling naisapanahon noong {{PLURAL:$1|$1 segundo|$1 mga segundo}} na ang nakakalipas',
	'lastmodified-minutes' => 'Huling naisapanahon {{PLURAL:$1|$1 minuto|$1 mga minuto}} na ang nakakalipas',
	'lastmodified-hours' => 'Huling naisapanahon {{PLURAL:$1|$1 oras|$1 mga oras}} na ang nakakalipas',
	'lastmodified-days' => 'Huling naisapanahon {{PLURAL:$1|$1 araw|$1 mga araw}} na ang nakakalipas',
	'lastmodified-months' => 'Huling naisapanahon {{PLURAL:$1|$1 buwan|$1 mga buwan}} na ang nakakalipas',
	'lastmodified-years' => 'Huling naisapanahon {{PLURAL:$1|$1 taon|$1 mga taon}} na ang nakakalipas',
);

/** Uyghur (Arabic script) (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'lastmodified' => 'ئاخىرقى ئۆزگەرتىش',
);

/** Ukrainian (українська)
 * @author A1
 * @author Base
 * @author Olvin
 * @author Ата
 */
$messages['uk'] = array(
	'lastmodified-desc' => 'Генерує для сторінок час останнього редагування',
	'lastmodified' => 'Останні зміни',
	'lastmodified-title-tag' => 'Переглянути історію змін цієї сторінки.',
	'lastmodified-seconds' => 'Останнє оновлення $1 {{PLURAL:$1|секунду|секунди|секунд}} назад',
	'lastmodified-minutes' => 'Востаннє оновлено {{PLURAL:$1|$1 хвилину|$1 хвилини|$1 хвилин}} назад',
	'lastmodified-hours' => 'Востаннє оновлено {{PLURAL:$1|$1 годину|$1 години|$1 годин}} назад',
	'lastmodified-days' => 'Востаннє оновлено {{PLURAL:$1|$1 день|$1 дні|$1 днів}} тому',
	'lastmodified-months' => 'Востаннє оновлено {{PLURAL:$1|$1 місяць|$1 місяці|$1 місяців}} тому',
	'lastmodified-years' => 'Востаннє оновлено {{PLURAL:$1|$1 рік|$1 роки|$1 років}} тому',
);

/** Urdu (اردو)
 * @author පසිඳු කාවින්ද
 */
$messages['ur'] = array(
	'lastmodified-desc' => 'پیدا میں آخری بار بار صفحات کے لئے',
	'lastmodified' => 'آخری بار',
	'lastmodified-title-tag' => 'اس صفحے کے لئے ترمیمی تاریخ کو دیکھیں ۔',
);

/** vèneto (vèneto)
 */
$messages['vec'] = array(
	'lastmodified' => 'Ultima modifica $1.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'lastmodified-desc' => 'Tính ra lúc sửa đổi cuối cùng của các trang',
	'lastmodified' => 'Sửa đổi lần cuối',
	'lastmodified-title-tag' => 'Xem lịch sử thay đổi của trang này.',
	'lastmodified-seconds' => 'Cập nhật lần cuối cách đây $1 giây',
	'lastmodified-minutes' => 'Cập nhật lần cuối cách đây $1 phút',
	'lastmodified-hours' => 'Cập nhật lần cuối cách đây $1 giờ',
	'lastmodified-days' => 'Cập nhật lần cuối cách đây $1 ngày',
	'lastmodified-months' => 'Cập nhật lần cuối cách đây $1 tháng',
	'lastmodified-years' => 'Cập nhật lần cuối cách đây $1 năm',
);

/** Yiddish (ייִדיש)
 * @author פוילישער
 */
$messages['yi'] = array(
	'lastmodified-desc' => 'גענערירט לעצט מאדיפיצירטע צײַטן פאר בלעטער',
	'lastmodified' => 'לעצט געענדערט',
	'lastmodified-title-tag' => 'באקוקן די רעוויזיע היסטאריע פאר דעם בלאט.',
	'lastmodified-seconds' => 'לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 סעקונדע|$1 סעקונדעס}}',
	'lastmodified-minutes' => 'לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 מינוט|$1 מינוט}}',
	'lastmodified-hours' => "לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 שעה|$1 שעה'ן}}",
	'lastmodified-days' => 'לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 טאָג|$1 טעג}}',
	'lastmodified-months' => 'לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 מאנאַט|$1 מאנאַטן}}',
	'lastmodified-years' => 'לעצט דערהײַנטיקט פֿאַר {{PLURAL:$1|$1 יאָר|$1 יאָר}}',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Linforest
 * @author Xiaomingyan
 */
$messages['zh-hans'] = array(
	'lastmodified-desc' => '生成页面的最后修订时间',
	'lastmodified' => '最后修订',
	'lastmodified-title-tag' => '查看此页面的修订历史。',
	'lastmodified-seconds' => '最后更新于{{PLURAL:$1|$1秒|$1秒}}之前',
	'lastmodified-minutes' => '最后更新于{{PLURAL:$1|$1分钟|$1分钟}}之前',
	'lastmodified-hours' => '最后更新于{{PLURAL:$1|$1小时|$1小时}}之前',
	'lastmodified-days' => '最后更新于{{PLURAL:$1|$1天|$1天}}之前',
	'lastmodified-months' => '最后更新于{{PLURAL:$1|$1个月|$1个月}}之前',
	'lastmodified-years' => '最后更新于{{PLURAL:$1|$1年|$1年}}之前',
);

/** Traditional Chinese (中文（繁體）‎)
 * @author Simon Shek
 */
$messages['zh-hant'] = array(
	'lastmodified-desc' => '生成頁面的最後修訂時間',
	'lastmodified' => '最後修訂',
	'lastmodified-title-tag' => '查看此頁的修訂歷史。',
	'lastmodified-seconds' => '最後更新於$1秒前',
	'lastmodified-minutes' => '最後更新於$1分鐘前',
	'lastmodified-hours' => '最後更新於$1小時前',
	'lastmodified-days' => '最後更新於$1天前',
	'lastmodified-months' => '最後更新於$1個月前',
	'lastmodified-years' => '最後更新於$1年前',
);
