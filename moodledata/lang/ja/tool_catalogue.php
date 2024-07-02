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
 * Strings for component 'tool_catalogue', language 'ja', version '4.1'.
 *
 * @package     tool_catalogue
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aboutthiscourse'] = 'このコースについて';
$string['aboutthisprogram'] = 'このプログラムについて';
$string['all'] = 'すべて';
$string['aria:courseactions'] = 'コースアクション';
$string['cataloguesettings'] = 'プログラムとコースカタログの設定';
$string['certifications'] = '認定';
$string['certificationstatuscertified'] = '認定 \'<strong>{$a->name}</strong>\' が完了しました。';
$string['certificationstatuscertifiedwithdate'] = '認定 \'<strong>{$a->name}</strong>\' が完了しました。\'<strong>{$a->date}</strong>\' に期限切れとなります。';
$string['certificationstatusexpired'] = '認定 \'<strong>{$a->name}</strong>\' の有効期限は {$a->date} です。';
$string['certificationstatusopen'] = '認定 \'<strong>{$a->name}</strong>\' は無期限です。';
$string['certificationstatusopenwithdate'] = '認定 \'<strong>{$a->name}</strong>\'を取得するためには、\'<strong>{$a->date}</strong>\' までにこのプログラムを終了させてください。';
$string['certificationstatusoverdue'] = '認証 \'<strong>{$a->name}</strong>\' の期限は \'<strong>{$a->date}</strong>\' でした。';
$string['complete'] = '完了';
$string['completeatleast'] = '少なくとも {$a}を完了する';
$string['coursecoverhelp'] = 'このコースは\'{$a}\'プログラムの一部です。';
$string['coursecoverhelpmultiprogram'] = 'このコースはいくつかのプログラムに含まれています。';
$string['coursecoverhelptext'] = '<ul><li>これは、より大きなプログラムの中の1つのコースに過ぎません</li><li>このコースを修了した後に、新しいコースが受講できる可能性があります</li></ul>。';
$string['coursedisplayduelimit'] = 'コースの残り日数を表示';
$string['coursedisplayduelimit_desc'] = 'コース名の隣に終了日のリマインダーが表示される日数です。例えば、14と設定した場合、コースが終了する14日前からリマインダーが表示されます。多くの異なる終了日がある場合、システムは次に近い終了日を評価します。この機能を無効にするには0を設定してください。';
$string['coursefiles'] = 'コースファイル';
$string['courseimage_help'] = 'コースイメージ';
$string['coursenotavailable'] = '利用できないコース';
$string['courses'] = 'コース';
$string['dates'] = '日付';
$string['daysleft'] = '残り {$a}日';
$string['defaultsortorder'] = 'デフォルトの並び順';
$string['displaycourseinfomodal'] = 'コース情報モーダルを表示する';
$string['displayforeverybody'] = 'すべてのユーザに表示する';
$string['displayfornotadmin'] = '管理者以外のユーザーにのみ表示する';
$string['displayforstudentsandguests'] = 'ゲストアクセス時・学生にのみ表示する';
$string['displaynever'] = '表示しない';
$string['displayprogramcoverpage'] = 'プログラムカバーページを表示する';
$string['dontshowagain'] = '二度とこのメッセージを表示しない';
$string['duedate'] = '終了日順でソート';
$string['duedateinfo'] = '期限は1日以内';
$string['duedateinfodays'] = '期限は {$a} 日';
$string['duedatex'] = '<strong>締切日：</strong> {$a}';
$string['enddatex'] = '<strong>終了日：</strong> {$a}';
$string['errornopermissionviewcoursecover'] = 'コースカバーページの閲覧権限がありません。';
$string['errornopermissionviewprogram'] = 'プログラムの閲覧権限がありません';
$string['hiddenfromlearners'] = '学習者から秘匿';
$string['incomplete'] = '未完了';
$string['information'] = '詳細情報';
$string['iunderstand'] = 'わかりました';
$string['lastaccess'] = '最終アクセスでソート';
$string['moreinfo'] = 'さらに詳しく';
$string['mycourses'] = 'マイコース';
$string['name'] = '名前でソート';
$string['notavailableunless'] = '<strong>{$a}</strong>\' が利用可能でなければ利用不可';
$string['notavailableuntil'] = '\'{$a}\' が完了するまで利用不可';
$string['notnow'] = '後で';
$string['notset'] = '未設定';
$string['overdue'] = '期限切れ';
$string['pluginname'] = 'ラーニングカタログ';
$string['privacy:metadata:preference:tool_catalogue_collapse_recently_accessed_courses'] = '「最近アクセスしたコース」セクションを折りたたむかどうか';
$string['privacy:metadata:preference:tool_catalogue_hide_program_cover_help'] = 'プログラムカバーのヘルプを表示するかどうか';
$string['privacy:metadata:preference:tool_catalogue_my_courses_filter'] = 'プログラムとコースを、すべて/コース/プログラム/完了/未完了でフィルタリングするかどうか';
$string['privacy:metadata:preference:tool_catalogue_my_courses_sort'] = 'プログラムとコースを、名前/期限/最終アクセス順にソートするかどうか';
$string['privacy:metadata:showprogramcoverhelp'] = 'プログラムカバーのヘルプを表示するかどうか';
$string['privacy:request:preference:set'] = '設定値 \'{$a->name}\' は \'{$a->value}\'';
$string['proceedtocourse'] = 'コースコンテンツに進む';
$string['proceedtoprogram'] = 'プログラム内容に進む';
$string['program'] = 'プログラム';
$string['programdisplayduelimit'] = 'プログラム締め切りまでの残り日数を表示';
$string['programdisplayduelimit_desc'] = 'プログラム名の横に締切日のリマインダーが表示される日数です。例えば、14を設定した場合、リマインダーはプログラムが期限に達する前の14日間に表示されます。この機能を無効にするには、0を設定します。';
$string['programempty'] = 'このプログラムにコースはありません';
$string['programhelptext'] = '<ul><li>プログラムには様々なコースが含まれています。</li><li>各コースを(1つ以上またはすべて)完了するとプログラム完了となります。</li></ul>';
$string['programhelptitle'] = 'プログラムとは？';
$string['programimage_help'] = 'プログラムイメージ';
$string['programlink'] = '"{$a}" の詳細を見る';
$string['programlinksingle'] = 'プログラムの詳細を見る';
$string['programs'] = 'プログラム';
$string['programstructure'] = 'プログラム構成';
$string['progress'] = '{$a}% 完了';
$string['progresscompleted'] = ' {$a->total} の {$a->completed} 完了';
$string['recentlyaccessedcourses'] = '最近アクセスしたコース';
$string['searchplaceholder'] = 'コース・プログラムを探す';
$string['selectenrolmentmethod'] = '登録方法の選択';
$string['showcataloguecoursecategory'] = 'コースカードにコースカテゴリを表示する';
$string['showcataloguecoursecategory_desc'] = 'コースカテゴリは「ダッシュボード」「マイコース」およびいくつかのブロックにあるすべてのコースカードに表示されます。';
$string['showcoursedates'] = 'コースモーダルにコースの日付を表示する';
$string['showcoursedates_desc'] = 'コース日程はコースモーダルおよびコース情報タブに表示されます。';
$string['showmore'] = '{$a} を詳しく...';
$string['startdatex'] = '<strong>開始日：</strong> {$a}';
$string['todo'] = 'To do：';
$string['trainers'] = 'トレーナー';
$string['xcourses'] = '{$a} コース';
