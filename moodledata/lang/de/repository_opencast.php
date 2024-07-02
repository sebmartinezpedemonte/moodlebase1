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
 * Strings for component 'repository_opencast', language 'de', version '4.1'.
 *
 * @package     repository_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = 'Opencast Einstellungen';
$string['opencast:view'] = 'Repository Opencast anzeigen';
$string['opencastauthor'] = 'Opencast-Standardautor';
$string['opencastchannelid_help'] = 'Legen Sie die channelid des Publikationskanals fest, um die URL der Miniaturansicht und des Videos abzurufen.';
$string['opencastinstance'] = 'Opencast-Instanz';
$string['opencastthumbnailflavor'] = 'Bevorzugter Flavor für Miniaturansichten';
$string['opencastthumbnailflavor_help'] = 'Eine Veröffentlichung kann mehrere Anhänge mit unterschiedlichen Flavors haben.
Legen Sie den Flavor fest (z.B. "presenter/search+preview"), der für den Abruf der Miniaturansicht verwendet werden soll. Wenn es keinen Anhang mit diesem Flavor gibt, versucht das
    Plugin, einen Anhang mit dem Fallback-Flavor zu finden.';
$string['opencastthumbnailflavorfallback'] = 'Fallback-Variante für Miniaturansicht';
$string['opencastthumbnailflavorfallback_help'] = 'Legen Sie die Variante fest, die verwendet werden soll, wenn kein Anhang mit der oben genannten bevorzugten Variante verfügbar ist.
Wenn Sie alle Eingaben für die Thumbnail-Suche leer lassen, wird das Plugin automatisch versuchen, eine Thumbnail-URL zu finden.';
$string['opencastvideoflavor'] = 'Flavor für Video';
$string['opencastvideoflavor_help'] = 'Eine Veröffentlichung kann mehrere Anhänge mit unterschiedlichen Flavors haben. Legen Sie einen Flavor fest, der zum Abrufen der Video-URL verwendet werden soll.
    Wenn Sie dieses Feld leer lassen, wird die erste verfügbare Video-URL aus den Anhängen verwendet.';
