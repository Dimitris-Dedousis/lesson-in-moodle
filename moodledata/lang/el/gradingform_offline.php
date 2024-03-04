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
 * Strings for component 'gradingform_offline', language 'el', version '4.3'.
 *
 * @package     gradingform_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Προσθήκη κριτηρίου';
$string['additionalfeedback'] = 'Επιπρόσθετη ανατροφοδότηση';
$string['backtoediting'] = 'Επιστροφή στην επεξεργασία';
$string['confirmdeletecriterion'] = 'Σίγουρα θέλετε να διαγραφεί αυτό το κριτήριο;';
$string['confirmdeletelevel'] = 'Σίγουρα θέλετε να διαγραφεί αυτό το επίπεδο;';
$string['criterion'] = 'Κριτήριο {$a}';
$string['criterionaddlevel'] = 'Προσθήκη επιπέδου';
$string['criteriondelete'] = 'Διαγραφή κριτηρίου';
$string['criterionduplicate'] = 'Αντίγραφο κριτηρίου';
$string['criterionempty'] = 'Κάντε κλικ εδώ για να επεξεργαστείτε το κριτήριο';
$string['criterionmovedown'] = 'Μετακίνηση κάτω';
$string['criterionmoveup'] = 'Μετακίνηση πάνω';
$string['criterionremark'] = 'Σχόλιο για το κριτήριο {$a->description}: {$a->remark}';
$string['description'] = 'Περιγραφή';
$string['enableremarks'] = 'Να επιτρέπεται στον βαθμολογητή να προσθέσει παρατηρήσεις κειμένου για κάθε κριτήριο';
$string['err_mintwolevels'] = 'Κάθε κριτήριο πρέπει να έχει τουλάχιστον δύο επίπεδα';
$string['err_nocriteria'] = 'Η ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric) πρέπει να περιέχει τουλάχιστον ένα κριτήριο';
$string['err_nodefinition'] = 'Ο ορισμός του επιπέδου δεν μπορεί να είναι κενός';
$string['err_nodescription'] = 'Η περιγραφή κριτηρίου δεν μπορεί να είναι κενή';
$string['err_novariations'] = 'Τα επίπεδα κριτηρίων δεν μπορεί να αξίζουν όλα τον ίδιο αριθμό πόντων';
$string['err_scoreformat'] = 'Ο αριθμός των πόντων για κάθε επίπεδο πρέπει να είναι ένας έγκυρος αριθμός.';
$string['err_totalscore'] = 'Ο μέγιστος δυνατός αριθμός πόντων κατά την βαθμολόγηση με την ρουμπρίκα (Κλίμακα Διαβαθμισμένων Κριτηρίων, rubric), πρέπει να είναι μεγαλύτερος από 0';
$string['export'] = 'Εξαγωγή ως CSV';
$string['gradingof'] = 'Βαθμολόγηση {$a}';
$string['import'] = 'Εισαγωγή CSV:';
$string['importedby'] = 'Εισαγωγή από';
$string['level'] = 'Επίπεδο {$a->definition}, {$a->score} πόντοι.';
$string['leveldefinition'] = 'Ορισμός {$a} επιπέδου';
$string['leveldelete'] = 'Διαγραφή επιπέδου {$a}';
$string['levelempty'] = 'Κάντε κλικ για να επεξεργαστείτε το επίπεδο';
$string['levelsgroup'] = 'Ομάδα επιπέδων';
$string['lockzeropoints'] = 'Υπολογισμός βαθμού με ελάχιστο σκορ τον ελάχιστο επιτεύξιμο βαθμό για τη ρουμπρίκα';
$string['name'] = 'Όνομα';
$string['notset'] = 'Μη ορισμένο';
$string['pluginname'] = 'Εκτός σύνδεσης';
$string['pointsvalue'] = '{$a} πόντοι';
$string['previewrubric'] = 'Προεπισκόπιση ρουμπρίκας';
$string['privacy:metadata:criterionid'] = 'Ένα αναγνωριστικό για ένα συγκεκριμένο κριτήριο που βαθμολογείται.';
$string['privacy:metadata:instanceid'] = 'Αναγνωριστικό που σχετίζεται με έναν βαθμό σε μια δραστηριότητα.';
$string['privacy:metadata:levelid'] = 'Το επίπεδο που προκύπτει από την ρουμπρίκα.';
$string['privacy:metadata:remark'] = 'Παρατηρήσεις σχετικά με το κριτήριο της ρουμπρίκας που αξιολογείται.';
$string['regradeoption0'] = 'Να μην γίνει επισήμανση για αναβαθμολόγηση';
$string['regradeoption1'] = 'Επισήμανση για αναβαθμολόγηση';
$string['rubric'] = 'Ρουμπρίκα';
$string['rubricmapping'] = 'Σκορ στους κανόνες αντιστοίχισης βαθμών';
$string['rubricoptions'] = 'Επιλογές ρουμπρίκας';
$string['rubricstatus'] = 'Τρέχουσα κατάσταση ρουμπρίκας';
$string['save'] = 'Αποθήκευση';
$string['saverubric'] = 'Αποθήκευση και προετοιμασία ρουμπρίκας';
$string['saverubricdraft'] = 'Αποθήκευση ως προσχέδιο';
$string['scoreinputforlevel'] = 'Εισαγωγή σκορ για το επίπεδο {$a}';
$string['scorepostfix'] = '{$a} πόντοι';
$string['showdescriptionstudent'] = 'Εμφάνιση περιγραφής ρουμπρίκας στους βαθμολογούμενους';
$string['showdescriptionteacher'] = 'Εμφάνιση περιγραφής ρουμπρίκας κατά τη διάρκεια της αξιολόγησης';
$string['showremarksstudent'] = 'Εμφάνιση παρατηρήσεων σε αυτούς που βαθμολογούνται';
$string['showscorestudent'] = 'Εμφάνιση πόντων για κάθε επίπεδο σε αυτούς που βαθμολογούνται';
$string['showscoreteacher'] = 'Εμφάνιση πόντων για κάθε επίπεδο κατά την αξιολόγηση';
$string['sortlevelsasc'] = 'Διάταξη ταξινόμησης για επίπεδα:';
$string['sortlevelsasc0'] = 'Φθίνουσα κατά αριθμό πόντων';
$string['sortlevelsasc1'] = 'Αύξουσα κατά αριθμό πόντων';
