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
 * Strings for component 'report_coursesize', language 'ja', version '4.1'.
 *
 * @package     report_coursesize
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allcourses'] = 'すべてのコース';
$string['backupsize'] = 'バックアップサイズ';
$string['calcmethod'] = 'メインレポートを更新する';
$string['calcmethodcron'] = 'スケジュールタスク';
$string['calcmethodhelp'] = 'スケジュールタスクで計算された場合、レポートはスケジュールされた時間に更新された上で後で閲覧するために結果がキャッシュされます。クエリの実行には集中的に時間を要するため、即時計算よりスケジュールタスクを推奨します。';
$string['calcmethodlive'] = 'ページ読み込み時';
$string['catsystembackupuse'] = 'システムおよびカテゴリのバックアップ使用量は {$a} です。';
$string['catsystemuse'] = 'ユーザ外およびコース外でのシステムおよびカテゴリ使用量は {$a} です。';
$string['coursebackupbytes'] = 'コース {$a->shortname} のバックアップに {$a->backupbytes} バイト使用されています。';
$string['coursebytes'] = 'コース {$a->shortname} に {$a->bytes} バイト使用されています。';
$string['coursereport'] = 'プラグインタイプ概要 - これはメインのコースリストとは異なる場合があります。恐らく、より正確であることに留意してください。';
$string['coursesize'] = 'コースサイズ';
$string['coursesize:view'] = 'コースサイズレポートを表示する';
$string['coursesize_desc'] = '<p>このレポートでは大まかな値のみ提供します。コース内または複数コースでファイルが複数回使用されている場合、仮にMoodleがディスクに1つの物理的バージョンしか保存していない場合でも、レポートではそれぞれのインスタンスがカウントされます。</p>';
$string['coursesummary'] = '(統計を表示する)';
$string['diskusage'] = '合計';
$string['emptycourseshidden'] = 'ファイルストレージを使用していないコースはこのレポートから除外されています。';
$string['exportcsv'] = 'CSVでエクスポートする';
$string['filearea'] = 'ファイルエリア';
$string['lastupdate'] = '(最終更新日時 {$a})';
$string['lastupdatenever'] = 'スケジュールタスクによる統計情報の生成を待っています。';
$string['nouserfiles'] = '表示するユーザファイルはありません。';
$string['pluginname'] = 'コースサイズ';
$string['privacy:metadata'] = 'コースサイズプラグインはいかなる個人データも保存しません。';
$string['sharedusage'] = '共有使用量';
$string['sharedusagecourse'] = '約 {$a} は他のコースと共有されています。';
$string['sitefilesusage'] = 'ファイル使用状況レポート';
$string['sizepermitted'] = '(許可使用量 {$a}MB)';
$string['totalsitedata'] = '合計サイトデータ使用量: {$a}';
$string['userstopnum'] = 'ユーザ (トップ {$a})';
