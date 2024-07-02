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
 * Strings for component 'block_openai_chat', language 'ja', version '4.1'.
 *
 * @package     block_openai_chat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['advanced'] = '高度';
$string['advanceddesc'] = 'OpenAIに送られる高度な引数です。 あなたが何をしているか理解できる以外、触らないようにしましょう!';
$string['apikey'] = 'OpenAI APIキー';
$string['apikeydesc'] = 'あなたのOpenAIアカウントのAPIキーです。';
$string['apikeymissing'] = 'あなたのOpenAI APIキーをグローバルブロック設定に追加してください。';
$string['askaquestion'] = '質問する ...';
$string['assistantname'] = 'アシスタント名';
$string['assistantnamedesc'] = 'AIが内部で自分自身に対して使用する名前です。';
$string['blocktitle'] = 'ブロックタイトル';
$string['config_sourceoftruth'] = '信頼できる情報源';
$string['config_sourceoftruth_help'] = 'AIが質問に答える時に参照する情報をここで追加できます。情報は正確に以下のような質問および回答の形式にしてください。

Q: セクション3の提出期限はいつですか?
A: 3月16日( 木)です。
Q: オフィスアワーはいつですか?
A: シャウン教授は火曜日と木曜日の午後2時から4時の間のオフィスに在室予定です。';
$string['defaultassistantname'] = 'アシスタント';
$string['defaultprompt'] = '以下、ユーザがオンライン学習のために利用するMoodleサイトのユーザおよびサポートアシスタント間の会話です:';
$string['defaultusername'] = 'ユーザ';
$string['erroroccurred'] = 'エラーが発生しました! 後でもう一度お試しください。';
$string['frequency'] = '頻度ペナルティ';
$string['frequencydesc'] = 'これまでのテキストに存在するトークンの頻度に基づいて、新しいトークンにどの程度のペナルティを与えるか決定します。モデルが同じ行を逐語的に繰り返す可能性を減少させます。';
$string['maxlength'] = '最大長';
$string['maxlengthdesc'] = '生成するトークンの最大数です。最大2,048個または4,000個のトークンをプロンプトおよびコンプリート間で共有できます。正確な上限はモデルによって異なります (通常の英文の場合、1トークンはおよそ4文字です)。';
$string['model'] = 'モデル';
$string['modeldesc'] = '補完を生成するモデルです。自然言語タスクに適したモデルであったり、コードに特化したモデルであったりします。';
$string['openai_chat'] = 'OpenAIチャット';
$string['openai_chat:addinstance'] = '新しいOpenAIチャットブロックを追加する';
$string['openai_chat:myaddinstance'] = 'マイMoodleページに新しいOpenAIチャットブロックを追加する';
$string['pluginname'] = 'OpenAIチャットブロック';
$string['presence'] = '存在ペナルティ';
$string['presencedesc'] = 'これまでのテキストにトークンが登場するかどうかに基づいて、新しいトークンにどの程度のペナルティを与えるか決定します。モデルが新しいトピックについて話す可能性を高めます。';
$string['prompt'] = '完了プロンプト';
$string['promptdesc'] = '会話記録の前にAIに与えるプロンプトです。';
$string['restrictusage'] = 'チャット利用をログインユーザに制限する';
$string['restrictusagedesc'] = 'この設定を有効にした場合、ログインユーザのみがチャットボックスを利用できるようになります。';
$string['showlabels'] = 'ラベルを表示する';
$string['sourceoftruth'] = '信頼できる情報源';
$string['sourceoftruthdesc'] = 'AIはすぐに能力を発揮しますが、仮に質問の答えを知らない場合、回答を拒否せずに自信を持って間違った情報を提供する可能性があります。このテキストボックスには一般的な質問およびその回答を追加してAIが引き出せるようにできます。質問および回答は次のような形式で入力してください:
<pre>Q: 質問1<br />A: 回答1<br /><br />Q: 質問2<br />A: 回答2</pre>';
$string['sourceoftruthpreamble'] = '以下、質問およびその回答の一覧です。お問い合わせの際の参考資料としてお使いください:';
$string['sourceoftruthreinforcement'] = 'アシスタントは上の参考文献情報の利用を試みて回答するよう訓練されています。上の質問のうちの1つのテキストに遭遇した場合、その質問が意味をなさないように見える場合でも、提供された答えを与える必要があります。しかし、参考文献がその質問またはトピックをカバーしていない場合、アシスタントは単に外部の知識を使用して回答することになります。';
$string['temperature'] = '温度';
$string['temperaturedesc'] = 'ランダム性を制御する: 低くした場合、ランダムな完成度が低くなります。温度がゼロに近づいた場合、モデルは決定論的および反復的なものになります。';
$string['topp'] = 'Top P';
$string['toppdesc'] = '核サンプリングによる多様性を制御する: 0.5では尤度重み付けされた選択肢の半分が考慮されます。';
$string['username'] = 'ユーザ名';
$string['usernamedesc'] = 'AIが内部でユーザに対して使用する名前です。';
