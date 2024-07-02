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
 * Strings for component 'tool_wp', language 'ja', version '4.1'.
 *
 * @package     tool_wp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alldata'] = 'すべてのデータ';
$string['coursesadmintab'] = '学習';
$string['importernotfound'] = 'インポーター {$a} が見つからないか、利用できません';
$string['importerrequired'] = '複数のインポーターが利用可能であるため、インポーターを指定する必要があります';
$string['importerrequirestenant'] = 'インポーター \'{$a}\' にはテナントが必要です';
$string['importersettingsinvalid'] = 'インポーター設定が有効なJSON形式ではありません';
$string['importersettingsvalidationfailed'] = 'インポーター設定の検証に失敗しました: {$a}';
$string['importformat'] = 'ファイルフォーマット';
$string['importformatauto'] = '自動検出';
$string['importformatcsv'] = 'CSV';
$string['importformatworkplace'] = 'Workplace フォーマット';
$string['importfromfile'] = 'このファイルからの新しいインポート';
$string['importgeneralsettings'] = '一般設定';
$string['importgeneralsettingsalt'] = 'インポートするデータの宛先を選択します。次のステップで、インポートする要素を指定できます。';
$string['importhasconflits'] = 'インポートに競合があります: {$a}';
$string['importincrementidnumber'] = 'ID番号に数値のサフィックスを追加します';
$string['importintothecurrenttenant'] = '現在のテナントにインポートする';
$string['importlogerror'] = '認定証テンプレート \'{$a->name}\' をインポートできませんでした';
$string['importlogexception'] = '例外: {$a}';
$string['importlogfailed'] = 'コース \'{$a->fullname}\' をインポートできませんでした';
$string['importlogfailedcohort'] = 'コーホート \'{$a->name}\' をインポートできませんでした';
$string['importlogfailedcoursecategory'] = 'コースカテゴリ \'{$a->name}\' をインポートできませんでした';
$string['importlogsuccess'] = '新しいコース \'<a href="{$a->url}">{$a->fullname}</a>\' を作成しました';
$string['importlogsuccesscertificates'] = '{$a->pagescount}ページ、{$a->elementscount}要素の新しい認定証テンプレート \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccesscohort'] = '新しいコーホート \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccesscohortallocations'] = 'ユーザー \'{$a->userfullname}\' をコーホート \'{$a->name}\' に割り当てました';
$string['importlogsuccesscoursecategory'] = '新しいコースカテゴリ \'<a href="{$a->url}">{$a->name}</a>\' を作成しました';
$string['importlogsuccessissue'] = '新しい認定証 \'{$a->template}\' をユーザーに作成します: \'{$a->originaluserfullname}\'';
$string['importnotenant'] = 'すべてのテナントが利用可能';
$string['importnotfound'] = 'インポートが見つかりません';
$string['importoptions'] = 'オプション';
$string['importoptionsdesc'] = 'インポートする要素を選択して指定します。';
$string['importproblem'] = '問題: {$a}';
$string['importproblemaffects'] = '影響あり:';
$string['importreview'] = 'レビュー';
$string['importreviewdesc'] = 'ファイルをインポートする前に、すべてが正しいかどうかを確認してください。';
$string['imports'] = 'インポート';
$string['importselectsource'] = 'ソースの選択';
$string['importselectsourcedesc'] = '有効なCSVまたはMoodleWorkplaceファイルをアップロードします。次のステップでは、ファイルからインポートする要素を定義できます。';
$string['importselecttenant'] = 'テナントを選択...';
$string['importsetidnumbertoempty'] = 'ID番号を空に設定します';
$string['importsolution'] = 'ソリューション:';
$string['importstatus'] = 'ステータス';
$string['importunknownerror'] = '不明なエラーです。 {$a}';
$string['importunknownformat'] = '拡張子からファイル形式を検出できません。形式を選択してください';
$string['includecoursecontent'] = 'コースコンテンツを含む';
$string['includecoursecontent_help'] = 'アクティビティ、フィルター、カレンダーイベントなどのすべてのコースコンテンツを含めます。

エクスポートされたファイルには、標準コースのバックアップを作成するときにこのサイトでデフォルトとして設定されているものと同じ設定が含まれます。ユーザーデータは含まれません。';
$string['instances'] = 'インスタンス';
$string['instancescount'] = 'インスタンス ({$a}):';
$string['invaliddevice'] = 'あなたはMoodleアプリを使用してMoodleWorkplaceサイトにアクセスしようとしています。続けるにはMoodleWorkplaceアプリをダウンロードしてください。';
$string['loading'] = '読み込み中...';
$string['log'] = 'ログ';
$string['managecoursecategories'] = 'コースカテゴリの編集';
$string['mappingerrorbadgeheader'] = 'バッジが存在しません';
$string['mappingerrorbadgelog'] = 'バッジ {$a} は見つかりませんでした';
$string['mappingerrorcertificateheader'] = '認定証テンプレートがありません';
$string['mappingerrorcertificatelog'] = '認定証 {$a} が見つかりません';
$string['mappingerrorcohortheader'] = 'コーホートがありません';
$string['mappingerrorcohortlog'] = 'コーホート {$a} は見つかりませんでした';
$string['mappingerrorcompetencyheader'] = 'コンピテンシーがありません';
$string['mappingerrorcompetencylog'] = 'コンピテンシー {$a} が見つかりませんでした';
$string['mappingerrorcoursenotfound'] = 'コース {$a} は見つかりませんでした';
$string['mappingerrorlpheader'] = '学習プランテンプレートが存在しません';
$string['mappingerrorlplog'] = '学習プランテンプレート {$a} が見つかりませんでした';
$string['mappingerroruserfieldheader'] = 'ユーザープロファイルフィールドがありません';
$string['mappingerroruserfieldlog'] = 'ユーザープロファイルフィールド {$a} が見つかりませんでした';
$string['mappingerrorusernotfound'] = '現在のテナントでユーザー {$a} が見つかりませんでした';
$string['mappingnoticecoursecreated'] = '空のコース <a href="{$a->courseurl}">{$a->fullname}</a> が作成されました';
$string['mappingnoticecourseidnumber'] = 'ショートネーム \'{$a->shortname}\' のコースが見つかりませんでした。 ID番号 \'{$a->idnumber}\' の <a href="{$a->courseurl}">別のコース</a> が見つかりましたが、このコースのショートネームは異なります';
$string['mappingnoticeuseremail'] = 'ユーザー \'{$a->username}\' が見つかりませんでした。 メール {$a->email} の <a href="{$a->profileurl}">別のユーザー</a> が見つかりましたが、このユーザーのユーザー名は異なります';
$string['messagefullexportcomplete'] = '{$a->date} にエクスポート完了

ステータス: {$a->status}

詳細を表示するには、 <a href="{$a->url}">ここ</a> をクリックしてください';
$string['messagefullimportcomplete'] = '{$a->date} にインポート完了

ステータス: {$a->status}

詳細を表示するには、 <a href="{$a->url}">ここ</a> をクリックしてください';
$string['messageprovider:exportcomplete'] = 'エクスポート完了';
$string['messageprovider:importcomplete'] = 'インポート完了';
$string['migrationcannotswitchtenant'] = 'idまたはidnumber {$a} のテナントが見つからないか、それに切り替えることができません';
$string['migrationnotenanterror'] = 'オプション tenantとnotenantは併用できません';
$string['migrationreportaudiences'] = 'オーディエンス';
$string['migrationreportdefinition'] = 'レポート定義';
$string['migrationreportdefinition_help'] = 'レポートカラム、条件、フィルタを含む';
$string['migrationreportschedules'] = 'スケジュール';
$string['migrationschoosefrom'] = 'から選択';
$string['noavailableimporter'] = 'このファイルに使用できるインポータが見つかりませんでした。';
$string['noavailableimporters'] = '利用可能なインポータはありません';
$string['nocategoriesavailable'] = '利用可能なカテゴリはありません';
$string['noconflictsfound'] = '競合は見つかりません';
$string['nodetails'] = '詳細が見つかりません';
$string['nonproductionsite'] = '非本産サイト';
$string['nonproductionsitemessage'] = 'これは実運用サイトではありません。';
$string['nopermissioncategoryimport'] = 'このカテゴリにインポートする権限がありません。';
$string['nopermissioncategoryrestore'] = 'このカテゴリでリストアする権限がありません。';
$string['nopermissionform'] = 'あなたはこのフォームにアクセスするパーミッションを持っていません。';
$string['nopermissiontab'] = 'あなたはこのページにアクセスするパーミッションを持っていません。';
$string['nothing'] = 'なし';
$string['nothingtoexport'] = 'エクスポートするものはありません';
$string['nothingtoimport'] = 'インポートするものはありません';
$string['notpossible'] = '不可';
$string['numhour'] = '{$a} 時間';
$string['outcomes'] = 'アウトカム';
$string['performanceinfo'] = 'タブパフォーマンス情報(DB読み取り/書き込み：{$a->reads}/{$a->writes})';
$string['pluginname'] = 'Workplace';
$string['privacy:metadata:certificationid'] = 'このコースの取得元の認定ID';
$string['privacy:metadata:courseid'] = 'リセットされたコース';
$string['privacy:metadata:exportcreatedby'] = 'エクスポートを実行したユーザーのID';
$string['privacy:metadata:exportstatus'] = 'エクスポートのステータス';
$string['privacy:metadata:grade'] = 'ユーザがコースをリセットする前に持っていた評定';
$string['privacy:metadata:importcreatedby'] = 'インポートを実行したユーザーのID';
$string['privacy:metadata:importstatus'] = 'インポートのステータス';
$string['privacy:metadata:programid'] = 'このコースの取得元プログラム ID';
$string['privacy:metadata:reason'] = 'このコースがリセットされた理由';
$string['privacy:metadata:resetinfo'] = 'このコースでリセットされたものに関する情報';
$string['privacy:metadata:resetstatus'] = 'リセットのステータス';
$string['privacy:metadata:tenantid'] = '関連テナントの ID';
$string['privacy:metadata:timecreated'] = '作成時間';
$string['privacy:metadata:timemodified'] = '更新時間';
$string['privacy:metadata:timerequested'] = 'リセットが要求された時間';
$string['privacy:metadata:tool_wp_course_reset'] = 'コースのリセット';
$string['privacy:metadata:tool_wp_export'] = 'サイトで実行されたエクスポートに関する情報';
$string['privacy:metadata:tool_wp_import'] = 'サイトで実行されたインポートに関する情報';
$string['privacy:metadata:userid'] = 'コースをリセットしたユーザ';
$string['privacy:metadata:usermodified'] = '更新されたユーザ';
$string['privacy:metadata:userrequested'] = 'コースのリセットをリクエストしたユーザ';
$string['privacy:metadata:wascompleted'] = 'リセット前にユーザーがコースを完了した場合';
$string['problem'] = '問題点';
$string['proceed'] = '進行する';
$string['processing'] = '処理';
$string['productionsite'] = '本番サイト';
$string['productionstate'] = '本番状態';
$string['productionstatedesc'] = '非本番サイトでは、画面の右下隅に免責事項が表示されます。';
$string['quotedentity'] = '\'{$a}\'';
$string['reason'] = 'リセットの理由';
$string['recovercoursegrades'] = 'この設定を有効にする場合、「コースリセット時に成績履歴を削除する」設定も有効にしてください。';
$string['refresh'] = 'リフレッシュ';
$string['reg_moodleproduct'] = 'Moodle プロダクト ({$a})';
$string['reg_wpactiveusers'] = '先月ログインしたユニークユーザの数 ({$a})';
$string['reg_wpcertificates'] = '認定証の数 ({$a})';
$string['reg_wpcertificatesissues'] = '発行された認定証の数 ({$a})';
$string['reg_wpparticipantnumberaverage'] = '先月のアクティブな参加者の平均人数 ({$a})';
$string['reg_wpplugins'] = 'インストールされ有効化されたプラグインの一覧、インスタンスの数 ({$a})';
$string['reg_wpproductionstate'] = '本番状態 ({$a})';
$string['resetinfo'] = 'インフォメーションのリセット';
$string['resetstatus'] = 'ステータスのリセット';
$string['safenavigation'] = 'このままサイト内を移動しても問題ありません。';
$string['selectallcategoriesinthisfile'] = 'ファイル内のすべてのコースカテゴリを選択';
$string['selectallcohortsinthisfile'] = 'ファイル内のすべてのコーホートを選択';
$string['selectallcoursesinthisfile'] = 'ファイル内のすべてのコースを選択';
$string['selectalltemplates'] = 'すべての認定証テンプレートを選択';
$string['selectalltemplatesinfile'] = 'ファイル内のすべての認定証テンプレートを選択';
$string['selectatleastonecategory'] = '最低でも1つのカテゴリを選択';
$string['selectatleastonecohort'] = '最低でも1つのコーホートを選択';
$string['selectatleastonecourse'] = '最低でも1つのコースを選択';
$string['selectatleastonetemplate'] = '最低でも1つのテンプレートを選択';
$string['selectcoursecategory'] = 'コースカテゴリを選択';
$string['selectcoursesmanually'] = '手動でコースを選択...';
$string['selectedcoursecategory'] = '選択されたコースカテゴリ: {$a}';
$string['selectexporter'] = 'エクスポート対象の選択';
$string['selectimporter'] = 'インポート対象の選択';
$string['selectmanually'] = '手動で選択...';
$string['selectmanuallycategories'] = '手動でカテゴリ・サブカテゴリを選択';
$string['selectmanuallycertificates'] = '手動で認定証テンプレートを選択';
$string['shortnamechanged'] = 'ショートネームが \'{$a->from}\' から \'{$a->to}\' に変更されました';
$string['showless'] = '表示を減らす';
$string['showxmore'] = '{$a} をもっと見る...';
$string['solution'] = '解決策';
$string['stepx'] = 'ステップ {$a}.';
$string['tenant'] = 'テナント';
$string['thissite'] = '（このサイト）';
$string['timerequested'] = '要求された時間';
$string['timereseted'] = 'リセットされた時間';
$string['uploadimportfile'] = 'ファイルのアップロード';
$string['userrequested'] = 'リクエストしたユーザー';
$string['viewexport'] = 'エクスポートを見る';
$string['viewimport'] = 'インポートを見る';
$string['viewlicense'] = 'ライセンスを表示';
$string['wascompleted'] = '完了しました';
$string['willbeimported'] = 'インポートされます';
$string['workplacelicenseheader'] = 'Moodle Workplace ライセンス';
$string['workplacelicensenotagreed'] = 'サイト管理者がMoodle Workplaceライセンスに同意するまで、このコンテンツを表示することはできません。';
$string['wp:manageexportimport'] = 'Workplaceのエクスポート/インポートを管理する';
$string['wp:useexportimport'] = 'Workplaceのエクスポート/インポートを使用する';
