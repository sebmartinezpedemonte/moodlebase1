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
 * Strings for component 'tool_courserating', language 'ja', version '4.1'.
 *
 * @package     tool_courserating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrating'] = '評価をつける';
$string['barwithrating'] = '{$a->rating} 個の星は {$a->percent} の評価を意味する';
$string['cannotrate'] = 'あなたにはこのコースを評価するためのパーミッションがありません。';
$string['cannotview'] = 'あなたにはこのコースの評価を閲覧するためのパーミッションがありません。';
$string['cfielddescription'] = '編集しないでください。誰かがこのコースに評価をつけるたびに自動的にコンテンツが追加されます。';
$string['colorrating'] = '評価の色';
$string['colorratingconfig'] = '通常、これは視覚効果を高めるため星の色よりも若干暗めです。';
$string['colorstar'] = '星の色';
$string['courserating:delete'] = 'コース評価およびレビューを削除してフラグ付きレビューを表示する';
$string['courserating:rate'] = 'コース評価をつける';
$string['coursereviews'] = 'コースレビュー';
$string['deleterating'] = '完全に削除する';
$string['deletereason'] = '削除理由';
$string['displayempty'] = '評価なしを灰色の星で表示する';
$string['displayemptyconfig'] = 'コース評価が有効でまだ評価されていない場合、灰色の星が表示されます。この設定が有効ではない場合、そのようなコースには評価は表示されません。';
$string['editrating'] = 'あなたの評価を編集する';
$string['event:flag_created'] = 'コース評価にフラグが立てられました。';
$string['event:flag_deleted'] = 'コース評価フラグが取り消されました。';
$string['event:rating_created'] = 'コース評価が作成されました。';
$string['event:rating_deleted'] = 'コース評価が削除されました。';
$string['event:rating_updated'] = 'コース評価が更新されました。';
$string['flagrating'] = 'フラグを立てる';
$string['parentcss'] = '親エレメントのCSSセレクタ';
$string['parentcssconfig'] = 'コース評価はこのセレクタに合致するDOM要素の最後の子としてコースページに表示されます。サイトがカスタムテーマを使用していてカスタムの親を指定したい場合、あなたはこれをオーバーライドする必要があるかもしれません。空のままにした場合、デフォルト値が使用されます。Moodle 4.0の場合、デフォルトは「#page-header」です。Moodle 3.11の場合、デフォルトは「#page-header .card-body, #page-header #course-header, #page-header」です。';
$string['percourseoverride'] = 'コースオーバーライド';
$string['percourseoverrideconfig'] = 'この設定を有効にした場合、それぞれのコースがいつ評価されるか設定できるカスタムコースフィールドが作成されます。「コース評価タイミング」設定値がデフォルトとして扱われます。';
$string['pluginname'] = 'コース評価';
$string['privacy:metadata:tool_courserating:reason'] = '理由';
$string['privacy:metadata:tool_courserating:reasoncode'] = '理由コード';
$string['privacy:metadata:tool_courserating:timecreated'] = '作成日時';
$string['privacy:metadata:tool_courserating:timemodified'] = '修正日時';
$string['privacy:metadata:tool_courserating_flag'] = 'フラグが立てられた評価';
$string['privacy:metadata:tool_courserating_flag:id'] = 'ID';
$string['privacy:metadata:tool_courserating_flag:ratingid'] = '評価ID';
$string['privacy:metadata:tool_courserating_flag:userid'] = 'ユーザID';
$string['privacy:metadata:tool_courserating_rating'] = 'コース評価';
$string['privacy:metadata:tool_courserating_rating:cohortid'] = 'コースID';
$string['privacy:metadata:tool_courserating_rating:hasreview'] = 'レビュー済み';
$string['privacy:metadata:tool_courserating_rating:id'] = 'ID';
$string['privacy:metadata:tool_courserating_rating:rating'] = '評価';
$string['privacy:metadata:tool_courserating_rating:review'] = 'レビュー';
$string['privacy:metadata:tool_courserating_rating:timecreated'] = '作成日時';
$string['privacy:metadata:tool_courserating_rating:timemodified'] = '修正日時';
$string['privacy:metadata:tool_courserating_rating:userid'] = 'ユーザ';
$string['ratebyanybody'] = '学生はいつでもコース評価できる';
$string['ratebycompleted'] = '学生はコース完了後のみコース評価できる';
$string['ratebydefault'] = 'デフォルト値:「 {$a} 」';
$string['ratebynoone'] = 'コース評価は無効にされています。';
$string['ratedcategory'] = 'コース評価が許可されているコース';
$string['rating'] = '評価';
$string['ratinglabel'] = 'コース評価';
$string['ratingmode'] = 'コース評価タイミング';
$string['ratingmodeconfig'] = 'さらにコース評価機能もチェックされます。';
$string['reindextask'] = 'コース評価を再インデックスする';
$string['review'] = 'レビュー (任意)';
$string['revokeratingflag'] = '取り消す';
$string['settingsdescription'] = 'いくつかの設定を変更した場合、すべてのコースおよびコース評価のインデックスを再作成する必要があります。これは次のcron実行時に自動的に実施されます。';
$string['showallratings'] = 'すべてを表示する';
$string['showmorereviews'] = 'さらに表示する';
$string['usehtml'] = 'レビューにリッチテキストエディタを使用する';
$string['usehtmlconfig'] = '学生がレビュー編集にリンクおよび添付ファイルを含むリッチテキストエディタを使用できるようにします。';
$string['usersflagged'] = '{$a} ユーザがこのレビューに不適切/不快であるとフラグを立てています。';
$string['viewallreviews'] = 'すべてのレビューを表示する';
$string['youflagged'] = 'あなたはこのレビューに不適切/不快であるとフラグを立てています。';
