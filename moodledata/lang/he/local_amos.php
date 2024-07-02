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
 * Strings for component 'local_amos', language 'he', version '4.1'.
 *
 * @package     local_amos
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = '<p>AMOS stands for Automated Manipulation Of Strings. AMOS is a central repository of Moodle strings and their history. It tracks the addition of English strings into Moodle code, gathers translations, handles common translation tasks and generates language packages to be deployed on Moodle servers.</p> <p>See <a href="http://docs.moodle.org/en/AMOS">AMOS documentation</a> for more information.</p>
';
$string['amos'] = 'AMOS - Moodle translation tool';
$string['amos:commit'] = 'Commit the staged strings into the main repository';
$string['amos:importfile'] = 'mport strings from uploaded file';
$string['amos:manage'] = 'Manage AMOS portal';
$string['amos:stage'] = 'Use AMOS translation tool and stage the strings';
$string['amos:stash'] = 'Store the current stage into the persistent stash';
$string['commitstage'] = 'Commit staged strings';
$string['commitstage_help'] = 'Permanently store all staged translations in AMOS repository. Stage is automatically pruned and rebased before it is committed. Only committable strings are stored. That means that only translations below highlighted in green will be stored. The stage is cleared after the commit.';
$string['committableall'] = 'all languages';
$string['committablenone'] = 'no languages allowed - please contact AMOS manager';
$string['componentsall'] = 'כל';
$string['componentsnone'] = 'ללא';
$string['componentsstandard'] = 'רגיל';
$string['confirmaction'] = 'This can not be undone. Are you sure?';
$string['contribaccept'] = 'Accept';
$string['contribactions'] = 'Contributed translation actions';
$string['contribactions_help'] = 'Depending on your rights and the contribution workflow, you can have some of the following actions available: * Apply - copy the contributed translation into your stage, does not modify the contribution record * Assign to me - set yourself as the contribution assignee, that is the person resposible for the contribution review and integration * Resign - set nobody as the contribution assignee * Start review - assign the new contribution to yourself, set its status to \'In review\' and copy the submitted translation into your stage * Accept - mark the contribution as accepted * Reject - mark the contribution as rejected, please describe the reasons in a comment. The contributor is informed by email whenever the status of his contribution changes.';
$string['contribactions_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribapply'] = 'Apply';
$string['contribassignee'] = 'Assignee';
$string['contribassigneenone'] = '-';
$string['contribassigntome'] = 'Assign to me';
$string['contribauthor'] = 'Author';
$string['contribclosedno'] = 'Hide resolved contributions';
$string['contribclosedyes'] = 'Show resolved contributions';
$string['contribcomponents'] = 'Components';
$string['contribid'] = 'ID';
$string['contribincomingnone'] = 'No incoming contributions';
$string['contribincomingsome'] = 'Incoming contributions ({$a})';
$string['contriblanguage'] = 'Language';
$string['contribreject'] = 'Reject';
$string['contribresign'] = 'Resign';
$string['contribstagedinfo_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstartreview'] = 'Start review';
$string['contribstatus'] = 'Status';
$string['contribstatus0'] = 'New';
$string['contribstatus10'] = 'In review';
$string['contribstatus20'] = 'Rejected';
$string['contribstatus30'] = 'Accepted';
$string['contribstatus_help'] = 'Workflow of a contributed translation consists of following states: * New - the contribution has been submitted but it was not reviewed yet * In review - the contribution has been assigned to a language pack maintainer and was staged for review * Rejected - the language pack maintainer has rejected the contribution and probably left an explanation in a comment * Accepted - the contribution has been accepted by the language pack maintainer';
$string['contribstatus_link'] = 'AMOS#Contributing_to_a_language_pack';
$string['contribstrings'] = 'Strings';
$string['contribstringseq'] = '{$a->orig} new';
$string['contribstringsnone'] = '{$a->orig} (all of them are already translated in the lang pack)';
$string['contribstringssome'] = '{$a->orig} ({$a->same} of them already have more recent translation)';
$string['contribsubject'] = 'Subject';
$string['contribsubmittednone'] = 'No submitted contributions';
$string['contribsubmittedsome'] = 'Your contributions ({$a})';
$string['contribtimemodified'] = 'Modified';
$string['contributions'] = 'Contributions';
$string['err_exception'] = 'Error: {$a}';
$string['err_invalidlangcode'] = 'Invalid language code';
$string['err_parser'] = 'Parsing error: {$a}';
$string['filtercmp'] = 'Components';
$string['filtercmp_desc'] = 'Show strings of these components';
$string['filterlng'] = 'Languages';
$string['filterlng_desc'] = 'Display translations in these languages';
$string['filtermis'] = 'Miscellaneous';
$string['filtermis_desc'] = 'Additional conditions on strings to display';
$string['filtermisfhlp'] = 'help strings only';
$string['filtermisfmis'] = 'missing and outdated strings only';
$string['filtermisfstg'] = 'staged strings only';
$string['filtersid'] = 'String identifier';
$string['filtersid_desc'] = 'The key in the array of strings';
$string['filtertxt'] = 'Substring';
$string['filtertxt_desc'] = 'String must contain given text';
$string['filtertxtcasesensitive'] = 'case-sensitive';
$string['filtertxtregex'] = 'regex';
$string['filterver'] = 'Versions';
$string['filterver_desc'] = 'Show strings from these Moodle versions';
$string['importfile'] = 'Import translated strings from file';
$string['importfile_help'] = 'If you have your strings translated offline, you can stage them via this form. * The file must be valid Moodle PHP strings definition file. Look at `/lang/en/` directory of your Moodle installation for examples. * Name of the file must match the one with English strings definitons for the given component (like `moodle.php`, `assignment.php` or `enrol_manual.php`). All strings found in the file will be staged for the selected version and language.';
$string['importfile_link'] = 'local/amos/importfile';
$string['language'] = 'Language';
$string['languages'] = 'Languages';
$string['languagesall'] = 'כל';
$string['languagesnone'] = 'ללא';
$string['log'] = 'Log';
$string['logfilterbranch'] = 'Versions';
$string['logfiltercommithash'] = 'git hash';
$string['logfiltercommitmsg'] = 'Commit message contains';
$string['logfiltercommits'] = 'Commit filter';
$string['logfiltercommittedafter'] = 'Committed after';
$string['logfiltercommittedbefore'] = 'Committer before';
$string['logfiltercomponent'] = 'Components';
$string['logfilterlang'] = 'Languages';
$string['logfiltershow'] = 'Show filtered commits and strings';
$string['logfiltersource'] = 'Source';
$string['logfiltersourceamos'] = 'amos (web based translator)';
$string['logfiltersourcecommitscript'] = 'commitscript (AMOScript in the commit message)';
$string['logfiltersourcegit'] = 'git (git mirror of Moodle source code and 1.x packs)';
$string['logfiltersourcerevclean'] = 'revclean (reverse clean-up process)';
$string['logfilterstringid'] = 'String identifier';
$string['logfilterstrings'] = 'String filter';
$string['logfilterusergrp'] = 'Committer';
$string['logfilterusergrpor'] = 'or';
$string['maintainers'] = 'Maintainers';
$string['markuptodate'] = 'Marking the translation as up-to-date';
$string['newlanguage'] = 'New language';
$string['nofiletoimport'] = 'Please provide a file to import from.';
$string['nologsfound'] = 'No strings found, please modify filters';
$string['nostringsfound'] = 'No strings found';
$string['nostringtoimport'] = 'No valid string found in the file. Make sure the file has correct filename and is properly formatted.';
$string['numofcommitsabovelimit'] = 'Found {$a->found} commits matching the commit filter, using {$a->limit} most recent';
$string['numofcommitsunderlimit'] = 'Found {$a->found} commits matching the commit filter';
$string['numofmatchingstrings'] = 'Withing that, {$a->strings} modifications in {$a->commits} commits match the string filter';
$string['outdatednotcommitted'] = 'Outdated string';
$string['outdatednotcommitted_help'] = 'AMOS detected that the string may be outdated as the English version was modified after it had been translated. Please review the translation.';
$string['outdatednotcommittedwarning'] = 'outdated';
$string['ownstashactions'] = 'Stash actions';
$string['ownstashactions_help'] = '* Apply - copy the translated strings from the stash into the stage and keep the stash unmodified. If the string is already in the stage, it is overwritten with the stashed one. * Pop - move the translated strings from the stash into the stage and drop the stash (that is Apply and Drop). * Drop - throw away the stashed strings. * Submit - opens a form for submitting the stash to the official language maintainers so they can include your contribution in the official language pack.';
$string['ownstashes'] = 'Your stashes';
$string['ownstashes_help'] = 'This is a list of all your stashes.';
$string['ownstashesnone'] = 'No own stashes found';
$string['permalink'] = 'קישור קבוע';
$string['placeholder'] = 'סימניות';
$string['placeholder_help'] = 'Placeholders are special statements like `{$a}` or `{$a->something}` within the string. They are replaced with a value when the string is actually printed. It is important to copy them exactly as they are in the original string. Do not translate them nor change their left-to-right orientation.';
$string['placeholderwarning'] = 'מחרוזת המכילה סימניה';
$string['pluginclasscore'] = 'Core subsystems';
$string['pluginclassnonstandard'] = 'Non-standard plugins';
$string['pluginclassstandard'] = 'Standard plugins';
$string['pluginname'] = 'AMOS';
$string['presetcommitmessage'] = 'Contributed translation #{$a->id} by {$a->author}';
$string['presetcommitmessage2'] = 'מזג מחרוזות חסרות מ-{$a->source}
לפיצול
{$a->target}';
$string['privileges'] = 'Your privileges';
$string['privilegesnone'] = 'You have read-only access to public information.';
$string['requestactions'] = 'Action';
$string['requestactions_help'] = '* Apply - copy the translated strings from the pull request into your stage. If the string is already in the stage, it is overwritten with the stashed one. * Hide - blocks the pull request so that it is not displayed to you any more.';
$string['sourceversion'] = 'Source version
Source';
$string['stage'] = 'Stage';
$string['stageactions'] = 'Stage actions';
$string['stageactions_help'] = '* Edit staged strings - modifies the translator filter settings so that only staged translations are displayed. * Prune non-committable strings - unstage all translations that you are not allowed to commit. Stage is pruned automatically before it is committed. * Rebase - unstage all translations that either do not modify the current translation or are older than the most recent translation in the repository. Stage is rebased automatically before it is committed. * Unstage all - clears the stage, all staged translations are lost.';
$string['stageedit'] = 'Edit staged strings';
$string['stageprune'] = 'Prune non-committable';
$string['stagerebase'] = 'Rebase';
$string['stagestringsnocommit'] = 'There are {$a->staged} staged strings';
$string['stagestringsnone'] = 'There are no staged strings';
$string['stagestringssome'] = 'There are {$a->staged} staged strings, {$a->committable} of them can be committed';
$string['stagesubmit'] = 'Submit to maintainers';
$string['stagetranslation'] = 'Translation';
$string['stagetranslation_help'] = 'Displays the staged translation to be committed. The background color of the cell means: * Green - you have modified a string or added a missing translation and you are allowed to commit the translation. * Blue - you have modified the translation or added a missing translation but you are not allowed to commit it into the given language. * No color - the staged translation is the same as the current one and therefore will not be committed.';
$string['stageunstageall'] = 'Unstage all';
$string['stashactions'] = 'Stashing actions';
$string['stashactions_help'] = 'Stash is a snapshot of the current stage. Stashes can be submitted to the official language pack maintainers for inclusion into the language pack.';
$string['stashapply'] = 'Apply';
$string['stashautosave'] = 'Automatically saved backup stash';
$string['stashautosave_help'] = 'This stash contains the most recent snapshot of your stage. You can use it as a backup for cases when all strings are unstaged by accident, for example. Use \'Apply\' action to copy all stashed strings back into the stage (will overwrite the string if it is already staged).';
$string['stashcomponents'] = '<span>Components:</span> {$a}';
$string['stashdrop'] = 'Drop';
$string['stashes'] = 'Stashes';
$string['stashlanguages'] = '<span>Languages:</span> {$a}';
$string['stashpop'] = 'Pop';
$string['stashpush'] = 'Push all staged strings into a new stash';
$string['stashstrings'] = '<span>Number of strings:</span> {$a}';
$string['stashsubmit'] = 'Submit to maintainers';
$string['stashsubmitdetails'] = 'Submitting details';
$string['stashsubmitmessage'] = 'Message';
$string['stashsubmitsubject'] = 'Subject';
$string['stashtitle'] = 'Stash title';
$string['stashtitledefault'] = 'WIP - {$a->time}';
$string['stringhistory'] = 'History';
$string['strings'] = 'Strings';
$string['submitting'] = 'Submitting a contribution';
$string['submitting_help'] = 'This will send translated strings to official language maintainers. They will be able to apply your work into their stage, review it and eventually commit. Please provide a message for them describing your work and why you would like to see your contribution included.';
$string['targetversion'] = 'Target version';
$string['translatortool'] = 'Translator';
$string['translatortranslation'] = 'Translation';
$string['translatortranslation_help'] = 'Click the cell to turn it into the input editor. Insert the translation and click outside the cell to stage the translation. The background color of the cell means: * Green - the string is already translated and you are allowed to modify the translation and commit it. * Yellow - the string is committable but may be out-dated. The English version could be modified after the string had been translated. * Red - the string is not translated and you are allowed to translate it and commit the translation. * Blue - you have modified the translation and it is now staged. Do not forget to commit the staged translation before you log out! * No color - even though you can stage the translation, you are not allowed to commit into this languages. You will be only able to export the stage into a file.';
$string['typecontrib'] = 'Non-standard plugins';
$string['typecore'] = 'Core subsystems';
$string['typestandard'] = 'Standard plugins';
$string['version'] = 'Version';
