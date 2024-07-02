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
 * Strings for component 'tool_program', language 'ja', version '4.1'.
 *
 * @package     tool_program
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['active'] = 'アクティブ';
$string['activeprograms'] = 'アクティブなプログラム';
$string['activeprogramslink'] = '<a href="{$a->href}">{$a->count} アクティブなプログラム</a>';
$string['addcourses'] = 'コース追加';
$string['addcourseslist'] = 'コース選択';
$string['addcourseslist_help'] = 'ひとつまたはそれ以上のコースを選択できます。';
$string['addset'] = 'セット追加';
$string['addsetorcourse'] = 'コースまたはセットを追加';
$string['afterallocationwindowstarts'] = '割り当て開始後';
$string['afterallocationwindowstartswithrelativedate'] = '{$a} 割り当て開始後';
$string['afterstartdate'] = '開始日以降';
$string['afterstartdatewithrelativedate'] = '開始日以降';
$string['afteruserallocationdate'] = 'ユーザの割り当て日以降';
$string['afteruserallocationdatewithrelativedate'] = '{$a} ユーザの割り当て日以降';
$string['allinanyorder'] = '自由な順番ですべて';
$string['allinorder'] = '順番にすべて';
$string['allocatetoprogram'] = 'プログラムに割り当てる';
$string['allocateusers'] = 'ユーザを割り当てる';
$string['allocationdate'] = '割り当て日';
$string['allocationdateonorafter'] = '割り当て日以降';
$string['allocationenddate'] = '割り当ての終了日';
$string['allocationenddate_help'] = 'このプログラムへのユーザー割り当て終了日';
$string['archive'] = 'アーカイブ';
$string['archivedprograms'] = 'アーカイブされたプログラム';
$string['atleast'] = '少なくとも';
$string['autocreategroups'] = 'コースグループに追加';
$string['autocreategroupsprogram'] = 'このプログラムにグループを作成する';
$string['calendar'] = 'スケジュール';
$string['certificationmsgactive'] = '認証<strong>「{$a->fullname}」</strong>は<strong>{$a->date}</strong>までに完了する必要があります。';
$string['certificationmsgcompleted'] = '認証<strong>「{$a->fullname}」を完了しました。';
$string['certificationmsgcompletedexpired'] = '認証<strong>「{$a->fullname}」を完了しました。これは<strong>{$a->date}</strong>に有効期限が切れます。';
$string['certificationmsgduedatenotset'] = '認定<strong>「{$a->fullname}」に有効期限が設定されています。';
$string['certificationmsgexpired'] = '認証<strong>「{$a->fullname}」は<strong>{$a->date}</strong>に有効期限が切れます。';
$string['certificationmsgoverdue'] = '認証<strong>「{$a->fullname}」は<strong>{$a->date}</strong>に有効期限が切れました。';
$string['certifications'] = '資格';
$string['completeallinanyorder'] = '順番を問わない';
$string['completeallinorder'] = 'すべて順番に完了する';
$string['completeatleast'] = '少なくとも以下を完了する';
$string['completed'] = '完了';
$string['conditionprogramoverdue'] = '期限切れのプログラム';
$string['conditionusernotallocated'] = 'プログラムに割り当てられていないユーザ';
$string['conditionusernotallocateddescription'] = '';
$string['confirmdeletecourse'] = '本当にこのコース \'{$a}\' をプログラムから削除してよろしいですか？';
$string['confirmdeleteprogram'] = '本当にこのプログラム \'{$a}\' とそれに関連つけられたデータを削除してよろしいですか？この操作は元に戻せません。';
$string['confirmdeleteset'] = '本当にこのセット \'{$a}\' とその中にあるすべてのコースを削除してよろしいでしょうか？';
$string['confirmdeleteuserallocation'] = '本当にユーザ \'{$a}\' と関連する割り当てのデータを完全に削除してよろしいでしょうか？この操作は元に戻せません。';
$string['content'] = 'コンテンツ';
$string['copy'] = 'コピー';
$string['course'] = 'コース';
$string['coursenotavailable'] = 'コース利用不可';
$string['duedate'] = '期限';
$string['enddate'] = '終了日';
$string['erroridnumberuniquetenant'] = 'このIDナンバーは既に他のプログラムで使用されています。';
$string['errorloadingprogram_mobile'] = 'プログラムの読み込み中にエラーが発生しました。';
$string['errormissingenrolprogramplugin'] = 'エンロールプログラムプラグインが見つかりません';
$string['errornopermissionallocateusers'] = 'ユーザをプログラムに割り当てる権限がありません';
$string['errornopermissionmanageprograms'] = 'プログラムの管理権限がありません';
$string['errornopermissionmanageusers'] = 'ユーザの管理権限がありません';
$string['errornopermissionviewallocatedusers'] = 'プログラムに割り当てられたユーザの閲覧権限がありません';
$string['errornopermissionviewprograms'] = 'プログラムの閲覧権限がありません';
$string['errornopermissionviewreports'] = 'レポートの閲覧権限がありません';
$string['errorprogramnotfound'] = 'プログラムが見つかりませんでした';
$string['errorreporttypedoesnotexist'] = 'レポートタイプが存在しません';
$string['errorsameidnumber'] = '同じIDナンバーのプログラムが既に存在します';
$string['eventcourseadded'] = 'コースが追加されました';
$string['eventcourseremoved'] = 'コースが削除されました';
$string['eventcourseupdated'] = 'コースが更新されました';
$string['eventprogramcompleted'] = 'プログラムが完了しました';
$string['eventprogramcreated'] = 'プログラムが作成されました';
$string['eventprogramdeleted'] = 'プログラムが削除されました';
$string['eventprogramupdated'] = 'プログラムが更新されました';
$string['eventsetcompleted'] = 'セットが完了しました';
$string['eventsetcreated'] = 'セットが作成されました';
$string['eventsetdeleted'] = 'セットが削除されました';
$string['eventsetupdated'] = 'セットが更新されました';
$string['eventuserallocated'] = 'ユーザ割り当てが完了しました';
$string['eventuserdeallocated'] = 'ユーザの割り当て解除されました';
$string['export_content'] = '設定';
$string['export_content_help'] = 'プログラム、名前、概要、日付、タグなど';
$string['export_dynamic_rules'] = 'ダイナミックルール';
$string['futureallocation'] = '将来的な割り当て';
$string['hiddenfromlearners'] = '学習者から秘匿する';
$string['idnumber'] = 'IDナンバー';
$string['import_content'] = '設定';
$string['import_content_help'] = 'プログラム、名前、概要、日付、タグなど';
$string['import_dynamic_rules'] = 'ダイナミックルール';
$string['inprogress'] = '進行中';
$string['locked'] = 'ロック済み';
$string['messageprovider:programcompleted'] = 'プログラム完了';
$string['missingfullname'] = 'プログラムの名前が見つかりません。';
$string['missingprogram'] = '存在しないプログラム';
$string['missingsetname'] = 'セットの名前が見つかりません。';
$string['name'] = '名前';
$string['newprogram'] = '新しいプログラム';
$string['notarchived'] = 'アーカイブされていない';
$string['notavailable'] = '利用不可';
$string['notcompleted'] = '完了していない';
$string['notenrolledprograms_mobile'] = 'あなたはどのプログラムにも登録されていません';
$string['notset'] = '未設定';
$string['open'] = 'オープン';
$string['overdue'] = '期限切れ';
$string['programsoverview_mobile'] = 'プログラム概要';
$string['review'] = 'レビュー';
$string['seecontent_mobile'] = 'コンテンツを表示する';
$string['selectatleastoneprogram'] = '最低でも1つのプログラムを選択';
$string['selectcourses'] = 'コースを選択';
$string['selectmanually'] = '手動で選択...';
$string['selectprogramcondition'] = 'プログラム';
$string['selectprogramcondition_help'] = 'このコンディションに関連付けるプログラムを選択する';
$string['selectprogramoutcome'] = 'プログラム';
$string['selectprogramoutcome_help'] = 'このアクションに関連付けるプログラムを選択する';
$string['selectprogramstoallocate'] = 'プログラム';
$string['selectprogramstoallocate_help'] = 'ユーザーを割り当てるプログラムを選択する';
$string['separatetenantsingroupswarning'] = 'テナント間で共有されるコースでは、各テナントのユーザーは別々のグループに追加されます。';
$string['set'] = 'セット';
$string['setname'] = '名';
$string['setname_help'] = 'セット名を選択してください';
$string['setofcourses'] = 'コースのセット';
$string['setsandcoursesnotfound_mobile'] = 'コースまたはセットが見つかりません';
$string['startdate'] = '開始日';
$string['startdate_help'] = 'プログラムの開始日';
$string['status'] = 'ステータス';
$string['suspended'] = '停止中';
$string['tagarea_tool_program'] = 'プログラム';
$string['tags'] = 'タグ';
$string['toomanyprogramstoshow'] = 'プログラムが多すぎます';
$string['type'] = 'タイプ';
$string['userduedate'] = '締切日';
$string['userduedate_help'] = 'このユーザに対するプログラムの締切日を選択してください。';
$string['userenddate'] = '終了日';
$string['userstartdate'] = '開始日';
$string['warningcourseinvisible'] = '警告：このコースは生徒には見えません。';
