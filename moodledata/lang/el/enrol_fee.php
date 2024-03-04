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
 * Strings for component 'enrol_fee', language 'el', version '4.3'.
 *
 * @package     enrol_fee
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assignrole'] = 'Ανάθεση ρόλου';
$string['cost'] = 'Κόστος εγγραφής';
$string['costerror'] = 'Το κόστος εγγραφής πρέπει να είναι αριθμός.';
$string['currency'] = 'Νόμισμα';
$string['defaultrole'] = 'Προεπιλεγμένη ανάθεση ρόλου';
$string['defaultrole_desc'] = 'Επιλέξτε το ρόλο που θα εκχωρήσετε στους χρήστες μετά την πραγματοποίηση μιας πληρωμής.';
$string['enrolenddate'] = 'Ημερομηνία λήξης';
$string['enrolenddate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο μέχρι αυτήν την ημερομηνία.';
$string['enrolenddaterror'] = 'Η ημερομηνία λήξης εγγραφών δεν μπορεί να είναι προγενέστερη της ημερομηνίας έναρξης.';
$string['enrolperiod'] = 'Διάρκεια εγγραφής';
$string['enrolperiod_desc'] = 'Προεπιλεγμένη διάρκεια ισχύος της εγγραφής. Εάν οριστεί στο μηδέν, η διάρκεια εγγραφής θα είναι απεριόριστη από προεπιλογή.';
$string['enrolperiod_help'] = 'Διάρκεια ισχύος της εγγραφής, ξεκινώντας από τη στιγμή εγγραφής του χρήστη. Εάν απενεργοποιηθεί, η διάρκεια εγγραφής θα είναι απεριόριστη.';
$string['enrolstartdate'] = 'Ημερομηνία έναρξης';
$string['enrolstartdate_help'] = 'Εάν ενεργοποιηθεί, οι χρήστες μπορούν να εγγραφούν μόνο από αυτήν την ημερομηνία και μετά.';
$string['expiredaction'] = 'Ενέργεια λήξης εγγραφής';
$string['expiredaction_help'] = 'Επιλέξτε την ενέργεια που θα εκτελεστεί όταν λήξει η εγγραφή ενός χρήστη. Παρακαλούμε, σημειώστε ότι ορισμένα δεδομένα και ρυθμίσεις χρήστη διαγράφονται όταν ένας χρήστης έχει απεγγραφεί.';
$string['fee:config'] = 'Ρυθμίσεις εγγραφής σε στιγμιότυπα πληρωμής εγγραφής';
$string['fee:manage'] = 'Διαχείριση εγγεγραμμένων χρηστών';
$string['fee:unenrol'] = 'Κατάργηση εγγραφής χρηστών από μάθημα';
$string['fee:unenrolself'] = 'Κατάργηση εγγραφής μου από το μάθημα';
$string['nocost'] = 'Δεν υπάρχει κόστος εγγραφής σε αυτό το μάθημα!';
$string['paymentaccount'] = 'Λογαριασμός πληρωμής';
$string['paymentaccount_help'] = 'Τα κόστη εγγραφής θα καταβληθούν σε αυτόν τον λογαριασμό.';
$string['pluginname'] = 'Εγγραφή κατά την πληρωμή';
$string['pluginname_desc'] = 'Η μέθοδος εγγραφής «Πληρωμή κατά την εγγραφή» σάς επιτρέπει να οργανώσετε μαθήματα που απαιτούν πληρωμή. Εάν το κόστος για κάποιο μάθημα έχει οριστεί στο μηδέν, τότε οι μαθητές δεν καλούνται να πληρώσουν για είσοδο. Υπάρχει ένα κόστος που ορίζεται εδώ ως προεπιλογή για ολόκληρο τον ιστότοπο και στη συνέχεια μια ρύθμιση μαθήματος που μπορεί να οριστεί για κάθε μάθημα ξεχωριστά. Το κόστος του μαθήματος υπερισχύει του κόστους ιστοτόπου.';
$string['privacy:metadata'] = 'Το πρόσθετο Εγγραφή κατά την πληρωμή δεν αποθηκεύει προσωπικά δεδομένα.';
$string['purchasedescription'] = 'Εγγραφή στο μάθημα {$a}';
$string['sendpaymentbutton'] = 'Επιλογή τύπου πληρωμής';
$string['status'] = 'Να επιτρέπονται οι εγγραφές με «Εγγραφή κατά την πληρωμή»';
$string['status_desc'] = 'Επιτρέψτε στους χρήστες να κάνουν μια πληρωμή για εγγραφή σε ένα μάθημα από προεπιλογή.';
