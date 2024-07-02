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
 * Strings for component 'tool_mfa', language 'fr', version '4.1'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Poids obtenu';
$string['alltime'] = 'Tout le temps';
$string['areyousure'] = 'Voulez-vous vraiment révoquer le facteur ?';
$string['combination'] = 'Combinaison';
$string['connector'] = 'ET';
$string['created'] = 'Créé';
$string['createdfromip'] = 'Créé à partir de l’adresse IP';
$string['debugmode:heading'] = 'Mode de débogage';
$string['devicename'] = 'Appareil';
$string['email:subject'] = 'Impossible de se connecter à {$a}';
$string['enablefactor'] = 'Activer facteur';
$string['error:actionnotfound'] = 'Action « {$a} » non prise en charge';
$string['error:directaccess'] = 'Cette page ne devrait pas être accessible directement';
$string['error:notenoughfactors'] = 'Impossible de s’authentifier';
$string['error:revoke'] = 'Impossible de révoquer le facteur';
$string['error:setupfactor'] = 'Impossible de mettre en place le facteur';
$string['event:userfailedmfa'] = 'Authentification utilisateur AMF échouée';
$string['event:userpassedmfa'] = 'Vérification passée';
$string['event:userrevokedfactor'] = 'Révocation du facteur';
$string['event:usersetupfactor'] = 'Mise en place du facteur';
$string['factor'] = 'Facteurs';
$string['factorreport'] = 'Rapport tous facteurs';
$string['factorrevoked'] = 'Facteur « {$a} » correctement révoqué.';
$string['fallback'] = 'Facteur de repli';
$string['fallback_info'] = 'Ce facteur est le facteur utilisé si aucun autre facteur n’est configuré. Il échouera toujours.';
$string['guidance'] = 'Guide d’utilisation AMF';
$string['inputrequired'] = 'Saisie utilisateur';
$string['ipatcreation'] = 'Adresse IP lors de la création du facteur';
$string['lastverified'] = 'Dernière vérification';
$string['lockedusersforallfactors'] = 'Utilisateurs verrouillés : tous les facteurs';
$string['lockedusersforfactor'] = 'Utilisateurs verrouillés : {$a}';
$string['mfa'] = 'AMF';
$string['mfa:mfaaccess'] = 'Interagir avec l’authentification multifacteur';
$string['mfareports'] = 'Rapports authentification multifacteur';
$string['mfasettings'] = 'Gérer AMF';
$string['na'] = 'n/a';
$string['needhelp'] = 'Besoin d’aide ?';
$string['nologinusers'] = 'Pas connecté';
$string['nonauthusers'] = 'Authentification multifacteur en attente';
$string['overall'] = 'Tous';
$string['pending'] = 'En attente';
$string['performbulk'] = 'Action par lots';
$string['pluginname'] = 'Authentification multifacteur';
$string['preferences:activefactors'] = 'Facteurs actifs';
$string['preferences:availablefactors'] = 'Facteurs disponibles';
$string['preferences:header'] = 'Préférences de l’authentification multifacteur';
$string['preferenceslink'] = 'Cliquer ici pour aller aux préférences utilisateur.';
$string['privacy:metadata:tool_mfa'] = 'Données avec les facteurs d’authentification multifacteur configurés';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Adresse IP à partir de laquelle le facteur a été mis en place';
$string['privacy:metadata:tool_mfa:factor'] = 'Type de facteur';
$string['privacy:metadata:tool_mfa:id'] = 'ID de l’enregistrement';
$string['privacy:metadata:tool_mfa:label'] = 'Nom de l’instance du facteur, par exemple appareil ou courriel';
$string['privacy:metadata:tool_mfa:lastverified'] = 'L’horodatage de la dernière vérification de l’utilisateur avec ce facteur';
$string['privacy:metadata:tool_mfa:secret'] = 'Toute donnée secrète pour le facteur';
$string['privacy:metadata:tool_mfa:timecreated'] = 'L’horodatage de la mise en place de l’instance du facteur';
$string['privacy:metadata:tool_mfa:timemodified'] = 'L’horodatage de la dernière modification du facteur';
$string['privacy:metadata:tool_mfa:userid'] = 'L’ID de l’utilisateur a qui appartient ce facteur';
$string['privacy:metadata:tool_mfa_auth'] = 'Cette table de base de données enregistre l’horodatage du dernier enregistrement d’une authentification AMF pour un identifiant utilisateur.';
$string['privacy:metadata:tool_mfa_auth:lastverified'] = 'L’horodatage de la dernière authentification de l’utilisateur';
$string['privacy:metadata:tool_mfa_auth:userid'] = 'L’utilisateur avec lequel cet horodatage est associé.';
$string['privacy:metadata:tool_mfa_secrets'] = 'Cette table de base de données enregistre les secrets temporaires pour l’authentification utilisateur.';
$string['privacy:metadata:tool_mfa_secrets:factor'] = 'Le facteur avec lequel ce secret est associé.';
$string['privacy:metadata:tool_mfa_secrets:secret'] = 'Le code secret de sécurité.';
$string['privacy:metadata:tool_mfa_secrets:sessionid'] = 'L’ID de session avec lequel ce secret est associé.';
$string['privacy:metadata:tool_mfa_secrets:userid'] = 'L’utilisateur avec lequel ce secret est associé.';
$string['redirecterrordetected'] = 'Redirection non prise en charge détectée ; l’exécution du script s’est terminée. L’erreur de redirection est survenue entre l’authentification multifacteur et {$a}.';
$string['resetconfirm'] = 'Réinitialiser le facteur utilisateur';
$string['resetfactor'] = 'Réinitialiser les facteurs d’authentification utilisateur';
$string['resetfactorconfirm'] = 'Voulez-vous vraiment réinitialiser ce facteur pour {$a} ?';
$string['resetfactorplaceholder'] = 'Nom d’utilisateur ou courriel';
$string['resetsuccess'] = 'Facteur « {$a->factor} » réinitialisé pour l’utilisateur « {$a->username} ».';
$string['resetsuccessbulk'] = 'Facteur « {$a} » réinitialisé pour les utilisateurs fournis.';
$string['resetuser'] = 'Utilisateur :';
$string['revoke'] = 'Révoquer';
$string['revokefactor'] = 'Révoquer le facteur';
$string['selectfactor'] = 'Sélectionner un facteur à réinitialiser :';
$string['selectperiod'] = 'Sélectionner une période de vérification pour le rapport :';
$string['settings:combinations'] = 'Résumé des bonnes conditions de connexion';
$string['settings:debugmode'] = 'Activer le mode de débogage';
$string['settings:debugmode_help'] = 'Le mode de débogage affichera un bandeau de notification sur les pages d’administration authentification multifacteur, ainsi que sur la page des préférences utilisateur avec les informations sur les facteurs actuellement activés.';
$string['settings:duration'] = 'Durée de validité des secrets';
$string['settings:duration_help'] = 'La durée de validité des secrets générés.';
$string['settings:enabled'] = 'Plugin authentification multifacteur activé';
$string['settings:enablefactor'] = 'Activer le facteur';
$string['settings:enablefactor_help'] = 'Cocher cette case pour permettre d’utiliser le facteur pour l’authentification multifacteur.';
$string['settings:general'] = 'Réglages généraux authentification multifacteur';
$string['settings:guidancecheck'] = 'Utiliser la page d’aide';
$string['settings:guidancecheck_help'] = 'Ajouter un lien vers la page d’aide sur les pages d’authentification multifacteur et sur la page de préférences d’authentification multifacteur.';
$string['settings:guidancefiles'] = 'Fichier de la page de contenu';
$string['settings:guidancefiles_help'] = 'Ajouter ici tous les fichiers à utiliser dans la page d’aide et intégrez-les dans la page avec {{filename}} (chemin résolu) ou {{{filename}}} (lien html) dans l’éditeur';
$string['settings:guidancepage'] = 'Contenu de la page d’aide';
$string['settings:guidancepage_help'] = 'Ce code HTML sera affiché sur la page d’aide. Saisir des noms de fichier de la zone de fichier pour intégrer le fichier dont le chemin résolu est {{filename}} ou comme lien html à l’aide de {{{filename}}}.';
$string['settings:lockout'] = 'Seuil de verrouillage';
$string['settings:lockout_help'] = 'Nombre de tentatives dont dispose un utilisateur pour répondre aux facteurs avant qu’ils ne puissent pas se connecter.';
$string['settings:redir_exclusions'] = 'Les URLs qui ne doivent pas rediriger la vérification AMF';
$string['settings:weight'] = 'Poids du facteur';
$string['settings:weight_help'] = 'Le poids de ce facteur en cas de réussite. Un utilisateur nécessite au moins 100 points pour se connecter.';
$string['setup'] = 'Paramétrer';
$string['setupfactor'] = 'Paramétrer le facteur';
$string['setuprequired'] = 'Réglage utilisateur';
$string['state:fail'] = 'Échec';
$string['state:locked'] = 'Verrouillé';
$string['state:neutral'] = 'Neutre';
$string['state:pass'] = 'Réussite';
$string['state:unknown'] = 'Inconnu';
$string['totalusers'] = 'Total utilisateurs';
$string['totalweight'] = 'Poids total';
$string['userempty'] = 'L’utilisateur ne peut pas être vide.';
$string['userlogs'] = 'Journaux utilisateur';
$string['usernotfound'] = 'Impossible de localiser l’utilisateur.';
$string['usersauthedinperiod'] = 'Connecté';
$string['verificationcode_help'] = 'Le code de vérification fourni par le facteur d’authentification actuel.';
$string['weight'] = 'Poids';
