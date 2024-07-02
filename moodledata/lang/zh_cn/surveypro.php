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
 * Strings for component 'surveypro', language 'zh_cn', version '4.1'.
 *
 * @package     surveypro
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abandoned_submission_deleted'] = '删除已放弃回答的问卷';
$string['action'] = '已存在的问题';
$string['action_help'] = '使用以下操作对调查中已存在的问题进行操作。';
$string['addnewsubmission'] = '新回答问卷';
$string['anonymous'] = '匿名回答问卷';
$string['anonymous_help'] = '这个问卷回答管理表不会显示问卷和报告的回答者信息，导出结果也是匿名的。';
$string['answerisnoanswer'] = '回答被拒';
$string['answernotsubmitted'] = '回答没有提交';
$string['apply'] = '套用';
$string['applymastertemplates'] = '<a href="{$a}">套用主模板</a>';
$string['applyusertemplatedenied01'] = '因为目前问卷已经有回答者，所以不能再套用用户问卷模板了。';
$string['applyusertemplatedenied02'] = '不能把用户问卷模样套用在主模板上。';
$string['applyusertemplates'] = '<a href="{$a}">套用主模板</a>';
$string['arrayexpected'] = '{$a}中应该有数组';
$string['attemptinfo'] = '问卷和回答信息';
$string['availability'] = '可用';
$string['availability_fs'] = '可用';
$string['available_title'] = '单击以保留可用的问题';
$string['badchildparentvalue'] = '邮件格式条件： "{$a}"。<br>可能不能够被正确校验。';
$string['badtablenamefound'] = '处理XML文件出错。"{$a}" 被发现是表名，并且很可能是无效的。';
$string['basic_editthanks'] = '谢谢。您的答卷已成功修改！';
$string['basic_submitthanks'] = '谢谢。您的答卷已成功提交！';
$string['branching'] = '分支';
$string['bulkaction'] = '批量操作';
$string['bulkaction_help'] = '使用此菜单可对标签中描述的问题执行操作。';
$string['calendar_close_description'] = '问卷"{$a}" 已关闭。';
$string['calendar_close_time'] = '问卷"{$a}" 已不可用。';
$string['calendar_open_description'] = '请填写问卷"{$a}" 。';
$string['calendar_open_time'] = '问卷"{$a}" 可用。';
$string['canneversubmit'] = '您不能提交回答';
$string['cannotsubmittooearly'] = '问卷目前没有开放，请等到{$a}';
$string['cannotsubmittoolate'] = '问卷已经在{$a}关闭';
$string['captcha'] = '添加验证码';
$string['captcha_help'] = '将验证码添加到此集合中以增加安全性。';
$string['category'] = '课程目录';
$string['changeorder_title'] = '重新安排';
$string['closed'] = '这个问卷关闭于';
$string['closedsubmissions'] = '已完成的回答';
$string['common_fs'] = '通用设置';
$string['completiondetail:entries'] = '创建条目：{$a}';
$string['completionsubmit'] = '这是“帮助”的标题。它出现在哪里？';
$string['completionsubmit_check'] = '学生必须至少提交调查';
$string['completionsubmit_group'] = '需要提交';
$string['completionsubmit_group_help'] = '当学生提交调查时，该调查至少与此处的写作次数一样多，即视为已完成。';
$string['completionsubmitdesc'] = '最低提交数量：{$a}';
$string['confirm_delete1item'] = '是否确实要删除“{$a->pluginname}”问题：{$a->content}';
$string['confirm_delete1utemplate'] = '是否确实要删除用户模板“{$a}”';
$string['confirm_deleteallitems'] = '是否确认要删除每个问题？';
$string['confirm_deleteallresponses'] = '您确定要删除每个已保存的回答吗？';
$string['confirm_deletechainitems'] = '当前问题的子问题也将被删除。子问题的位置为：{$a}。';
$string['confirm_deletehiddenitems'] = '您是否确认要删除每个隐藏问题？';
$string['confirm_deletemyresponse_modified'] = '是否确实要删除在 {$a->timecreated} 上创建并在 {$a->timemodified} 上修改的回答？';
$string['confirm_deletemyresponse_original'] = '是否确实要删除在 {$a->timecreated} 上创建且从未修改的响应？';
$string['confirm_deleteotherresponse_modified'] = '是否确实要删除 {$a->fullname} 在 {$a->timecreated} 上创建并在 {$a->timemodified} 上修改的回答？';
$string['confirm_deleteotherresponse_original'] = '是否确实要删除 {$a->fullname} 在 {$a->timecreated} 上创建并从未修改过的回答？';
$string['confirm_deletevisibleitems'] = '您确定要删除每个可见问题吗？';
$string['confirm_dropmultilang'] = '当前问卷支持从主模板的多语言导入。<br>这意味着问卷会根据用户首选语言（如果可用）显示问题和标签。<br>通过编辑此类问卷，您将失去多语言支持，在整个问卷过程中都会使用标准无语言差别标签。<br>请注意，一旦您放弃了多语言支持，即使再次生成了主模板， 问卷仍然不会有多语言支持能力，多语言支持一旦失去就不可以还原。<br>您确定要编辑此多语言问卷吗？';
$string['confirm_duplicatemyresponse_modified'] = '是否确实要复制在 {$a->timecreated} 上创建并在 {$a->timemodified} 上修改的回答？';
$string['confirm_duplicatemyresponse_original'] = '是否确实要复制在 {$a->timecreated} 上创建的且从未修改的回答？';
$string['confirm_duplicateotherresponse_modified'] = '是否确实要复制 {$a->fullname} 拥有的在 {$a->timecreated} 上创建并在 {$a->timemodified} 上修改的回答？';
$string['confirm_duplicateotherresponse_original'] = '是否确实要复制 {$a->fullname} 拥有的在 {$a->timecreated} 上创建并且未修改过的回答？';
$string['confirm_free1item'] = '使问题 “{$a->itemcontent}”可用将会使其上一级问题同步启用。<br>上一级问题的位置是：{$a->ancestors}。<br>是否确认此操作？';
$string['confirm_freechainitems'] = '使问题“{$a->itemcontent}”可用将会使其所有依赖项可用。<br>依赖项的位置为：{$a->dependencies}。<br>确认此操作吗？';
$string['confirm_freechainitems_newparent'] = '使问题“{$a->itemcontent}”可用，问题“{$a->parentcontent}”的所有依赖项也将可用。<br>因此，除了所选问题之外，以下位置的问题：{$a->dependencies}亦可用。<br>您是否确认此操作？';
$string['confirm_hide1item'] = '隐藏问题“{$a->itemcontent}”，其依赖项也将被隐藏。<br>依赖项的位置为：{$a->dependencies}。<br>你确认此操作吗？';
$string['confirm_hideallitems'] = '你确认你想隐藏每个问题吗？';
$string['confirm_hidechainitems'] = '隐藏问题“{$a->itemcontent}”，其所有依赖项也将被隐藏。<br>依赖项的位置为：{$a->dependencies}。<br>你确认此操作吗？';
$string['confirm_reserve1item'] = '保留问题“{$a->itemcontent}”，您也将保留其依赖项。<br>依赖项的位置为：{$a->dependencies}。<br>是否确认此操作？';
$string['confirm_reservechainitems'] = '保留问题“{$a->itemcontent}”，您也将保留其所有依赖项。<br>依赖项的位置的是： {$a->dependencies}。<br>你确认此操作吗？';
$string['confirm_reservechainitems_newparent'] = '保留问题“{$a->itemcontent}”，问题“{$a->parentcontent}”的所有依赖项也将被保留。<br>因此，除了所选元素之外，您还将保留以下位置的问题：{$a->dependencies}。<br>您确认此操作吗？';
$string['confirm_show1item'] = '显示问题 {$a->lastitem}同步也会显示其上一级问题。<br>上一级问题的位置为：{$a->ancestors}。<br>您确认此操作吗？';
$string['confirm_showallitems'] = '您是否确认要显示每个问题？';
$string['confirm_showchainitems'] = '显示问题 {$a->lastitem}也会同步显示其所有上一级问题。<br>上一级问题的位置为：{$a->ancestors}。<br>您是否确认此操作？';
$string['content'] = '内容';
$string['content_editor'] = '内容';
$string['content_editor_err'] = '内容为必填项';
$string['content_editor_help'] = '将向远程用户显示的问题的内容。';
$string['content_err'] = '内容为必填项';
$string['content_help'] = '将向远程用户显示的问题的内容。';
$string['count_allitems'] = '基于 {$a} 问题的问卷。';
$string['count_hiddenitems'] = '（{$a} 隐藏）';
$string['count_pages'] = '分为 {$a} 页。';
$string['course'] = '课程';
$string['currentcategory'] = '这个课程目录';
$string['currentcourse'] = '这个课程';
$string['currenttotemplate'] = '将当前问卷另存为 zip 格式的主模板。<br>要安装主模板，请将其解压缩到 mod/surveypro/template/ 并访问通知页面。';
$string['customnumber'] = '问题编号';
$string['customnumber_header'] = '#';
$string['customnumber_help'] = '使用此字段为元素提供自定义编号。它可能是像 1 这样的自然数，也可能是您可能需要的任何自然数：1a、A、1.1.a、#1、A、A.1......请记住，您应对这些数字的连贯性负责。因此，如果您打算更改问题的顺序，请小心使用。';
$string['dataimport'] = '导入数据';
$string['deleteabandoned_task'] = '删除未完成的提交';
$string['deleteallitems'] = '删除所有问题';
$string['deleteallsubmissions'] = '删除所有的回答';
$string['deletehiddenitems'] = '删除隐藏问题';
$string['deletepluginmessage'] = '您将要完全删除调查插件“{$a}”。这将完全删除与此插件关联的数据库中的所有内容。您确定要继续吗？';
$string['deletevisibleitems'] = '删除可见问题';
$string['deletingplugin'] = '正在删除插件 {$a}。';
$string['downloadformat'] = '下载格式';
$string['downloadpdf'] = '下载为PDF';
$string['downloadtocsv'] = '用逗号分开';
$string['downloadtotsv'] = '用TAB分开';
$string['downloadtoxls'] = 'excel';
$string['downloadtozipbysubmission'] = '按项目以ZIP格式下载附件';
$string['downloadtozipbyuser'] = '按用户以ZIP格式下载附件';
$string['downloadtype'] = '下载文件类型';
$string['duplicateemail'] = '邮件地址必须都不相同';
$string['editcopy'] = '编辑副本';
$string['editingcopy'] = '您正在编辑原始回答的副本，以保留您的工作历史记录。';
$string['emptyanswer'] = '回答为空';
$string['emptydownload'] = '没有可导出的回答';
$string['enteruniquename'] = '请选择一个唯一的名称或勾选选项“{$a->overwrite}”，因为“{$a->filename}”已存在于所选上下文中';
$string['event_all_submissions_exported'] = '所有提交的内容均已导出';
$string['event_all_submissions_viewed'] = '所有提交的内容均已查看';
$string['event_all_usertemplates_viewed'] = '已查看所有用户模板';
$string['event_form_previewed'] = '调查布局已预览';
$string['event_item_created'] = '已创建项目';
$string['event_item_deleted'] = '项目已删除';
$string['event_item_hidden'] = '项目已隐藏';
$string['event_item_modified'] = '项目已修改';
$string['event_item_shown'] = '已显示项目';
$string['event_mailneverstarted_sent'] = '为从未开始的调查发送了电子邮件';
$string['event_mailoneshotmp_sent'] = '为放弃的一次性多页调查发送了电子邮件';
$string['event_mailpauseresume_sent'] = '为放弃的暂停调查发送了电子邮件';
$string['event_mastertemplate_applied'] = '已套用主模板';
$string['event_mastertemplate_saved'] = '主模板已保存';
$string['event_submission_created'] = '已创建答卷';
$string['event_submission_deleted'] = '已删除答卷';
$string['event_submission_modified'] = '答卷已修改';
$string['event_submission_viewed'] = '答卷已查看';
$string['event_submissions_imported'] = '答卷已导入';
$string['event_submissiontopdf_downloaded'] = '答卷已下载为PDF';
$string['event_usertemplate_applied'] = '已套用用户模板';
$string['event_usertemplate_deleted'] = '已删除用户模板';
$string['event_usertemplate_exported'] = '已导出用户模板';
$string['event_usertemplate_imported'] = '已导入用户模板';
$string['event_usertemplate_saved'] = '已保存用户模板';
$string['exporttemplate'] = '导出模板';
$string['extranote'] = '附注';
$string['extranote_help'] = '在这里写一个描述/注释，说明用户应该知道的关于这个问题的额外信息。';
$string['extranoteinsearch'] = '搜索表单中的额外注释';
$string['extranoteinsearch_descr'] = '搜索表单中是否需要用户注释？';
$string['feedback_delete1item'] = '“{$a->pluginname}”插件：{$a->content} 已成功删除';
$string['feedback_delete1response'] = '用户答卷已成功删除';
$string['feedback_delete1utemplate'] = '用户模板“{$a}”已成功删除';
$string['feedback_deleteallitems'] = '所有问题均已成功删除';
$string['feedback_deleteallresponses'] = '本次问卷调查的所有答卷均已成功删除';
$string['feedback_deletechainitems'] = '已成功删除“{$a->pluginname}”插件：{$a->content} 和其下元素';
$string['feedback_deletehiddenitems'] = '所有隐藏问题均已成功删除';
$string['feedback_deletevisibleitems'] = '所有显示问题均已成功删除';
$string['feedback_dropmultilang'] = '已删除已加载主模板的多语言支持。现在问题是可编辑的。';
$string['feedback_duplicateresponse'] = '用户答卷已成功复制';
$string['feedback_hideallitems'] = '所有问题都被成功隐藏';
$string['feedback_itemadd_ko'] = '尚未添加新问题';
$string['feedback_itemadd_ok'] = '问题已成功添加';
$string['feedback_itemediting_freechainitems'] = '使此问题可用，会同步启用其父问题。';
$string['feedback_itemediting_hidechainitems'] = '隐藏此问题后，也会隐藏其子问题。';
$string['feedback_itemediting_ko'] = '保存问题时出错';
$string['feedback_itemediting_ok'] = '问题已成功修改';
$string['feedback_itemediting_reservechainitems'] = '保留这个问题，其子问题亦会保留。';
$string['feedback_itemediting_showchainitems'] = '显示这个问题，其父问题亦会显示。';
$string['feedback_showallitems'] = '所有的问题均已成功显示';
$string['field'] = '字段要素';
$string['fieldplugin'] = '要素插件';
$string['fillinginstructioninsearch'] = '在搜索表单中填写说明';
$string['fillinginstructioninsearch_descr'] = '搜索表单中是否需要填写说明？v';
$string['forcedoptionalitem_title'] = '由于默认值，强制使用可选问题。';
$string['format'] = '格式化问题';
$string['formatplugin'] = '格式插件';
$string['free'] = '自由';
$string['fullwidth'] = '左上（完整宽度）';
$string['gotolist'] = '继续进入到答卷列表';
$string['hassubmissions_alert'] = '此问卷已至少回答过一次。<br>请极其谨慎地进行，只进行中立的更改，以免影响整个问卷调查的有效性。<br><br>请注意：添加新项目时，每个已提交的回复的状态将强制为“进行中”。';
$string['hassubmissions_alert_activitycompletion'] = '<br>随着项目修改，活动完成状态也会发生变化。<br>您已被提醒。';
$string['hassubmissions_danger'] = '<br>“进行中”答卷...<ul><li>如果不允许暂停/恢复，则会在 4 小时内删除;如果允许暂停/恢复，则</li><li>可能会在 SurveyPro 设置页面中设置的小时数中删除。</li></ul>';
$string['hidden'] = '隐藏';
$string['hidden_help'] = '使用此选项可隐藏问题。任何人都无法使用隐藏问题。您可以将这些问题视为问卷调查的一部分。';
$string['hideallitems'] = '隐藏全部问题';
$string['hidefield_title'] = '可见问题。点击可以隐藏。';
$string['hideinstructions'] = '隐藏填写说明';
$string['hideinstructions_help'] = '使用此复选框可显示/隐藏此问题的填写说明。';
$string['hideitems'] = '隐藏';
$string['hideshow'] = '隐藏/显示';
$string['history'] = '保留历史记录';
$string['history_help'] = '保留历史记录后，用户将不再能够直接修改已关闭的答卷。对已关闭答卷的修改将另存为新副本，保留原始副本并保留历史记录。';
$string['ierr_invalidinput'] = '输入值不正确';
$string['ierr_missingparentcontent'] = '你需要指定一个父问题的答案，否则就需要清空"{$a}" 字段';
$string['ierr_missingparentid'] = '您需要选择一个分支问题。否则，请清除“{$a}”字段';
$string['ierr_notalloweddefault'] = '“{$a}”不是默认“必需回答”的问题的允许值';
$string['ignoreitems'] = '忽略';
$string['import_attachmentsnotallowed'] = '您似乎正在尝试导入以下问题的附件：{$a}<br>目前不允许这样做。';
$string['import_breakingmaxentries'] = '导入 的{$a->totalentries}的回答将会分配给ID为{$a->userid}的用户。这超出了允许的最大数量，因为它已设置为 {$a->maxentries}。';
$string['import_columnscountchanges'] = '文件中的列数更改';
$string['import_duplicateheader'] = '标题“{$a}”至少被出现了两次';
$string['import_emptyrequiredvalue'] = '不允许列 {$a->col} 中字符串为空。问题“{$a->plugin}” 的答案：<br>{$a->content}是必需的。<br>有问题的行是：<br>“{$a->row}”';
$string['import_extraheaderfound'] = '在此问卷的变量中找不到所选文件中的某些字段，<br>它们是：{$a}';
$string['import_invalidtimecreated'] = '生成日期 “{$a}”无效';
$string['import_invalidtimemodified'] = '修改日期： “{$a}”无效';
$string['import_invaliduserid'] = '用户ID “{$a}” 无效';
$string['import_missingheaders'] = '{$a->childheader}（期望：{$a->missingparentheader}）';
$string['import_missingtimecreated'] = '空创建时间无效';
$string['import_missinguserid'] = '空用户 ID 无效';
$string['import_noanswertorequired'] = '在 {$a->col} 列中找到值“{$a->value}”无效。问题“{$a->plugin}” 的答案：<br>{$a->content}是必需的。<br>有问题的行是：<br>“{$a->row}”';
$string['import_nullnotallowed'] = '在 {$a->col} 列中找到值“{$a->value}”无效。问题“{$a->plugin}” 的答案：<br>{$a->content}不能为空，因为该问题在此回答中未被其父问题禁止。<br>有问题的行是：<br>“{$a->row}”';
$string['import_nullwithoutparent'] = '在 {$a->col} 列中找到值“{$a->value}”无效。问题“{$a->plugin}” 的答案：<br>{$a->content}不能为空，因为该问题不受父子关系的约束。<br>有问题的行是：<br>“{$a->row}”';
$string['import_orphanchild'] = '似乎以下子元素是孤立的：{$a}<br>不会导入响应。';
$string['import_positionnotinteger'] = '在 {$a->csvcol} 列中找到的问题“{$a->plugin}”：<br>{$a->content} 的位置“{$a->position}”不是整数。{$a->prettywarning}';
$string['import_positionoutofbound'] = '在 {$a->csvcol} 列中找到的问题“{$a->plugin}”：<br>{$a->content} 的位置“{$a->position}”超出界限。边界为：“{$a->bounds}”。{$a->prettywarning}';
$string['import_prettywarning'] = '<br><br>您确定导入的是原始数据而不是风格化修饰的文件吗？';
$string['import_rawwarning'] = '（警告：具有所有者名称的文件无法重新导入）';
$string['importfile'] = '选择要导入的文件';
$string['importusertemplates'] = '<a href=“{$a}”>导入用户模板</a>';
$string['includedates'] = '包括创建和修改日期';
$string['includehidden'] = '包含隐藏问题';
$string['includenames'] = '包括所有者姓名';
$string['includereserved'] = '包括保留问题';
$string['incorrectaccessdetected'] = '检测到不正确访问';
$string['indent'] = '缩进';
$string['indent_help'] = '依据左边界绘制问题别名的缩进位置';
$string['inprogresssubmissions'] = '正在进行中的回答';
$string['inputclean'] = '保存时将会删除输入内容的尾随空格';
$string['insearchform'] = '搜索表单';
$string['insearchform_help'] = '这个问题会在搜索表单中使用吗？';
$string['insearchform_title'] = '可搜索项目。单击以使其不可搜索。';
$string['invalidtypeorplugin'] = '在模板中作为项目属性提供的类型或插件无效';
$string['invitedefault'] = '邀请';
$string['item'] = '问题';
$string['itemlist'] = '问题清单';
$string['keepinprogress'] = '保留“进行中”的答卷';
$string['keepinprogress_help'] = '尽管有模块策略，但不要删除“进行中”的答卷。应该删除“进行中”的答卷，以始终保证最终问卷库的良好可信度。如果出于某些原因，您还需要收集“进行中”的答卷，请选中此框。';
$string['layout'] = '布局';
$string['layout_branchingvalidation'] = '分支验证';
$string['layout_edititem'] = '编辑问题';
$string['layout_items'] = '问题集';
$string['layout_itemsetup'] = '问题设置';
$string['layout_preview'] = '预览';
$string['left'] = '左';
$string['mailcontentdefault'] = '用户 {FULLNAME} 添加了对“{SURVEYPRONAME}”的答卷';
$string['mailcontenteditor'] = '通知消息';
$string['mailcontenteditor_help'] = '将在用户答卷提交时发送的自定义消息的内容。如果在答卷提交时请求通知邮件，但是并未提供此邮件，则使用默认电子邮件内容。<br><br>使用：<ul><li>{FIRSTNAME}</li><li>{LASTNAME}</li><li>{FULLNAME}</li><li>{COURSENAME}</li><li>{SURVEYPRONAME}</li><li>{SURVEYPROURL}</li></ul>要获取<ul><li>用户名字</li><li>用户姓氏</li><li>用户全名</li><li>课程名称</li><li>此调查的名称pro</li><li>此问卷调查的网址</li></ul>注意： 默认消息是多语言的，您的自定义消息将在您编写时使用，并且永远不会翻译。';
$string['mailextraaddresses'] = '更多地址';
$string['mailextraaddresses_help'] = '一些额外的电子邮件地址，用于通知新的回复。地址应该是每行一个。';
$string['mailroles'] = '要通知的角色';
$string['mailroles_help'] = '在每次有答卷时向所选角色组的每个成员件发送电子邮件。角色是在课程级别上设计的，因此任何分组都会被忽略。该电子邮件只会告知用户有答卷提交，不会告知其内容，也不会提供发件人详细信息。';
$string['managesurveyprofieldplugins'] = '管理字段插件';
$string['managesurveyproformatplugins'] = '管理格式插件';
$string['managesurveyproreportplugins'] = '管理报告插件';
$string['managesurveyprotemplateplugins'] = '管理模板插件';
$string['manageusertemplates'] = '<a href=“{$a}”>管理用户模板</a>';
$string['mastertemplate'] = '主模板';
$string['mastertemplate_help'] = '选择主模板，例如默认提供的经典模板之一，或添加到此 surveypro 实例的自定义模板。经典的调查类型有：<ul><li>ATTLS： Attitudes To Thinking and Learning Survey.<br>有关更多详细信息，请参阅<a href=“https://docs.moodle.org/31/en/Survey_settings#ATTLS_-_Attitudes_to_Thinking_and_Learning_Survey” name=“ATTLS” title=“ATTLS”>ATTLS</a>.</li><li>COLLES： Constructivist On-Online Learning Environment Survey.<br>更多详细信息， 请参阅 <a href=“https://docs.moodle.org/31/en/Survey_settings#COLLES_-_Constructivist_On-Line_Learning_Environment_Survey” name=“COLLES” title=“COLLES”>COLLES</a>.</li><li>CRITICAL INCIDENTS.<br> 上的文档，有关详细信息，请参阅 <a href=“https://docs.moodle.org/31/en/Survey_settings#Critical_incidents” name=“Critical incidents” title=“Critical incidents”>Critical incidents</a></li></ul> 上的文档';
$string['mastertemplateaddendum'] = '<br>在卸载它、修复所有问题并重新安装之前，您无法应用此主模板。';
$string['mastertemplatename'] = '主模板名称';
$string['mastertemplatename_help'] = '选择要以 zip 格式下载的主模板名称的名称。';
$string['mastertemplateplugin'] = '主模板插件';
$string['maxentries'] = '允许的最大尝试次数';
$string['maxentries_help'] = '允许学生为此活动提交的最大答卷数。';
$string['maxinputdelay'] = '最大输入延迟v';
$string['maxinputdelay_descr'] = '允许用户提交调查的最大延迟时间（以小时为单位）。即使允许用户暂停数据输入并在以后重新启动它，在此定义的时间之后，部分响应也将被删除。默认值为 168 小时相当于一周。如果您确实想允许部分响应（不推荐），请将其设置为 0（零）。';
$string['missingfile'] = '似乎没有选择任何文件';
$string['missingitemplugin'] = '模板的一个或多个项目缺少插件';
$string['missingitemtype'] = '模板的一个或多个项目缺少类型';
$string['missingitemversion'] = '模板的一个或多个项目版本错误';
$string['missingmandatory'] = '尚未找到此答卷的一些强制性答案。因此，整体响应已标记为“{$a}”。<br>要解决此问题，请编辑每页的响应和查看项目内容页面。';
$string['missingvalidation'] = '此答卷的答案已被发现为未经验证。因此，总体响应已标记为“{$a}”。<br>您的数据不一定不正确，但在最终存储之前需要验证。<br>要解决此问题，请编辑每个页面的响应和查看项目内容页面。';
$string['module'] = '此问卷调查的实例';
$string['modulename_help'] = 'Surveypro 允许创建自定义问卷内容，如同内置调查，如 ATTLS、COLLES 和 CRITICAL INCIDENTS一样。您还可以保存和重复使用自己的自定义调查的部分或全部。';
$string['modulenameplural'] = '问卷调查';
$string['modulesettinghdr'] = 'Surveypro 设置';
$string['mtemplate'] = '主模板';
$string['mtemplate_apply'] = '套用';
$string['mtemplate_save'] = '保存';
$string['mtemplatessection'] = '主模板部分';
$string['neverstartedemail'] = '未开始调查的电子邮件';
$string['neverstartedemail_help'] = '向未开始首次提交的用户发送提醒电子邮件';
$string['newpageforchild'] = '分支增加页数';
$string['newpageforchild_help'] = '使用此选项可在每个分支问题之后强制创建一个新页面。';
$string['newsubmissionbody'] = '{$a->username} 在“{$a->surveyproname}”中提交了新的答卷。您可以查看<a title=“{$a->title}” href=“{$a->href}”>它</a>';
$string['newsubmissionsubject'] = '新答卷';
$string['nextformpage'] = '下一页 >>';
$string['noanswer'] = '无回答';
$string['noattachmentfound'] = '没有发现附件';
$string['noitemsfound'] = '这项调查仍在进行中。<br>请稍后再试。';
$string['noitemsfoundadmin'] = '这个问卷没有任何内容。请从“{$a}”添加它们。';
$string['nomoreitems'] = '根据提供的答案，没有更多问题可以显示。<br>您的调查已结束。您只需要提交{$a}。';
$string['nomoresubmissionsallowed'] = '已达到答卷的最大数量{$a}。<br>不允许有新的答卷';
$string['nomtemplates'] = '缺少主模板';
$string['nomtemplates_help'] = '课程创建者可能否认了每个主模板的实例化。有关详细信息，请联系您的课程创建者。';
$string['nomtemplates_message'] = '不好意思。在此 moodle 站点实例中似乎没有任何主模板可用。';
$string['noreportsfound'] = '此 surveypro 中没有报告。';
$string['nosubmissionsforenrolled'] = '在这项问卷调查中没有发现已注册学生的答卷。';
$string['note'] = '注解：';
$string['nothingtodownload'] = '没有可供下载的内容';
$string['notinsearchform_title'] = '不可搜索的项目。单击以使其可搜索。';
$string['numinstances'] = '实例';
$string['oneshotemail'] = '有提醒电子邮件的一次性调查填写';
$string['oneshotnoemail'] = '无电子邮体提醒的一次性填写调查';
$string['onlyfinalizationallowed'] = '但只有那些仍然“{$a->inprogress}”通过页面“{$a->SurveyProResponses}”最终确定。';
$string['onlyreserveditemhere'] = '当前页面仅包含不能访问的保留问题';
$string['onlyreview'] = '或复查';
$string['opened'] = '开放时间';
$string['optionalitem_title'] = '可选问题。单击可使该问题成为必填项。';
$string['outputstyle'] = '输出样式';
$string['overwrite'] = '替换旧模板';
$string['overwrite_help'] = '选中此复选框后，将覆盖具有相同名称的旧模板。如果未选中此复选框，则在发生冲突时，系统将要求您输入新的唯一名称。';
$string['pagexofy'] = '第{$a->formpage}页，共 {$a->userformpagecount}页';
$string['parentconstraints'] = '父约束';
$string['parentcontent'] = '父内容';
$string['parentcontent_help'] = '这是用户为了启用/显示此问题而应该回答父问题的内容。';
$string['parentelement_help'] = '在完成问题回答期间，根据问题的答案决定当前问题的访问。';
$string['parentelement_title'] = '父问题';
$string['parentformat'] = '定义“{$a->fieldname}”格式，如下所示：{$a->examples}';
$string['parentid'] = '父问题';
$string['parentid_header'] = '关系';
$string['parentid_help'] = '父问题允许您创建条件分支。列表中的灰色标识隐藏的父问题。显示它们才可以在此列表中可用。<br>保留标有星号的问题。';
$string['pause'] = '暂停';
$string['pauseresume'] = '允许暂停/恢复';
$string['pauseresume_help'] = '允许暂停，以便稍后恢复并提交答卷。您还可以向用户发送电子邮件以提醒他们未完成的工作。';
$string['pauseresumeemail'] = '允许暂停/恢复提醒电子邮件';
$string['pauseresumenoemail'] = '允许暂停/恢复而不发送提醒电子邮件';
$string['plugin'] = '问题';
$string['pluginadministration'] = 'Surveypro 管理';
$string['pluginname'] = 'Surveypro';
$string['pluginname_help'] = '在这里写下要保存的问卷调查插件的名称。';
$string['plugintype'] = '插件类型';
$string['position'] = '问题位置';
$string['position_help'] = '使用此选项可以选择元素内容的位置。它可以位于用户界面的左侧，在界面正上方的专用行中输入答案，也可以位于界面上方的专用行中，跨越所有行。<br>注意：左侧位置强制元素内容为不带图像的纯文本。<br>两个“顶部”位置通常用于超过几个单词的内容，并且对于包含图像的问题是必需的！';
$string['previewmode'] = '您在“{$a}”中：保存数据的按钮不应该显示';
$string['previousformpage'] = '<< 上一页';
$string['privacy:metadata:answer'] = '对问卷调查中的问题的回答。';
$string['privacy:metadata:answer:content'] = '存储每个答案的字段。';
$string['privacy:metadata:answer:contentformat'] = '存储每个问题答案格式的字段。';
$string['privacy:metadata:submission:status'] = '用户提供答卷的整体状态。';
$string['privacy:metadata:submission:timecreated'] = '提交答卷的时间。';
$string['privacy:metadata:submission:timemodified'] = '修改答卷的时间。';
$string['privacy:metadata:submission:userid'] = '提交答卷的用户ID。';
$string['privacy:metadata:uploadedfiles'] = '在响应框架中上传的文件。';
$string['privacy:path:fileupload'] = '答卷 {$a}';
$string['raw'] = '原始（用于在 surveypro 中进一步导入;“{$a}”可能不受遵循;';
$string['readonlyaccess'] = '只读访问';
$string['relation_status'] = '状态';
$string['reminder_neverstarted_task'] = '提醒从未开始的问卷调查';
$string['reminder_oneshot_task'] = '提醒停止问卷的调查';
$string['reminder_pauseresume_task'] = '提醒暂停时间过长的问卷调查';
$string['reminder_subject'] = '来自 {$a} 的问卷调查提醒';
$string['reminderoneshot_content1'] = '亲爱的{$a->fullname}<br>看来您在问卷调查“{$a->surveyproname}”的填写结果仍未提交。';
$string['reminderoneshot_content2'] = '<br>它将在两个小时以内删除。';
$string['reminderoneshot_content3'] = '<br>请考虑在{$a}再次登录并尽快提交。<br>';
$string['reminderpaused_content1'] = '亲爱的{$a->fullname}<br>您未填写完的问卷调查“{$a->surveyproname}”似乎已经暂停了很长时间。';
$string['reminderpaused_content2'] = '<br>丢弃它是有具体风险的。';
$string['reminderpaused_content3'] = '<br>请考虑在{$a}再次登录并提交。<br>';
$string['remindneverstarted_content'] = '尊敬的{$a->fullname}<br>您仍未开始填写“{$a->surveyproname}”问卷调查。<br>请考虑登录{$a->surveyprourl}并尽快填写。<br>';
$string['reportederror'] = '{$a}';
$string['reportederroritembase'] = '%s 对 “%s” 插件的 “surveypro_item” 执行 xsd 验证';
$string['reportederrorplugin'] = '%s 执行 “%s” 插件的 xsd 验证';
$string['reportplugin'] = '报告插件';
$string['reports'] = '报告';
$string['reportsection'] = '“报告”部分';
$string['required'] = '必填';
$string['required_help'] = '用户必须回答这个问题吗？';
$string['requireditem_title'] = '必填问题。单击将其设置为可选。';
$string['reserved'] = '保留';
$string['reserved_help'] = '此问题是仅对具有特殊权限的用户可用，还是对每个用户都可用？';
$string['reserved_title'] = '保留问题。单击使其可用。';
$string['response'] = '答卷';
$string['responseauthor'] = '作者：';
$string['responses'] = '答卷集';
$string['responsetimecreated'] = '提交的答卷：';
$string['responsetimemodified'] = '，最后修改日期：';
$string['revieworpause'] = '、查看或暂停';
$string['reviewsubmissions'] = '查看 SurveyPro 提交的内容';
$string['riskyeditdeadline'] = '有风险的修改的截止日期';
$string['riskyeditdeadline_help'] = '允许允许管理调查内容的用户强制修改此问卷调查，即使已有答卷。';
$string['runreport'] = '<a href=“{$a->href}”>运行 {$a->reportname} 报告</a>';
$string['save'] = '保存';
$string['saveasnew'] = '用新的保存';
$string['savemastertemplates'] = '<a href=“{$a}”>保存主模板</a>';
$string['saveusertemplates'] = '<a href=“{$a}”>保存用户模板</a>';
$string['schemavalidationfailed'] = '模板使用无效的 xml 文件。请验证一下';
$string['settings'] = 'Surveypro';
$string['sharinglevel'] = '共享级别';
$string['sharinglevel_help'] = '选择您的模板将与其他课程共享的级别。如果您选择“课程”，此模板将仅在本课程中可用，如果您选择课程类别，则此模板将仅适用于与本课程共享同一课程“类别”的课程，如果您选择“网站”，此模板将可用于此平台中的其他课程。';
$string['showallitems'] = '显示所有问题';
$string['showallsubmissions'] = '显示所有答卷';
$string['showfield_title'] = '隐藏问题，点击显示。';
$string['sortindex'] = '顺序';
$string['specializations'] = '{$a} 特定设置';
$string['star'] = '*';
$string['startyear'] = '允许的最小年份';
$string['startyear_help'] = '定义每个问题所需的年份下限值 。';
$string['status'] = '答卷状态';
$string['statusboth'] = '已完成和进行中的';
$string['statusclosed'] = '已完成的';
$string['statusinprogress'] = '进行中的';
$string['stopyear'] = '允许的最大年份';
$string['stopyear_help'] = '定义每个问题所需的年份上限。';
$string['submission'] = '尝试';
$string['submissions'] = '答卷集';
$string['submissions_all_1_1'] = '1 位用户提交了 1 份答卷';
$string['submissions_all_1_many'] = '{$a->usercount} 用户提交了1份答卷';
$string['submissions_all_many_1'] = '1 位用户提交的{$a->submissions}答卷';
$string['submissions_all_many_many'] = '{$a->usercount}个用户提交的 {$a->submissions}份答卷';
$string['submissions_detail_1_1'] = '1 位用户提交的 1 个“{$a->status}”答卷';
$string['submissions_detail_1_many'] = '{$a->usercount} 用户提交的1个“{$a->status}”答卷';
$string['submissions_detail_many_1'] = '1 位用户提交的{$a->submissions}“{$a->status}”答卷';
$string['submissions_detail_many_many'] = '{$a->usercount} 个用户提交的{$a->submissions} \'{$a->status}\' 答卷';
$string['submissions_welcome'] = '答卷总览';
$string['submissionslist'] = '答卷清单';
$string['surveypro'] = '调查';
$string['surveypro:accessownreports'] = '访问自己的报告';
$string['surveypro:accessreports'] = '访问报告';
$string['surveypro:accessreserveditems'] = '访问保留项目';
$string['surveypro:addinstance'] = '添加新的调查活动';
$string['surveypro:additems'] = '添加调查问题';
$string['surveypro:alwaysseeowner'] = '查看答卷所有者，即使是匿名调查';
$string['surveypro:applymastertemplates'] = '套用主模板';
$string['surveypro:applyusertemplates'] = '套用用户模板';
$string['surveypro:deleteotherssubmissions'] = '删除其他用户的答卷';
$string['surveypro:deleteownsubmissions'] = '删除自己的答卷';
$string['surveypro:deleteusertemplates'] = '删除用户模板';
$string['surveypro:downloadusertemplates'] = '下载用户模板';
$string['surveypro:duplicateotherssubmissions'] = '复制其他用户的答卷';
$string['surveypro:duplicateownsubmissions'] = '复制自己答卷';
$string['surveypro:editotherssubmissions'] = '编辑其他用户的答卷';
$string['surveypro:editownsubmissions'] = '编辑自己的答卷';
$string['surveypro:exportresponses'] = '导出收集的答卷';
$string['surveypro:ignoremaxentries'] = '不受最大条目设置限制的提交';
$string['surveypro:importresponses'] = '导入数据';
$string['surveypro:importusertemplates'] = '上传用户模板';
$string['surveypro:manageitems'] = '管理问卷调查问题';
$string['surveypro:manageusertemplates'] = '管理用户模板';
$string['surveypro:preview'] = '问卷调查预览';
$string['surveypro:savemastertemplates'] = '保存主模板';
$string['surveypro:savetopdfotherssubmissions'] = '以PDF格式下载其他用户的答卷';
$string['surveypro:savetopdfownsubmissions'] = '以PDF格式下载自己的答卷';
$string['surveypro:saveusertemplates'] = '保存用户模板';
$string['surveypro:searchsubmissions'] = '搜索答卷';
$string['surveypro:seeotherssubmissions'] = '查看其他用户的答卷';
$string['surveypro:submit'] = '提交答卷';
$string['surveypro:view'] = '查看问卷';
$string['surveypro_dashboard'] = '数据看板';
$string['surveypro_edit'] = '编辑答卷';
$string['surveypro_insert'] = '新答卷';
$string['surveypro_readonly'] = '只读';
$string['surveypro_responses'] = '答卷集';
$string['surveypro_view_search'] = '搜索';
$string['surveyprofieldpluginname'] = '字段插件';
$string['surveyproformatpluginname'] = '条目插件';
$string['surveyproname'] = '问卷调查名称';
$string['surveyproname_help'] = '选择这个问卷调查名字';
$string['surveyproreportpluginname'] = '报告插件';
$string['surveyprotemplatepluginname'] = '主模板插件';
$string['system'] = '站点';
$string['templatelist'] = '可用模板清单';
$string['templatename'] = '模板名称';
$string['templatename_help'] = '在此处写下要保存的模板的名称。';
$string['thankspageeditor'] = '内联感谢页面';
$string['thankspageeditor_help'] = '用户在每次答卷关闭时获取的网页的 html 代码。';
$string['timeclose'] = '可用于';
$string['timeclose_help'] = '学生填写调查问卷的最后日期。';
$string['timecreated'] = '创建';
$string['timemodified'] = '修改';
$string['timeopen'] = '可用自';
$string['timeopen_help'] = '学生可以填写调查问卷的第一个日期。';
$string['tools'] = '工具';
$string['tools_export'] = '导出';
$string['tools_import'] = '导入';
$string['top'] = '顶';
$string['trimonsave'] = '保存时完善答案';
$string['trimonsave_help'] = '删除用户输入开头和结尾的空格。';
$string['typefield'] = '字段集';
$string['typeformat'] = '格式集';
$string['typeplugin'] = '类型';
$string['typeplugin_help'] = '这是可用问题的列表。问卷调查问题有两种类型：“字段”类型和“格式”类型。选择更适合您需求的元素。';
$string['uerr_willbetrimmed'] = '清理答案的尾随空格';
$string['unaccesiblepages_note'] = '（由于缺乏权限，可能无法访问少数页面）';
$string['unavailableelement_title'] = '不可用的问题。取消隐藏它以使其可用。';
$string['unhandledvalue'] = '未处理的返回值{$a}';
$string['unixtime'] = 'Unix 时间';
$string['unlimited'] = '无限';
$string['unreservable_title'] = '自由访问。不可保留。';
$string['unsearchable_title'] = '不可搜索的项目。无法搜索。';
$string['user'] = '用户';
$string['usercanceled'] = '用户取消的操作';
$string['userenrolled'] = '用户注册：1';
$string['usersenrolled'] = '已注册的用户数：{$a}';
$string['userstyle'] = '自定义样式表';
$string['userstyle_help'] = '在此处添加要应用于此调查的一个或多个级联样式表 （css）。';
$string['usertemplateinfo'] = '用户模板';
$string['usertemplateinfo_help'] = '选择要添加到问卷调查中的用户模板。';
$string['utemplate'] = '用户模板';
$string['utemplate_apply'] = '套用';
$string['utemplate_import'] = '导入';
$string['utemplate_manage'] = '管理';
$string['utemplate_save'] = '保存';
$string['utemplatessection'] = '用户模板部分';
$string['validation'] = '验证选项';
$string['variable'] = '变量';
$string['variable_help'] = '下载后的变量名称。';
$string['verbose'] = '易读格式';
$string['versionmismatch'] = '{$a->plugin} {$a->type} 插件的版本不匹配。模板使用版本：{$a->currentversion}，而 surveypro 插件使用版本 {$a->versiondisk}';
$string['visiblesonly'] = '仅限可见问题';
$string['visiblesonly_help'] = '在此模板中仅包含可见问题。';
$string['welcome_dataexport'] = '使用此页面导出此问卷调查的答卷。<br>提供统计软件格式。导出内容取决于为每个问题选择的“{$a}”（是否可用）。';
$string['welcome_dataimport'] = '使用此页面将答卷导入此问卷调查。<br>要导入的 csv 文件的标题应与调查元素的“变量名称”匹配。<br>目前不允许导入附件元素。<br>未知标题将中断导入过程。<br>“Ownerid”可以包含在标题中。它将分配每个导入响应的所有权（即使调查是匿名的）。<br>如果 csv 文件中缺少“Ownerid”列，则导入的答卷将分配给执行导入的用户。<br>允许导入缺少必需元素的 csv 文件，但无论是否包含， 它们必须提供有效且非空值。<br>允许导入缺少必需元素的文件，并且导入的响应将被标记为“进行中”。<br>如果导入过程导致超过允许用户的最大响应数（如果已设置），则导入过程将中断。';
$string['welcome_emptysurvey'] = '要创建新问卷调查，您可以逐个添加问题以构建最适合您需求的问卷<br>或应用用户或主模板以一次性获得标准问卷。';
$string['welcome_mtemplateapply'] = '您可以使用从主模板中获取的一组问题来构建您的问卷。<br>请注意：所有其他预先存在的问题（如果有）及其已经收集的数据会被删除。';
$string['welcome_relationvalidation'] = '通过此报告，您可以验证当前问卷调查的可靠性。它检查每个父子关系的有效性，标记不良关系，永远不会允许子问题成为问卷调查的一部分，并在“{$a}”列中显示一条消息。';
$string['welcome_utemplateapply'] = '您可以应用从用户模板中获取的一组问题来构建您的问卷。<br>用户模板应该已经从“{$a->uploadpage}”页面上传或从“{$a->savepage}”页面保存。';
$string['welcome_utemplateimport'] = '您可以导入用户模板以在以后应用它们。<br>用户模板是您可以从“{$a}”页面保存的 XML 文件。';
$string['welcome_utemplatesave'] = '使用当前结构的问卷结构保存为用户模板，可用于快速将预定义问卷项目的静态集添加到问卷中。您可以随时下载并与其他 moodle 用户分享，或将其重复用于您自己的调查。如果您想在不再次下载和上传模板的情况下重复使用模板，请注意“{$a}”。';
$string['willclose'] = '关闭时间';
$string['willopen'] = '此问卷调查将开始于';
$string['wrong_direction_found'] = '在 {$a->methodname} 和 $startingpage == {$a->startingpage}的联接中提供了无效的 $direction';
$string['wrong_sharinglevel_found'] = '无效的 $sharinglevel = "{$a->sharinglevel}" 提供给了 {$a->methodname}';
$string['wrong_userdatarec_found'] = '无效的 $userdatarec = \'{$a}\' 不会被替换';
$string['wrongrelation'] = '“{$a}”不匹配';
$string['xmltemplate_help'] = '选择要下载为 zip 文件的模板以与其他 moodle 用户共享。';
$string['xsdnotfound'] = '找不到 XML 模板的 xsd 验证架构。<br>您的代码必须由开发人员修复。';
$string['yes_deleteallitems'] = '删除每个问题';
$string['yes_deletehiddenitems'] = '删除每个隐藏问题';
$string['yes_deletevisibleitems'] = '删除每个可见问题';
$string['yes_hideallitems'] = '隐藏每个问题';
$string['yes_showallitems'] = '显示每个问题';
$string['yoursubmissions'] = '你的答卷 \'{$a->status}\' ： {$a->responsescount}';