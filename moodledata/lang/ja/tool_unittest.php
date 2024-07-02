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
 * Strings for component 'tool_unittest', language 'ja', version '4.1'.
 *
 * @package     tool_unittest
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addconfigprefix'] = 'configファイルに接頭辞を追加する';
$string['all'] = 'すべて';
$string['codecoverageanalysis'] = 'Code Coverage分析を実行する';
$string['codecoveragecompletereport'] = '(Code Coverage完全レポートを閲覧する)';
$string['codecoveragedisabled'] = 'このサーバでは、code coverageを有効にできません (xdebug拡張モジュールがありません)。';
$string['codecoveragelatestdetails'] = '(日時: {$a->date}  ファイル: {$a->files}  カバー: {$a->percentage})';
$string['codecoveragelatestreport'] = '最新のCode Coverage完全レポートを閲覧する';
$string['confignonwritable'] = 'ウェブサーバからconfig.phpを書き込めません。パーミッションを変更するか、適切なユーザアカウントで編集した後、PHPタグを閉じる前に次の行を追加してください: <br />
$CFG->unittestprefix = \'tst_\' // 必要に応じて、tst_を$CFG->prefixと異なる接頭辞に変更してください。';
$string['coveredlines'] = 'カバーされた行';
$string['coveredpercentage'] = '全体のCode Coverage';
$string['dbtest'] = 'DB機能テスト';
$string['deletingnoninsertedrecord'] = 'ユニットテストで挿入されていないレコードを削除しようとしています (テーブル: {$a->table} - id: {$a->id})。';
$string['deletingnoninsertedrecords'] = 'ユニットテストで挿入されていないレコードを削除しようとしています (テーブル: {$a->table})。';
$string['droptesttables'] = 'テストテーブルをドロップする';
$string['exception'] = '例外';
$string['executablelines'] = '実行可能行';
$string['fail'] = '不合格';
$string['ignorefile'] = 'このファイルのテストを無視する';
$string['ignorethisfile'] = 'このテストファイルを無視してテストを再実行する';
$string['installtesttables'] = 'テストテーブルをインストールする';
$string['moodleunittests'] = 'Moodleユニットテスト: {$a}';
$string['notice'] = '警告';
$string['onlytest'] = '次のパスでのみテストを実行する:';
$string['othertestpages'] = '他のテストページ';
$string['pass'] = '合格';
$string['pathdoesnotexist'] = 'パス「 {$a} 」がありません。';
$string['pluginname'] = '単体テスト';
$string['prefix'] = 'ユニットテストテーブル接頭辞';
$string['prefixnotset'] = 'ユニットテストテーブル接頭辞が設定されていません。config.phpにユニットテストテーブル接頭辞を追加するには、接頭辞を入力後、このフォームを送信してください。';
$string['reinstalltesttables'] = 'テストテーブルを再インストールする';
$string['retest'] = 'テストの再実行';
$string['retestonlythisfile'] = 'このテスト対象ファイルのテストのみ実行';
$string['runall'] = 'すべてのテスト対象ファイルのテストを実行';
$string['runat'] = '{$a} に実行';
$string['runonlyfile'] = 'このファイル内のみテストを実行する';
$string['runonlyfolder'] = 'このフォルダ内のみテストを実行する';
$string['runtests'] = 'テストを実行する';
$string['rununittests'] = 'ユニットテストを実行する';
$string['showpasses'] = '不合格と同様に合格も表示する。';
$string['showsearch'] = 'テストファイルの検索結果を表示する。';
$string['skip'] = 'スキップ';
$string['stacktrace'] = 'スタックトレース:';
$string['summary'] = '{$a->run}/{$a->total} 件のテストケースが完了しました:パス <strong>{$a->passes}</strong> 件 / 不合格 <strong>{$a->fails}</strong> 件 / 例外 <strong>{$a->exceptions}</strong> 件';
$string['tablesnotsetup'] = 'ユニットテストテーブルはまだ構築されていません。ユニットテストテーブルを構築してもよろしいですか?';
$string['testdboperations'] = 'テストデータベース操作';
$string['testtablescsvfileunwritable'] = 'テストテーブルのCSVファイル ({$a->filename}) に書込み権がありません。';
$string['testtablesneedupgrade'] = 'テストDBテーブルをアップグレードする必要があります。アップグレードを継続してもよろしいですか?';
$string['testtablesok'] = 'テストDBテーブルが正常にインストールされました。';
$string['thorough'] = '総合テストの実行を実行する (時間がかかります)。';
$string['timetakes'] = '所要時間: {$a}.';
$string['totallines'] = '行数合計';
$string['uncaughtexception'] = '[{$a->getFile()}:{$a->getLine()}] に不明な例外 [{$a->getMessage()}] が発生したため、テストは中止されました。';
$string['uncoveredlines'] = 'カバーされない行';
$string['unittest:execute'] = 'ユニットテストを実行する';
$string['unittestprefixsetting'] = 'ユニットテスト接頭辞: <strong>{$a->unittestprefix}</strong> (修正するには、config.phpを編集してください)';
$string['unittests'] = 'ユニットテスト';
$string['updatingnoninsertedrecord'] = 'ユニットテストで挿入されていないレコードを更新しようとしています (テーブル: {$a->table} - id: {$a->id})。';
$string['version'] = '使用<a href="http://sourceforge.net/projects/simpletest/">SimpleTest</a>バージョン {$a}';
