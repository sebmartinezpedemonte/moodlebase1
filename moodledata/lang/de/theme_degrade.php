<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'theme_degrade', language 'de', version '4.1'.
 *
 * @package     theme_degrade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acessar'] = 'Zugriff auf Kurs';
$string['background_color'] = 'Hintergrundfarbe';
$string['background_color_black'] = 'Schwarzes Thema {$a}';
$string['background_color_blue'] = 'Blaues Thema {$a}';
$string['background_color_default'] = 'Standardthema {$a}';
$string['background_color_desc'] = 'Hintergrundfarbe von Header und Footer!';
$string['background_color_green'] = 'Grünes Thema {$a}';
$string['background_color_random'] = 'Zufälliges Thema {$a}';
$string['background_color_red'] = 'Rotes Thema {$a}';
$string['choosereadme'] = 'Degrade ist ein sorgfältig gestaltetes Thema, das Ihrem Moodle lebhafte Farben und eine fröhliche Atmosphäre verleiht.';
$string['contact_address'] = 'Adresse';
$string['contact_email'] = 'E-Mail';
$string['contact_phone'] = 'Telefonnummer';
$string['content_pagefonts'] = 'Google Extra-Schriftarten';
$string['content_pagefonts_desc'] = 'Fügen Sie hier den @import-Link von Google für zusätzliche Schriftarten hinzu.<br>Sie können mehrere Imports einfügen.<br><a href="https://fonts.google.com/selection/embed\\" target="google">Einbettungscode</a><br><img src="{$a}" style="max-width: 100%;width: 420px;">';
$string['content_type_default'] = 'Standardmäßig von Moodle';
$string['content_type_empty'] = '(Kein Inhalt)';
$string['content_type_footer'] = 'Inhaltstyp für die Fußzeile';
$string['content_type_footer_desc'] = 'Wählen Sie den anzuzeigenden Inhaltstyp für die Fußzeile aus.';
$string['content_type_home'] = 'Inhaltstyp für die Startseite';
$string['content_type_home_desc'] = 'Wählen Sie den anzuzeigenden Inhaltstyp für die Startseite aus.';
$string['content_type_html'] = 'Mit Editor zu erstellende Seite';
$string['continuar'] = 'Weiterlernen';
$string['countlesson'] = '{$a} Lektion';
$string['countlessons'] = '{$a} Lektionen';
$string['customcss'] = 'Benutzerdefiniertes CSS';
$string['customcss_desc'] = 'Alle CSS-Regeln, die Sie in diesen Textbereich eingeben, werden auf allen Seiten widerspiegelt, um die Anpassung dieses Themas zu erleichtern.';
$string['custommenuitems'] = 'Nutzerdefinierte obere Menüpunkte';
$string['custommenuitems_desc'] = 'Sie können ein nutzerdefiniertes Menü neben den oberen Menüs erstellen. Das Stammverzeichnis sollte bündig mit dem Rand beginnen, und Untermenüs sollten durch einen Bindestrich (-) eingeleitet werden. Die Anzahl der Bindestriche bestimmt die Elementtiefe. Elemente mit einem Bindestrich erscheinen also in einem Untermenü unter dem vorherigen Top-Level-Element, und Elemente mit zwei Bindestrichen erscheinen in einem Untermenü unter dem vorherigen Untermenü.
Der Inhalt jedes Menüelements sollte aus bis zu drei Elementen bestehen (<strong>Bezeichnung</strong> | <strong>URL</strong> | <strong>Tooltip</strong> | <strong>Sprache</strong>), die jeweils durch das Zeichen "|" getrennt sind.
<ul>
<li><strong>Bezeichnung</strong>: Dies ist der Text, der im Menüelement angezeigt wird. Sie müssen für jedes Menüelement eine Bezeichnung angeben.</li>
<li><strong>URL</strong>: Dies ist die URL, zu der deine Person gelangt, wenn sie auf das Menüelement klickt. Dies ist optional; Wenn keine Angabe erfolgt, wird das Element nirgendwo verlinkt.<br>
Andere Attribute wie "Ziel" können am Ende der URL angehängt werden.</li>
<li><strong>Tooltip</strong>: Wenn Sie eine URL angeben, können Sie auch einen Tooltip für den mit der URL erstellten Link angeben. Dies ist optional, und wenn nicht definiert, wird die Bezeichnung als Tooltip für das Menüelement verwendet.</li>
<li><strong>Sprache</strong>: Sie können einen Sprachcode (oder eine durch Kommas getrennte Liste von Codes) als viertes Element der Zeile hinzufügen. Die Zeile wird nur angezeigt, wenn die Person die aufgeführte Sprache ausgewählt hat.</li>
</ul>
Nachfolgend finden Sie ein Beispiel, wie Sie ein nutzerdefiniertes Menü erstellen würden:
<blockquote><pre>
Kurse
-Alle Kurse | /kurs/
-Meine Kurse
--Beispielkurs
---Beispielkurs 7 | /kurs/anzeigen.php?id=7
---Beispielkurs 9 | /kurs/anzeigen.php?id=9
--Testkurs
---Testkurs 2 | /kurs/anzeigen.php?id=2
---Testkurs 5 | /kurs/anzeigen.php?id=5
Google
-Google in beliebiger Sprache | https://google.com/" target="_blank
-Google in Mexiko | https://www.google.com.mx/" target="_blank|Google Etikett|en
-Google in Portugiesisch | https://google.com.br/" target="_blank|Google Etikett|pt,pt_br,pt_br_kids
Supportseite | https://support.com/" target="_blank
</pre></blockquote>
Für Moodle mit Unterstützung für mehrere Sprachen sollte der <strong>Bezeichnung</strong>-Wert als <strong>"Sprachzeichenfolgenname,Komponentenname"</strong> formatiert sein.
<blockquote><pre>
Profil,moodle | /nutzer/profil.php
Nachrichten,nachricht | /nachricht/index.php
</pre></blockquote>
<a href="https://docs.moodle.org/404/en/Erweiterte_Themen_Einstellungen" target="_blank">Weitere Menüinformationen</a>';
$string['editor_link_footer'] = 'Fußzeilenblock für die Sprache {$a} bearbeiten';
$string['editor_link_footer_all'] = 'Fußzeilenblock für alle Sprachen bearbeiten';
$string['editor_link_home'] = 'Startseite für die Sprache {$a} bearbeiten';
$string['editor_link_home_all'] = 'Startseite für alle Sprachen bearbeiten';
$string['favicon'] = 'Favicon';
$string['favicon_desc'] = 'Das Favicon wird neben dem Seitentitel im Browser-Tab angezeigt. Wenn kein benutzerdefiniertes Favicon bereitgestellt wird, wird ein Moodle-Favicon angezeigt.';
$string['fontfamily'] = 'Schriftart der Website';
$string['fontfamily_desc'] = 'Wählen Sie die Schriftart aus, die Sie auf Ihrer Moodle-Website verwenden möchten.';
$string['fontfamily_menus'] = 'Menüschriften';
$string['fontfamily_menus_desc'] = 'Wählen Sie aus, welche Schriftart Sie für Menüs auf Ihrer Moodle-Website verwenden möchten.';
$string['fontfamily_sitename'] = 'Schriftart für den Seitennamen';
$string['fontfamily_sitename_desc'] = 'Die Schriftart, die auf den Seitennamen angewendet wird, wenn kein Logo bereitgestellt wird.';
$string['fontfamily_title'] = 'Titeltext-Schriftarten';
$string['fontfamily_title_desc'] = 'Wählen Sie aus, welche Schriftart Sie für Titel auf Ihrer Moodle-Website verwenden möchten.';
$string['fontpreview'] = 'Vorschau der Schriftartenliste';
$string['footer_contact_title'] = 'Kontaktblocktitel';
$string['footer_contact_title_default'] = 'Kontakt aufnehmen';
$string['footer_contact_title_desc'] = 'Geben Sie den Titel des Kontaktblocks im Fußbereich mit den Kontaktinformationen ein.';
$string['footer_description'] = 'Beschreiben Sie Ihr Moodle, was Sie tun, und diese Informationen werden unter dem Logo im Fußbereich von Moodle angezeigt';
$string['footer_description_desc'] = 'Beschreiben Sie Ihr Moodle, was Sie tun, und diese Informationen werden unter dem Logo im Moodle-Fußbereich angezeigt';
$string['footer_frontpage_blockcourses_instructor'] = 'Name des Lehrers anzeigen';
$string['footer_frontpage_blockcourses_instructor_desc'] = 'Wenn aktiviert, werden die Namen der Lehrer in der Kursliste angezeigt!';
$string['footer_frontpage_blockcourses_text'] = 'Kurzer Text, der den Block "{$a}" erklärt';
$string['footer_frontpage_blockcourses_text_desc'] = 'Fügen Sie einen Text hinzu, der die "{$a}" erklärt!';
$string['footer_links_title'] = 'Titel des Linkblocks';
$string['footer_links_title_default'] = 'Wichtige Links';
$string['footer_show_copywriter'] = 'Hergestellt mit ❤️ anzeigen';
$string['footer_show_copywriter_desc'] = 'Deaktivieren, wenn Sie "Hergestellt mit ❤️" ausblenden möchten.';
$string['footer_social_title'] = 'Titel des sozialen Blocks';
$string['footer_social_title_default'] = 'Folge uns in sozialen Netzwerken';
$string['footer_social_title_desc'] = 'Geben Sie den Titel des Blocks an, der im Fußbereich mit den Daten Ihrer sozialen Netzwerke angezeigt wird.';
$string['footerblink'] = 'Links für den Fußzeilenblock';
$string['footerblink_desc'] = 'Sie können hier einen Fußzeilenlinkblock konfigurieren, der von Themen angezeigt wird. <br> Jede Zeile besteht aus einem Menütext oder einer Sprachschlüsselzeichenfolge oder einem Text, einem Link-URL (optional), getrennt durch senkrechte Striche. Zum Beispiel: <br><pre>Moodle-Support|https://moodle.org/support</pre>';
$string['footerblock_contact'] = 'Kontaktblock';
$string['footerblock_copywriter'] = 'Hergestellt mit ❤️';
$string['footerblock_description'] = 'Blockbeschreibung';
$string['footerblock_links'] = 'Linkblock';
$string['footerblock_social'] = 'Sozialer Block';
$string['free_name'] = 'Gratis';
$string['frontpage_about_description'] = 'Beschreiben Sie, was Sie tun';
$string['frontpage_about_description_desc'] = 'Beschreiben Sie in maximal 5 Zeilen, was der Zweck Ihres Moodle ist';
$string['frontpage_about_enable'] = 'Über-Block aktivieren';
$string['frontpage_about_enable_desc'] = 'Wenn aktiviert, wird der Über-Block unter dem Banner angezeigt!';
$string['frontpage_about_info'] = 'Datenfeld {$a}';
$string['frontpage_about_logo'] = 'Unterschiedliches Logo hier anzeigen';
$string['frontpage_about_logo_desc'] = 'Wenn festgelegt, wird dieses Logo hier verwendet, anstelle des Logos oben.<br> Leer lassen verwendet das Logo oben!';
$string['frontpage_about_number'] = 'Anzahl der Daten';
$string['frontpage_about_number_desc'] = 'Geben Sie hier die oben genannte Informationsmenge ein';
$string['frontpage_about_text'] = 'Name der Daten';
$string['frontpage_about_text_1_defalt'] = 'Kurse';
$string['frontpage_about_text_2_defalt'] = 'Trainer/innen';
$string['frontpage_about_text_3_defalt'] = 'Teilnehmer/innen';
$string['frontpage_about_text_4_defalt'] = 'Lektionen';
$string['frontpage_about_text_desc'] = 'Geben Sie hier den Namen der Daten ein, der auf der Startseite angezeigt werden soll';
$string['frontpage_about_title'] = 'Titel des Über-Blocks';
$string['frontpage_about_title_default'] = 'Unsere globale Gemeinschaft';
$string['grapsjs-assetmanager-addbutton'] = 'Bild hinzufügen';
$string['grapsjs-assetmanager-modaltitle'] = 'Bild auswählen';
$string['grapsjs-assetmanager-uploadtitle'] = 'Dateien hier ablegen oder klicken, um hochzuladen';
$string['grapsjs-attachment'] = 'Anhang';
$string['grapsjs-clear'] = 'Leinwand löschen';
$string['grapsjs-confirm_clear'] = 'Möchten Sie die Leinwand wirklich löschen?';
$string['grapsjs-decoration'] = 'Dekorationen';
$string['grapsjs-devicemanager-device'] = 'Gerät';
$string['grapsjs-devicemanager-devices-desktop'] = 'Desktop';
$string['grapsjs-devicemanager-devices-mobilelandscape'] = 'Handy, Querformat';
$string['grapsjs-devicemanager-devices-mobileportrait'] = 'Handy, Hochformat';
$string['grapsjs-devicemanager-devices-tablet'] = 'Tablet';
$string['grapsjs-dimensions'] = 'Abmessungen';
$string['grapsjs-domcomponents-names-'] = 'Box';
$string['grapsjs-domcomponents-names-body'] = 'Körper';
$string['grapsjs-domcomponents-names-cell'] = 'Tabellenzelle';
$string['grapsjs-domcomponents-names-comment'] = 'Kommentar';
$string['grapsjs-domcomponents-names-image'] = 'Bild';
$string['grapsjs-domcomponents-names-label'] = 'Etikett';
$string['grapsjs-domcomponents-names-link'] = 'Verknüpfung';
$string['grapsjs-domcomponents-names-map'] = 'Karte';
$string['grapsjs-domcomponents-names-row'] = 'Tabellenzeile';
$string['grapsjs-domcomponents-names-section'] = 'Abschnitt';
$string['grapsjs-domcomponents-names-table'] = 'Tabelle';
$string['grapsjs-domcomponents-names-tbody'] = 'Tabellenkörper';
$string['grapsjs-domcomponents-names-text'] = 'Text';
$string['grapsjs-domcomponents-names-tfoot'] = 'Tabellenfußzeile';
$string['grapsjs-domcomponents-names-thead'] = 'Tabellenkopf';
$string['grapsjs-domcomponents-names-video'] = 'Video';
$string['grapsjs-domcomponents-names-wrapper'] = 'Körper';
$string['grapsjs-edit_code'] = 'Code bearbeiten';
$string['grapsjs-edit_code_paste_here_html'] = 'Fügen Sie hier Ihren HTML-/CSS-Code ein und klicken Sie auf Importieren';
$string['grapsjs-fullscreen'] = 'Vollbild';
$string['grapsjs-general'] = 'Allgemein';
$string['grapsjs-open_block'] = 'Blöcke öffnen';
$string['grapsjs-open_layers'] = 'Ebenen öffnen';
$string['grapsjs-open_sm'] = 'Stil-Manager öffnen';
$string['grapsjs-page_preview'] = 'Vorschau';
$string['grapsjs-page_save'] = 'Speichern';
$string['grapsjs-panels-buttons-titles-export-template'] = 'Code anzeigen';
$string['grapsjs-panels-buttons-titles-fullscreen'] = 'Vollbild';
$string['grapsjs-panels-buttons-titles-open-blocks'] = 'Blöcke öffnen';
$string['grapsjs-panels-buttons-titles-open-layers'] = 'Ebenenmanager öffnen';
$string['grapsjs-panels-buttons-titles-open-sm'] = 'Styles-Manager öffnen';
$string['grapsjs-panels-buttons-titles-open-tm'] = 'Einstellungen öffnen';
$string['grapsjs-panels-buttons-titles-preview'] = 'Vorschau';
$string['grapsjs-panels-buttons-titles-sw-visibility'] = 'Komponenten anzeigen';
$string['grapsjs-position'] = 'Position';
$string['grapsjs-preview'] = 'Vorschau';
$string['grapsjs-redo'] = 'Wiederholen';
$string['grapsjs-repeat'] = 'Wiederholen';
$string['grapsjs-selectormanager-emptystate'] = '- Zustand -';
$string['grapsjs-selectormanager-label'] = 'Klassen';
$string['grapsjs-selectormanager-selected'] = 'Ausgewählt';
$string['grapsjs-selectormanager-states-active'] = 'Klicken';
$string['grapsjs-selectormanager-states-hover'] = 'Hover';
$string['grapsjs-selectormanager-states-nth-of-type-2n'] = 'Gerade/Ungerade';
$string['grapsjs-settings'] = 'Einstellungen';
$string['grapsjs-show_border'] = 'Rahmen anzeigen';
$string['grapsjs-size'] = 'Größe';
$string['grapsjs-stylemanager-empty'] = 'Wählen Sie ein Element aus, um den Stil-Manager zu verwenden';
$string['grapsjs-stylemanager-filebutton'] = 'Bilder';
$string['grapsjs-stylemanager-layer'] = 'Ebene';
$string['grapsjs-stylemanager-properties-align-content'] = 'Inhalt ausrichten';
$string['grapsjs-stylemanager-properties-align-items'] = 'Elemente ausrichten';
$string['grapsjs-stylemanager-properties-align-self'] = 'Selbstausrichtung';
$string['grapsjs-stylemanager-properties-background'] = 'Hintergrund';
$string['grapsjs-stylemanager-properties-background-attachment'] = 'Hintergrundanhang';
$string['grapsjs-stylemanager-properties-background-color'] = 'Hintergrundfarbe';
$string['grapsjs-stylemanager-properties-background-image'] = 'Hintergrundbild';
$string['grapsjs-stylemanager-properties-background-position'] = 'Hintergrundposition';
$string['grapsjs-stylemanager-properties-background-repeat'] = 'Hintergrund wiederholen';
$string['grapsjs-stylemanager-properties-background-size'] = 'Hintergrundgröße';
$string['grapsjs-stylemanager-properties-border'] = 'Grenze';
$string['grapsjs-stylemanager-properties-border-bottom-left'] = 'Untere linke Grenze';
$string['grapsjs-stylemanager-properties-border-bottom-right'] = 'Untere rechte Grenze';
$string['grapsjs-stylemanager-properties-border-color'] = 'Grenzfarbe';
$string['grapsjs-stylemanager-properties-border-radius'] = 'Border Radius';
$string['grapsjs-stylemanager-properties-border-radius-bottom-left'] = 'Border Radius Unten Links';
$string['grapsjs-stylemanager-properties-border-radius-bottom-right'] = 'Border Radius Unten Rechts';
$string['grapsjs-stylemanager-properties-border-radius-top-left'] = 'Border Radius Oben Links';
$string['grapsjs-stylemanager-properties-border-radius-top-right'] = 'Border Radius Oben Rechts';
$string['grapsjs-stylemanager-properties-border-style'] = 'Grenzstil';
$string['grapsjs-stylemanager-properties-border-top-left'] = 'Obere linke Grenze';
$string['grapsjs-stylemanager-properties-border-top-right'] = 'Obere rechte Grenze';
$string['grapsjs-stylemanager-properties-border-width'] = 'Grenzbreite';
$string['grapsjs-stylemanager-properties-bottom'] = 'Unten';
$string['grapsjs-stylemanager-properties-box-shadow'] = 'Box Schatten';
$string['grapsjs-stylemanager-properties-box-shadow-blur'] = 'Box Schatten: Unscharf';
$string['grapsjs-stylemanager-properties-box-shadow-color'] = 'Box Schattenfarbe';
$string['grapsjs-stylemanager-properties-box-shadow-h'] = 'Box Schatten: Horizontal';
$string['grapsjs-stylemanager-properties-box-shadow-spread'] = 'Box Schatten: Ausdehnung';
$string['grapsjs-stylemanager-properties-box-shadow-type'] = 'Box Schattentyp';
$string['grapsjs-stylemanager-properties-box-shadow-v'] = 'Box Schatten: Vertikal';
$string['grapsjs-stylemanager-properties-center'] = 'Zentrum';
$string['grapsjs-stylemanager-properties-color'] = 'Farbe';
$string['grapsjs-stylemanager-properties-display'] = 'Anzeige';
$string['grapsjs-stylemanager-properties-flex-basis'] = 'Flex-Basis';
$string['grapsjs-stylemanager-properties-flex-direction'] = 'Flex Richtung';
$string['grapsjs-stylemanager-properties-flex-grow'] = 'Flex-Wachstum';
$string['grapsjs-stylemanager-properties-flex-shrink'] = 'Flex-Schrumpfen';
$string['grapsjs-stylemanager-properties-flex-wrap'] = 'Flex Wickeln';
$string['grapsjs-stylemanager-properties-float'] = 'Schwimmen';
$string['grapsjs-stylemanager-properties-font-family'] = 'Schriftart';
$string['grapsjs-stylemanager-properties-font-size'] = 'Schriftgröße';
$string['grapsjs-stylemanager-properties-font-weight'] = 'Schriftgewicht';
$string['grapsjs-stylemanager-properties-height'] = 'Höhe';
$string['grapsjs-stylemanager-properties-justify'] = 'Ausrichten';
$string['grapsjs-stylemanager-properties-justify-content'] = 'Inhalt ausrichten';
$string['grapsjs-stylemanager-properties-left'] = 'Links';
$string['grapsjs-stylemanager-properties-letter-spacing'] = 'Zeichenabstand';
$string['grapsjs-stylemanager-properties-line-height'] = 'Zeilenhöhe';
$string['grapsjs-stylemanager-properties-line-through'] = 'Durchgestrichen';
$string['grapsjs-stylemanager-properties-margin'] = 'Rand';
$string['grapsjs-stylemanager-properties-margin-bottom'] = 'Unterer Rand';
$string['grapsjs-stylemanager-properties-margin-left'] = 'Linker Rand';
$string['grapsjs-stylemanager-properties-margin-right'] = 'Rechter Rand';
$string['grapsjs-stylemanager-properties-margin-top'] = 'Oberer Rand';
$string['grapsjs-stylemanager-properties-max-height'] = 'Maximale Höhe';
$string['grapsjs-stylemanager-properties-max-width'] = 'Maximale Breite';
$string['grapsjs-stylemanager-properties-none'] = 'Keine';
$string['grapsjs-stylemanager-properties-order'] = 'Reihenfolge';
$string['grapsjs-stylemanager-properties-padding'] = 'Polsterung';
$string['grapsjs-stylemanager-properties-padding-bottom'] = 'Untere Polsterung';
$string['grapsjs-stylemanager-properties-padding-left'] = 'Linke Polsterung';
$string['grapsjs-stylemanager-properties-padding-right'] = 'Rechte Polsterung';
$string['grapsjs-stylemanager-properties-padding-top'] = 'Obere Polsterung';
$string['grapsjs-stylemanager-properties-perspective'] = 'Perspektive';
$string['grapsjs-stylemanager-properties-position'] = 'Position';
$string['grapsjs-stylemanager-properties-right'] = 'Rechts';
$string['grapsjs-stylemanager-properties-text-align'] = 'Textausrichtung';
$string['grapsjs-stylemanager-properties-text-shadow'] = 'Textschatten';
$string['grapsjs-stylemanager-properties-text-shadow-blur'] = 'Textschatten: Unscharf';
$string['grapsjs-stylemanager-properties-text-shadow-color'] = 'Textschattenfarbe';
$string['grapsjs-stylemanager-properties-text-shadow-h'] = 'Textschatten: Horizontal';
$string['grapsjs-stylemanager-properties-text-shadow-v'] = 'Textschatten: Vertikal';
$string['grapsjs-stylemanager-properties-top'] = 'Oben';
$string['grapsjs-stylemanager-properties-transform'] = 'Transformieren';
$string['grapsjs-stylemanager-properties-transform-rotate-x'] = 'Horizontal drehen';
$string['grapsjs-stylemanager-properties-transform-rotate-y'] = 'Vertikal drehen';
$string['grapsjs-stylemanager-properties-transform-rotate-z'] = 'Tiefe drehen';
$string['grapsjs-stylemanager-properties-transform-scale-x'] = 'Horizontal skalieren';
$string['grapsjs-stylemanager-properties-transform-scale-y'] = 'Vertikal skalieren';
$string['grapsjs-stylemanager-properties-transform-scale-z'] = 'Tiefe skalieren';
$string['grapsjs-stylemanager-properties-transition'] = 'Übergang';
$string['grapsjs-stylemanager-properties-transition-duration'] = 'Übergangsdauer';
$string['grapsjs-stylemanager-properties-transition-property'] = 'Übergangseigenschaft';
$string['grapsjs-stylemanager-properties-transition-timing-function'] = 'Übergangszeitfunktion';
$string['grapsjs-stylemanager-properties-underline'] = 'Unterstreichen';
$string['grapsjs-stylemanager-properties-width'] = 'Breite';
$string['grapsjs-stylemanager-sectors-decorations'] = 'Dekorationen';
$string['grapsjs-stylemanager-sectors-dimension'] = 'Dimension';
$string['grapsjs-stylemanager-sectors-extra'] = 'Extra';
$string['grapsjs-stylemanager-sectors-flex'] = 'Flex';
$string['grapsjs-stylemanager-sectors-general'] = 'Allgemein';
$string['grapsjs-stylemanager-sectors-layout'] = 'Layout';
$string['grapsjs-stylemanager-sectors-typography'] = 'Typografie';
$string['grapsjs-tipografia'] = 'Typografie';
$string['grapsjs-traitmanager-empty'] = 'Wählen Sie ein Element aus, um den Merkmals-Manager zu verwenden';
$string['grapsjs-traitmanager-label'] = 'Komponenteneinstellungen';
$string['grapsjs-traitmanager-traits-options-target-_blank'] = 'Neues Fenster';
$string['grapsjs-traitmanager-traits-options-target-false'] = 'Dieses Fenster';
$string['grapsjs-undo'] = 'Rückgängig machen';
$string['grapsjs-width'] = 'Breite';
$string['heart'] = 'Wenn Ihnen dieses Thema gefällt, vergessen Sie nicht, auf der <a href="{$a}" target="_blank">Themenseite hier</a> auf ❤️ zu klicken';
$string['instructor'] = 'Lehrer';
$string['login_backgroundcolor'] = 'Hintergrundfarbe';
$string['login_backgroundcolor_desc'] = 'Wählen Sie die Hintergrundfarbe für die Passwort-Wiederherstellungsseite aus.';
$string['login_backgroundfoto'] = 'Hintergrundbild';
$string['login_backgroundfoto_desc'] = 'Wählen Sie das Hintergrundbild für Anmeldung, Passwort-Wiederherstellung und Kontoerstellung aus. Standardbild ist: {$a}';
$string['login_forgot_description'] = 'Text auf der Seite Passwort-Wiederherstellung';
$string['login_forgot_description_desc'] = 'Text, der nur auf der Seite Passwort-Wiederherstellung angezeigt wird';
$string['login_login_description'] = 'Text auf der Anmeldeseite';
$string['login_login_description_desc'] = 'Text, der nur auf der Anmeldeseite angezeigt wird';
$string['login_signup_description'] = 'Text auf der Seite Konto erstellen';
$string['login_signup_description_desc'] = 'Text, der nur auf der Seite Konto erstellen angezeigt wird';
$string['login_theme'] = 'Anmelde-Design';
$string['login_theme_block'] = 'Zentrierter weißer Block mit optionalem Hintergrund';
$string['login_theme_desc'] = 'Wählen Sie das gewünschte Design für den Anmeldebereich aus.';
$string['login_theme_image_login'] = 'Hintergrundbild und Anmeldung nebenan';
$string['login_theme_imagetext_login'] = 'Hintergrundbild, Text über dem Bild und Anmeldung nebenan';
$string['login_theme_login'] = 'Nur Anmeldebildschirm, ohne seitliches Bild';
$string['logo_color'] = 'Farbiges Logo';
$string['logo_color_desc'] = 'Bitte laden Sie Ihr farbiges LOGO hoch, wenn Sie es im oberen Bereich anzeigen möchten. Dieses Logo wird angezeigt, wenn die Seite gescrollt wird und das Menü auf weißem Hintergrund angezeigt wird.';
$string['logo_write'] = 'Topmenü-Logo beim Scrollen';
$string['logo_write_desc'] = 'Bitte laden Sie Ihr weißes LOGO hoch, wenn Sie es im oberen Bereich anzeigen möchten. Dieses Logo wird angezeigt, wenn beim Scrollen der Seite die obere Position beibehalten wird und das Menü auf farbigem Hintergrund angezeigt wird.';
$string['matricular'] = 'Einschreiben';
$string['mycourses_color'] = 'Blockhintergrundfarbe';
$string['mycourses_color_desc'] = 'Die Hintergrundfarbe des Blocks.';
$string['mycourses_icon'] = 'Symbol';
$string['mycourses_icon_desc'] = 'Ein repräsentatives Symbol für den Block. Die Symbolgröße sollte 48x48 Pixel betragen.';
$string['mycourses_info'] = 'Block {$a}';
$string['mycourses_numblocos'] = 'Keine Blöcke';
$string['mycourses_numblocos_desc'] = 'Wie viele Bilder möchten Sie in der Diashow haben?';
$string['mycourses_numblocos_nenhum'] = 'Keine Folien auf der Startseite';
$string['mycourses_title'] = 'Kurzer Blocktitel';
$string['mycourses_title_desc'] = 'Ein kurzer und beschreibender Titel für den Block.';
$string['mycourses_url'] = 'Block-Link';
$string['mycourses_url_desc'] = 'Die URL, zu der beim Klicken auf den Block navigiert wird. Es kann ein externer Link oder ein interner Link innerhalb der Plattform sein.';
$string['pluginname'] = 'Degrade';
$string['privacy:metadata'] = 'Das Design Degrade speichert keine personenbezogenen Daten.';
$string['settings_about_heading'] = 'Über Ihr Moodle';
$string['settings_css_heading'] = 'Schriftarten und CSS';
$string['settings_footer_heading'] = 'Fußzeilenblock';
$string['settings_icons_block'] = 'Symbol {$a}';
$string['settings_icons_change_icons'] = 'Standard-Symbol in der Kursliste ändern';
$string['settings_icons_default_audio_file'] = 'Audio';
$string['settings_icons_default_book'] = 'Buch';
$string['settings_icons_default_download'] = 'Herunterladen';
$string['settings_icons_default_game'] = 'Spiel';
$string['settings_icons_default_money'] = 'Finanz';
$string['settings_icons_default_slide'] = 'Folien';
$string['settings_icons_default_support'] = 'Unterstützung';
$string['settings_icons_default_video_file'] = 'Video';
$string['settings_icons_heading'] = 'Symbole';
$string['settings_icons_image'] = 'Symbolbild';
$string['settings_icons_image_desc'] = 'Laden Sie das SVG- oder PNG-Bild des gewünschten Symbols hoch, um es im Kurs zu ersetzen.<br>Empfohlene Größe: 24px. Wenn PNG, denken Sie an die Transparenz.';
$string['settings_icons_module_disable'] = 'Die Auswahl des benutzerdefinierten Symbols ist deaktiviert. Aktivieren Sie unter {$a}';
$string['settings_icons_name'] = 'Name des Symbols';
$string['settings_icons_name_desc'] = 'Fügen Sie den Symbolnamen hinzu, um die Auswahl im Modul zu erleichtern';
$string['settings_icons_none'] = 'Kein benutzerdefiniertes Symbol';
$string['settings_icons_num'] = 'Anzahl der Symbole';
$string['settings_icons_num_desc'] = 'Anzahl der benutzerdefinierten Symbole, die Sie hinzufügen möchten';
$string['settings_icons_select_icon'] = 'Wählen Sie das benutzerdefinierte Symbol aus. Bearbeiten Sie unter {$a}';
$string['settings_login_heading'] = 'Anmeldebildschirm';
$string['settings_mycourses_heading'] = 'Meine Kursblöcke';
$string['settings_slideshow_heading'] = 'Diashow';
$string['settings_theme_heading'] = 'Thema und CSS';
$string['settings_top_heading'] = 'Oben';
$string['sitefonts'] = 'Zusätzliche Google-Schriftarten';
$string['sitefonts_desc'] = 'Fügen Sie den @import-Code von Google Fonts gemäß dem Bild unten ein. Nach dem Speichern wird das Feld "Website-Schriftart" aktualisiert und zeigt diese Schriftarten an. Sie können bei Bedarf mehrere @import hinzufügen.';
$string['slidecaption_desc'] = 'Geben Sie den Text der Bildunterschrift für die Folie ein';
$string['slideshow_image'] = 'Bild der Folie';
$string['slideshow_image_desc'] = 'Das Bild sollte 1250px X 400px haben.';
$string['slideshow_info'] = 'Folie {$a}';
$string['slideshow_numslides'] = 'Anzahl der Bilder in der Diashow';
$string['slideshow_numslides_desc'] = 'Wie viele Bilder möchten Sie in der Diashow haben?';
$string['slideshow_numslides_nenhum'] = 'Keine Folie auf der Startseite';
$string['slideshow_text'] = 'Kurzer beschreibender Text der Folie';
$string['slideshow_text_desc'] = 'Geben Sie einen kurzen Text zur Folie ein.';
$string['slideshow_url'] = 'Link zur Schaltfläche der Folien';
$string['slideshow_url_desc'] = 'Geben Sie das Ziel des Links für die Bildschaltfläche ein';
$string['social_facebook'] = 'Ihr Facebook';
$string['social_facebook_desc'] = 'Die URL des Facebook Ihrer Organisation.';
$string['social_instagram'] = 'Ihr Instagram';
$string['social_instagram_desc'] = 'Die URL des Instagram Ihrer Organisation.';
$string['social_linkedin'] = 'Ihr LinkedIn';
$string['social_linkedin_desc'] = 'Die URL des LinkedIn Ihrer Organisation.';
$string['social_twitter'] = 'Ihr Twitter';
$string['social_twitter_desc'] = 'Die URL des Twitter Ihrer Organisation.';
$string['social_youtube'] = 'Ihr YouTube';
$string['social_youtube_desc'] = 'Die URL des YouTube Ihrer Organisation.';
$string['theme_color'] = 'Farbauswahl';
$string['theme_color-color_buttons'] = 'Farbe der Schaltflächen';
$string['theme_color-color_buttons_desc'] = 'Die Farbe, die für Schaltflächen verwendet wird, um visuelle Kohärenz hinzuzufügen und interaktive Aktionen hervorzuheben.';
$string['theme_color-color_names'] = 'Farbe der Namen';
$string['theme_color-color_names_desc'] = 'Die Farbe, die verwendet wird, um Namen oder Kennungen hervorzuheben und spezifische Textinformationen klar und betont darzustellen.';
$string['theme_color-color_primary'] = 'Primärfarbe';
$string['theme_color-color_primary_desc'] = 'Die Hauptprimärfarbe des Themas, normalerweise für hervorgehobene und betonte Elemente verwendet.';
$string['theme_color-color_secondary'] = 'Sekundärfarbe';
$string['theme_color-color_secondary_desc'] = 'Eine sekundäre Farbe, die die Primärfarbe ergänzt, für sekundäre Elemente verwendet oder um mit der Primärfarbe zu kontrastieren.';
$string['theme_color-color_titles'] = 'Farbe der Titel';
$string['theme_color-color_titles_desc'] = 'Die Farbe, die für Titel verwendet wird, um dem Inhalt der Seite Hervorhebung und visuelle Struktur zu verleihen.';
$string['theme_color_blue'] = 'Blau';
$string['theme_color_desc'] = 'Wählen Sie die Farben für Texte und Schaltflächen in Moodle aus oder klicken Sie auf die Zeile unten:';
$string['theme_color_green'] = 'Grün';
$string['theme_color_green_d'] = 'Dunkelgrün';
$string['theme_color_heading'] = 'Umgebungsfarbauswahl';
$string['theme_color_red_d'] = 'Rot';
$string['theme_color_violet'] = 'Violett';
$string['theme_degrade_about_editbooton'] = 'Überblock bearbeiten';
$string['theme_degrade_frontpage_bloco'] = 'Block "{$a}"';
$string['theme_degrade_frontpage_home'] = 'Startseitenblöcke';
$string['theme_degrade_mycourses_editbooton'] = 'Blöcke bearbeiten';
$string['theme_degrade_slideshow_editbooton'] = 'Diashow bearbeiten';
$string['theme_login_branco'] = 'Nur Anmeldebildschirm, ohne seitliches Bild, mit Formular auf weißem Hintergrund';
$string['top_color_heading'] = 'Farbe oben beim Scrollen';
$string['top_scroll_background_color'] = 'Hintergrundfarbe des oberen Menüs beim Scrollen';
$string['top_scroll_background_color_desc'] = 'Legen Sie die Hintergrundfarbe beim Scrollen der Seite fest.';
$string['top_scroll_text_color'] = 'Textfarbe des Menüs beim Scrollen';
$string['top_scroll_text_color_desc'] = 'Legen Sie die Textfarbe des Menüs beim Scrollen der Seite fest.';
