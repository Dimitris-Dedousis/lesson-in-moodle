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
 * Strings for component 'grades', language 'el_uni', version '4.2'.
 *
 * @package     grades
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstudents'] = 'Όλοι οι φοιτητές';
$string['exportonlyactive_help'] = 'Να συμπεριληφθούν στην εξαγωγή μόνο φοιτητές των οποίων η εγγραφή είναι ενεργή και δεν έχει ανασταλεί';
$string['fixedstudents'] = 'Στατική στήλη φοιτητών';
$string['fixedstudents_help'] = 'Επιτρέπει στους βαθμούς να κυλάνε οριζόντια χωρίς να χάνεται η οπτική της στήλης των φοιτητών, κάνοντας την στατική.';
$string['forstudents'] = 'Για φοιτητές';
$string['gradebookhiddenerror'] = 'Το βαθμολόγιο είναι αυτή τη στιγμή ρυθμισμένο να κρύβει τα πάντα από τους φοιτητές.';
$string['hidden_help'] = 'Εάν επιλεχθεί, οι βαθμοί κρύβονται από τους φοιτητές. Μια ρύθμιση απόκρυψης έως μια ημερομηνία, μπορεί να οριστεί εάν είναι επιθυμητό, ώστε να λήξει η απόκρυψη αφού ολοκληρωθούν όλες οι βαθμολογίες.';
$string['hidetotalifhiddenitems_help'] = 'Αυτή η ρύθμιση καθορίζει αν τα σύνολα που περιέχουν κρυφά στοιχεία βαθμού εμφανίζονται στους φοιτητές ή αντικαθίστανται από μία παύλα (-). Αν εμφανίζονται, το σύνολο μπορεί να υπολογιστεί είτε εξαιρουμένων είτε συμπεριλαμβανομένων των κρυφών στοιχείων. Αν εξαιρεθούν τα κρυφά στοιχεία, το σύνολο θα είναι διαφορετικό από το σύνολο που φαίνεται από τον καθηγητή στην αναφορά βαθμολογητή, δεδομένου ότι ο καθηγητής βλέπει πάντα τα σύνολα υπολογισμένα από όλα τα στοιχεία, κρυφά ή όχι. Αν τα κρυφά στοιχεία συμπεριλαμβάνονται, οι φοιτητές θα έχουν την δυνατότητα να υπολογίσουν τα κρυφά στοιχεία.';
$string['intersectioninfo'] = 'Πληροφορίες Φοιτητή/Βαθμού';
$string['linkedactivity_help'] = 'Αυτή η ρύθμιση προσδιορίζει μια δραστηριότητα στην οποία αυτό το επιμέρους στοιχείο μαθησιακού αποτελέσματος συνδέεται. Αυτή μπορεί να χρησιμοποιηθει για την μέτρηση της απόδοσης φοιτητών με κριτήρια που δεν αξιολογούνται κατά την βαθμολογία της δραστηριότητας.';
$string['notteachererror'] = 'Πρέπει να είστε καθηγητής για να χρησιμοποιήσετε αυτή τη λειτουργία/χαρακτηριστικό.';
$string['recovergradesdefault_help'] = 'Από προεπιλογή ανάκτηση παλιών βαθμών όταν επανεγγράφεται ένας φοιτητής σε ένα μάθημα.';
$string['showallstudents'] = 'Εμφάνιση όλων των φοιτητών';
$string['showaverage_help'] = 'Εμφάνιση της στήλης μέσου όρου; Σημειώστε ότι οι συμετέχοντες έχουν την δυνατότητα να μαντέψουν τους βαθμούς άλλων φοιτητών αν ο μέσος όρος είναι υπολογισμένος από μικρό αριθμό βαθμών. Για λόγους απόδοσης ο μέσος όρος είναι κατά προσέγγιση, αν εξαρτάται από τυχόν κρυφά στοιχεία.';
$string['showhiddenitems_help'] = 'Το αν τα κρυμμένα στοιχεία βαθμού θα είναι κρυμμένα εξ ολοκλήρου ή αν τα ονόματα των στοιχείων κρυφών βαθμών θα είναι ορατά στους φοιτητές.

* Εμφάνιση κρυφών - Θα εμφανίζονται τα ονόματα κρυφών βαθμών, αλλά οι βαθμοί των φοιτητών θα είναι κρυμμένοι
* Μόνο κρυμμένα μέχρι - Τα στοιχεία βαθμού με «απόκρυψη μέχρι» ορισμένη ημερομηνία θα είναι κρυμμένα τελείως μέχρι την καθορισμένη ημερομηνία, μετά την οποία θα εμφανίζεται ολόκληρο το στοιχείο
* Να μην εμφανίζονται - Τα στοιχεία κρυφών βαθμών θα είναι εντελώς κρυμμένα.';
$string['student'] = 'Φοιτητής';
$string['studentsperpage'] = 'Φοιτητές ανά σελίδα';
$string['studentsperpage_help'] = 'Ο αριθμός των φοιτητών που θα εμφανίζονται ανά σελίδα στην αναφορά βαθμολογητή.';
$string['studentsperpagereduced'] = 'Ο μέγιστος αριθμός φοιτητών ανά σελίδα μειώθηκε από {$a->originalstudentsperpage} σε {$a->studentsperpage}. Εξετάστε το ενδεχόμενο αύξησης της ρύθμισης PHP max_input_vars από {$a->maxinputvars}.';
