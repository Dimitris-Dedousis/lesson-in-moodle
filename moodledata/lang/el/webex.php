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
 * Strings for component 'webex', language 'el', version '4.3'.
 *
 * @package     webex
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chat:addinstance'] = 'Προσθήκη μιας νέας συνάντησης WebEX';
$string['chooseavariable'] = 'Επιλογή μιας μεταβλητής...';
$string['clicktoopen'] = 'Κάντε κλικ {$a} εδώ για να πάτε στην συνάντηση.';
$string['configdisplayoptions'] = 'Επιλέξτε όλες τις επιλογές που θα πρέπει να είναι διαθέσιμες, οι υπάρχουσες ρυθμίσεις δεν τροποποιούνται. Κρατήστε πατημένο το πλήκτρο CTRL για να επιλέξετε πολλαπλά πεδία.';
$string['configframesize'] = 'Όταν μια ιστοσελίδα ή ένα ανεβασμένο αρχείο εμφανίζεται μέσα σε ένα πλαίσιο, αυτή η τιμή είναι το ύψος (σε pixel) του επάνω πλαισίου (το οποίο περιέχει την πλοήγηση).';
$string['configrolesinparams'] = 'Να ενεργοποιηθεί εάν θέλετε να συμπεριλάβετε τοπικά ονόματα ρόλων στη λίστα των διαθέσιμων μεταβλητών παραμέτρων.';
$string['configsecretphrase'] = 'Αυτή η μυστική φράση χρησιμοποιείται για να παράγει κρυπτογραφημένη τιμή κωδικού που μπορεί να σταλεί σε ορισμένους εξυπηρετητές ως παράμετρος. Ο κρυπτογραφημένος κωδικός παράγεται από μια τιμή md5 της τρέχουσας διεύθυνσης IP χρήστη συνενωμένη με τη μυστική σας φράση. δηλ. κωδικός = md5(IP.ΜυστικήΦράση). Παρακαλούμε, λάβετε υπόψη ότι αυτό δεν είναι αξιόπιστο επειδή η διεύθυνση IP ενδέχεται να αλλάξει και συχνά γίνεται κοινή χρήση της από διαφορετικούς υπολογιστές.';
$string['contentheader'] = 'Περιεχόμενο';
$string['displayoptions'] = 'Διαθέσιμες επιλογές εμφάνισης';
$string['displayselect'] = 'Εμφάνιση';
$string['displayselect_help'] = 'Αυτή η ρύθμιση καθορίζει τον τρόπο εμφάνισης του WebEx. Οι επιλογές μπορεί να περιλαμβάνουν:

* Άνοιγμα - Μόνο το WebEx εμφανίζεται στο παράθυρο του περιηγητή
* Σε αναδυόμενο παράθυρο - Το WebEx εμφανίζεται σε ένα νέο παράθυρο περιηγητή χωρίς μενού ή γραμμή διευθύνσεων
* Σε πλαίσιο - Το WebEx εμφανίζεται μέσα σε ένα πλαίσιο κάτω από τη γραμμή πλοήγησης και την περιγραφή WebEx
* Νέο παράθυρο - Το WebEx εμφανίζεται σε ένα νέο παράθυρο περιηγητή με μενού και γραμμή διευθύνσεων';
$string['displayselectexplain'] = 'Επιλογή τύπου εμφάνισης. Δυστυχώς δεν είναι όλοι οι τύποι κατάλληλοι για όλα τα WebExs.';
$string['externalurl'] = 'Ο ιστότοπός σας';
$string['framesize'] = 'Ύψος πλαισίου';
$string['invalidstoredwebex'] = 'Αδυναμία εμφάνισης αυτού του πόρου, μη έγκυρο WebEX.';
$string['invalidwebex'] = 'Το WebEX που δόθηκε είναι μη έγκυρο';
$string['mettingkey'] = 'Αριθμός συνόδου';
$string['modulename'] = 'WebEx';
$string['modulenameplural'] = 'WebEx';
$string['neverseen'] = 'Καμία εμφάνιση';
$string['optionsheader'] = 'Επιλογές';
$string['page-mod-webex-x'] = 'Οποιαδήποτε σελίδα αρθρώματος WebEx';
$string['parameterinfo'] = '&amp;παράμετρος=μεταβλητή';
$string['parametersheader'] = 'Πληροφορίες συνόδου';
$string['parametersheader_help'] = 'Πληκτρολογήστε τον αριθμό συνόδου και τον κωδικό πρόσβασης για αυτή την σύνοδο σε κάθε κουτάκι(-α) κειμένου.';
$string['password'] = 'Κωδικός πρόσβασης';
$string['pluginadministration'] = 'Διαχείριση αρθρώματος WebEx';
$string['pluginname'] = 'WebEx';
$string['popupheight'] = 'Ύψος αναδυόμενου παράθυρου (σε εικονοστοιχεία)';
$string['popupheightexplain'] = 'Καθορίζει το προεπιλεγμένο ύψος των αναδυόμενων παραθύρων.';
$string['popupwidth'] = 'Πλάτος αναδυόμενου παράθυρου (σε εικονοστοιχεία)';
$string['popupwidthexplain'] = 'Καθορίζει το προεπιλεγμένο πλάτος των αναδυόμενων παραθύρων.';
$string['printheading'] = 'Εμφάνιση ονόματος WebEx';
$string['printheadingexplain'] = 'Εμφάνιση του ονόματος WebEx πάνω από το περιεχόμενο; Μερικοί τύποι εμφάνισης μπορεί να μην εμφανίσουν το όνομα WebEx ακόμη κι αν ενεργοποιηθεί.';
$string['printintro'] = 'Εμφάνιση περιγραφής WebEx';
$string['printintroexplain'] = 'Εμφάνιση του ονόματος WebEx κάτω από το περιεχόμενο; Μερικοί τύποι εμφάνισης μπορεί να μην εμφανίσουν το όνομα WebEx ακόμη κι αν ενεργοποιηθεί.';
$string['rolesinparams'] = 'Συμπερίληψη ονομάτων ρόλων στις παραμέτρους';
$string['serverwebex'] = 'Εξυπηρετητής WebEx';
$string['webex:view'] = 'Εμφάνιση WebEx';
